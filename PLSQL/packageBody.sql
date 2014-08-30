
set serveroutput on;

drop type conversionStep;

create type conversionStep as object
(
	generalUnitID number,
	multiple number
);
/


--returns unitNames given ingreient id
create or replace function getIngredientUnits( ID number ) return sys_refcursor
	is
		results sys_refcursor;
	begin
		open results for
			select unitName
			from ingredientUnit
			where ingredientID = ID
			UNION
			select name 
			from generalUnit
			where ID = ID; 
		
		return results;
	end;
/

create or replace function getIngredientOptions( ID number ) return number			-- some ingredients have different forms
	is 
		results sys_refcursor;

		cursor ingredientUnit_cursor							-- check all ingredient's units for options
		is
			select *
			from ingredientUnit
			where ingredientID = ID;

		cursor generalUnit_cursor							-- check if optioned unit contained in either
		is
			select *
			from generalUnit;

		cursor alternativeUnitName_cursor						-- check if optioned unit contained in either
		is
			select *
			from alternativeUnitName;

		generalUnitName varchar2(100) := '';						-- only find options following general units
		optionName varchar2(100) := '';
	begin
		for u in ingredientUnit_cursor							-- parse every ingredient unit for general unit
		loop
			generalUnitName := null;
			
			for i in 1 .. length( u.unitName )
			loop
				if substr( u.unitName, i, 1 ) = ',' then

					for c in generalUnit_cursor
					loop
						if c.name = generalUnitName then
							optionName := substr( u.unitName, i+2, length( u.unitName ) - 1 );
							dbms_output.put_line( 'Option exists: ' || optionName || ' with ' || u.gramsPerUnit || ' grams per ' || generalUnitName );
						end if;
					end loop;

					for c in alternativeUnitName_cursor
					loop
						if c.name = generalUnitName then
							optionName := substr( u.unitName, i+2, length( u.unitName ) - 1 );
							dbms_output.put_line( 'Option exists: ' || optionName || ' with ' || u.gramsPerUnit || ' grams per ' || generalUnitName );	
						end if;
					end loop;

					generalUnitName := null;
				else
					generalUnitName := generalUnitName || substr( u.unitName, i, 1 );
				end if;
			end loop;
		end loop;

		return 0;
	end;
/

create or replace function getIngredientProximates( argID number, grams number ) return number
	is
		cursor hasProximate_cursor is
			select *
			from proximate p, hasProximate h
			where h.ingredientID = argID and h.proximateID = p.ID;

		cursor ingredient_cursor is
			select *
			from ingredient
			where ID = argID;
	
		calculation number;
		ingredientName varchar2(100);
	begin
		for c in ingredient_cursor 
		loop
			ingredientName := c.name;
			calculation := ( grams / 100 ) * c.caloriesPer100g;
			dbms_output.put_line( 'There are ' || calculation || ' calories in ' || grams || ' g of ' || ingredientName );
		end loop;

		for p in hasProximate_cursor
		loop
			calculation := ( grams / 100 ) * p.gramsPer100g;
			dbms_output.put_line( 'There are ' || calculation || ' g of ' || p.name || ' in ' || grams || ' g of ' || ingredientName );
		end loop;

		return 0;
	end;
/

create or replace function searchIngredients( searchQuery varchar2 ) return sys_refcursor
	is
		results sys_refcursor;
		ingredientRow ingredient%ROWTYPE;
		currentWord varchar2(50) := '';
		currentIndex PLS_INTEGER := 0;
		lastIndex PLS_INTEGER := 0;
		type assoc_array_num_type is table of varchar2(50) index by PLS_INTEGER;
		sqlQuery varchar2(1000);
		wordArray assoc_array_num_type;
		a_null char(1);
	begin
		for i in 1 .. length( searchQuery )
		loop
			if substr( searchQuery, i, 1 ) = ' ' then
				wordArray( currentIndex ) := currentWord;
				currentIndex := currentIndex + 1;
				currentWord := '';
			else
				currentWord := currentWord || substr( searchQuery, i, 1 );
			end if;
		end loop;

		wordArray( currentIndex ) := currentWord;

		lastIndex := currentIndex;
		currentIndex := 0;
		currentWord := wordArray(0);
		loop
			exit when currentWord is null;
			dbms_output.put_line( 'Word: ' || currentWord );
			
			if currentIndex = 0 then
				sqlQuery := '( select * from :x where regexp_like( name, ''' || currentWord || ''', ''i'' ) )';
				dbms_output.put_line( sqlQuery );
			elsif currentIndex = lastIndex then
				sqlQuery := '( select * into results from ' || sqlQuery || ' where regexp_like( name, ''' || currentWord || ''', ''i'' ) )';
				dbms_output.put_line( sqlQuery );
			else
				sqlQuery := '( select * from ' || sqlQuery || ' where regexp_like( name, ''' || currentWord || ''', ''i'' ) )';
				dbms_output.put_line( sqlQuery );
			end if;

			currentWord := wordArray( currentIndex + 1 );
			currentIndex := currentIndex + 1;
		end loop;

		--open results for sqlQuery using 'ingredient';

		execute immediate sqlQuery using 'ingredient';

		return results;
	end;
/

create or replace function getIngredientGrams( ID ingredient.ID%type, numUnit number, unit varchar2, argOption varchar2 ) return number
	is
		generalUnitID number := 0;
		generalUnitName varchar2(100) := '';

		destinationUnitID number := 0;				-- this is the general unit destination ID

		upUnitID number;
		downUnitID number;

		grams number := 0;
		conv unitConversion%rowtype;
		step conversionStep;

		cursor ingredientUnit_cursor
		is
			select *
			from ingredientUnit
			where ingredientID = ID;

		cursor generalUnit_cursor
		is
			select *
			from generalUnit;

		cursor alternativeUnitName_cursor
		is
			select *
			from alternativeUnitName;

	begin
 		for u in ingredientUnit_cursor				-- check the ingredientID table
		loop
			if regexp_like( u.unitName, unit || '.*' || argOption ) then		-- check for option
				dbms_output.put_line( 'There are ' || u.gramsPerUnit || ' grams per ' || u.unitName || '.' );
				grams := u.gramsPerUnit * numUnit;
				return grams;
			end if;

			--if regexp_like( u.unitName, unit ) then					-- check without option
			--	dbms_output.put_line( 'There are ' || u.gramsPerUnit || ' grams per ' || u.unitName || '.' );
			--	grams := u.gramsPerUnit * numUnit;
			--	return grams;
			--end if;

			if regexp_like( u.unitName, argOption ) then
				dbms_output.put_line( 'There is an ingredient option ' || argOption );
			end if; 

			for g in generalUnit_cursor			-- or make sure we have a general unit in ingredientUnit
			loop
				if regexp_like( u.unitName, g.name || '.*' || argOption ) then
					dbms_output.put_line( 'There is a grams measurement for general unit ' || g.name );
					generalUnitID := g.ID;
					grams := u.gramsPerUnit * numUnit;
				end if;

				if unit = g.name then
					dbms_output.put_line( 'The destination ID is ' || g.ID || ' for ' || g.name );
					destinationUnitID := g.ID;
				end if;
			end loop;

			exit when destinationUnitID != 0 and grams != 0;		-- both desired values found

			dbms_output.put_line( 'Destination ID: ' || destinationUnitID || ', Grams: ' || grams );

			for a in alternativeUnitName_cursor
			loop
				if regexp_like( u.unitName, a.name || '.*' || argOption ) then
					dbms_output.put_line( 'There is a grams measurement for alt. unit ' || a.name );
					generalUnitID := a.unitID;
					grams := u.gramsPerUnit * numUnit;
				end if;

				if unit = a.name then
					dbms_output.put_line( 'The destination ID is ' || a.unitID || ' for ' || a.name );
					destinationUnitID := a.unitID;
				end if;
			end loop;

			exit when destinationUnitID != 0 and grams != 0;		-- both desired values found
		end loop;

		if generalUnitID = 0 or destinationUnitID = 0 then	-- no conversion possible, or no destination found
			dbms_output.put_line( 'Invalid unit' );
			return 0;
		end if;

		dbms_output.put_line( 'Initial count: ' || grams );

		while not generalUnitID = destinationUnitID
		loop
			dbms_output.put_line( 'Converting from ' || generalUnitID );
			if destinationUnitID > generalUnitID then
				select * into conv
				from unitConversion
				where unitID = generalUnitID and nextID > generalUnitID;
			else
				select * into conv
				from unitConversion
				where unitID = generalUnitID and nextID < generalUnitID;
			end if;
			grams := grams / conv.contains;
			dbms_output.put_line( 'There are ' || conv.contains || ' of unit ID ' || generalUnitID || ' in ' || conv.nextID );
			dbms_output.put_line( 'Current count: ' || grams );
			generalUnitID := conv.nextID;
			dbms_output.put_line( 'To ' || conv.nextID );
		end loop;

		return grams;
	end;
/

create or replace function querySplit( query varchar2, delimiter varchar2 default ',', duplicateTokens number default 0 ) return sys.dbms_debug_vc2coll
	as
		wordTable sys.dbms_debug_vc2coll;
	begin
		select upper( regexp_substr( query, '[^' || delimiter || ']+', 1, level ) )
		bulk collect into wordTable
		from dual
		connect by regexp_substr( query, '[^' || delimiter || ']+', 1, level ) is not null
		order by level;										-- courtesy of stackOverflow user tbone

		if( duplicateTokens > 0 ) then
			return wordTable multiset union distinct wordTable;
		end if;
		return wordTable;
	end;
/

create or replace function searchIngredients( query varchar2 ) return sys_refcursor
	as
		cursorID integer;
		bindVarCount integer := 0;
		sqlQuery varchar2(1000);
		results sys_refcursor;
	begin
		cursorID := dbms_sql.open_cursor;			-- cursorID references cursor contents
	
		sqlQuery := 'select i.ID, i.name, count(1) as hits ';
		sqlQuery := sqlQuery || 'from ingredient i, table( querySplit( i.name, '' '', 1 ) ) ';
		sqlQuery := sqlQuery || 'where ';

		for i in table( querySplit( searchQuery, ' ', 1 ) )			-- build a LIKE statement to match to each word
		loop
			sqlQuery := sqlQuery || 'regexp_like( column_value, :' || bindVarCount || ' ) OR ';
			bindVarCount := bindVarCount + 1;
		end loop;

		sqlQuery := substr( sqlQuery, 0, length( sqlQuery ) - 2 );

		dbms_output.put_line( sqlQuery );

		--select ' LIKE ''%' || 

		--open results for

			--select i.ID, i.name, count(1) as hits
			--from ingredient i, table( querySplit( i.name, ' ', 1 ) )					-- for each word, see if it is also a word in the query
			--where column_value in ( select column_value from table( querySplit( query, ' ', 1 ) ) )
			--group by i.ID, i.name
			--having count(1) >= ( select ( count(*) + 1 ) / 2 from table( querySplit( query, ' ', 1 ) ) )	-- at least one match 
			--order by count(1) desc, i.ID asc;

		return results;
	end;
/

