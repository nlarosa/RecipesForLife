create or replace package body RFLpack
is
  --checks if recID is a recipe
  function isRecipe(recID recipe.ID%type)
	return number
	is
		x number;
	begin
		select count(*)
		into x 
		FROM recipe
		WHERE ID=recID;

		return x;
	end;

  --adds recipe to users calendar
  procedure addScheduledRecipe(email scheduledRecipe.email%type, recID scheduledRecipe.recipeID%type, schedDate varchar)
  	is
	begin
		INSERT into scheduledRecipe
		values(email, recID, TO_DATE(schedDate,'DD/MM/YYYY'));
	end;

  --gets shoping list
  procedure getShoppingList(email scheduledRecipe.email%type, schedDate1 varchar2, schedDate2 varchar, results OUT sys_refcursor)
  	is
		date1 date;
		date2 date;
	begin
		date1 := TO_DATE(schedDate1,'DD/MM/YYYY' );
		date2 := TO_DATE(schedDate2,'DD/MM/YYYY' );
		open results for
			select i.NAME, ri.amount, ri.unit
			from ingredient i, recipeIngredient ri, scheduledRecipe sr
			where i.ID = ri.IngredientID and ri.RecipeID = sr.RecipeID and sr.scheduledDate >= date1 and sr.scheduledDate <= date2
			order by i.NAME asc;
	end;
	
  --get recipes schedule for user
  procedure getScheduledRecipes(email scheduledRecipe.email%type, schedDate varchar2, results OUT sys_refcursor)
	is
	BEGIN
		open results for  
			SELECT r.Name, r.ID
			FROM scheduledRecipe s, recipe r 
			WHERE s.email = email and scheduledDate = TO_DATE(schedDate, 'DD/MM/YYYY') and r.ID = s.RecipeID
			order by s.scheduledDate asc;
	END;

  --adds recipe to database
  procedure addRecipe(AuthorEmail recipe.authorEmail%type, name recipe.name%type, directions recipe.directions%type, servings recipe.servings%type, prepTime recipe.preptime%type,parentRecipe recipe.parentRecipeID%type default NULL, img recipe.IMG%type default Null)
	is 
		recipeID recipe.id%type;
	begin
		select auto_recipeID.nextval into recipeID from dual;

		INSERT into recipe (ID, authorEmail, name, directions, servings, prepTime, parentRecipeID, img) 
		values (recipeID, AuthorEmail, name, directions, servings, prepTime, parentRecipe, img);

		commit;
	end;

  function addRecipeReturnID( AuthorEmail recipe.authorEmail%type, name recipe.name%type, directions recipe.directions%type, servings recipe.servings%type, prepTime recipe.preptime%type,parentRecipe recipe.parentRecipeID%type default NULL, img recipe.IMG%type default Null ) return recipe.id%type
	is
		PRAGMA AUTONOMOUS_TRANSACTION; 
		recipeID recipe.id%type;
	begin
		select auto_recipeID.nextval into recipeID from dual;

		INSERT into recipe (ID, authorEmail, name, directions, servings, prepTime, parentRecipeID, img) 
		values (recipeID, AuthorEmail, name, directions, servings, prepTime, parentRecipe, img);

		commit;

		return recipeID;
	end;

	
  --add entry to recipeIngredient table
  procedure addRecipeIngred(recipeName recipe.name%type, ingredName ingredient.name%type, amount recipeIngredient.amount%type, unit recipeIngredient.unit%type)
	is 
		ingredID ingredient.ID%type;
		recID recipe.ID%type;
		cursor recIDs 
		is 
			select id
			from recipe
			where name = recipeName;
	begin
		select id
		into ingredID
		from ingredient
		where name = ingredName;

		--can be more than one recipes with same name take most recent
		for line in recIDs loop
			recID := line.ID;
		end loop;
		
		INSERT into recipeIngredient
		values(recID, ingredID, amount, unit);
	end; 	

  --returns ref cursor to all ingredients id and name
  procedure getRecipeIngreds(recID recipe.ID%type, results OUT sys_refcursor)
	is
	begin
		open results for
			select i.id, i.name, r.amount, r.unit
			from ingredient i, recipeIngredient r
			where r.recipeID = recID and r.ingredientID = i.ID;
	end;

  --returns unitNames given ingreient id
  procedure getIngredientUnits( ID number , results OUT sys_refcursor)
	is
	begin
		open results for
			select unitName
			from ingredientUnit
			where ingredientID = ID
			UNION
			select name 
			from generalUnit
			where ID = ID; 
		end;

  function getIngredientUnitsAsTable( ID number ) return unitNameTable pipelined
	as
		results unitNameTable;
		query varchar2(500);

		loopCursor sys_refcursor;
		nextRow unitName;
	begin
		query := '( select unitName as val from ingredientUnit u where ingredientID = :x ) union ( select name as val from generalUnit )';

		open loopCursor for query using ID;			-- oepn cursor for query
		loop
			fetch loopCursor into nextRow;
			exit when loopCursor%notFound;
			pipe row( nextRow );
		end loop;
		
		return;
	end;

  function getIngredientOptionsAsTable( ID number ) return optionNameTable pipelined
	as
		results optionNameTable;
		query varchar2(500);

		loopCursor sys_refcursor;
		nextRow optionName;

		cursor ingredientUnit_cursor							-- check all ingredient's units for options
		is
			select *
			from ingredientUnit
			where ingredientID = ID;

		cursor generalUnit_cursor							-- check if optioned unit contained in either
		is
			select *
			from generalUnit;

		--cursor alternativeUnitName_cursor						-- check if optioned unit contained in either
		--is
		--	select *
		--	from alternativeUnitName;

		generalUnitName varchar2(100) := '';						-- only find options following general units
		optionNameStr varchar2(100) := '';
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
							optionNameStr := substr( u.unitName, i+2, length( u.unitName ) - 1 );
							dbms_output.put_line( 'Option exists: ' || optionNameStr || ' with ' || u.gramsPerUnit || ' grams per ' || generalUnitName );
							nextRow.optionName := optionNameStr;
							pipe row( nextRow );
						end if;
					end loop;

					--for c in alternativeUnitName_cursor
					--loop
					--	if c.name = generalUnitName then
					--		optionNameStr := substr( u.unitName, i+2, length( u.unitName ) - 1 );
					--		dbms_output.put_line( 'Option exists: ' || optionNameStr || ' with ' || u.gramsPerUnit || ' grams per ' || generalUnitName );	
					--		nextRow.optionName := optionNameStr;
					--		pipe row( nextRow );
					--	end if;
					--end loop;

					generalUnitName := null;
				else
					generalUnitName := generalUnitName || substr( u.unitName, i, 1 );
				end if;
			end loop;
		end loop;
		
		return;
	end;

  function getIngredientOptions( ID number ) return number		-- some ingredients have different forms
	as 
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

		--cursor alternativeUnitName_cursor						-- check if optioned unit contained in either
		--is
		--	select *
		--	from alternativeUnitName;

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

					--for c in alternativeUnitName_cursor
					--loop
					--	if c.name = generalUnitName then
					--		optionName := substr( u.unitName, i+2, length( u.unitName ) - 1 );
					--		dbms_output.put_line( 'Option exists: ' || optionName || ' with ' || u.gramsPerUnit || ' grams per ' || generalUnitName );	
					--	end if;
					--end loop;

					generalUnitName := null;
				else
					generalUnitName := generalUnitName || substr( u.unitName, i, 1 );
				end if;
			end loop;
		end loop;

		return 0;
	end;

	--is
	--	query varchar2(200);
		

	--begin
	--	for c in ingredient_cursor 
	--	loop
	--		ingredientName := c.name;
	--		calculation := ( grams / 100 ) * c.caloriesPer100g;
	--		dbms_output.put_line( 'There are ' || calculation || ' calories in ' || grams || ' g of ' || ingredientName );
	--	end loop;

	--	for p in hasProximate_cursor
	--	loop
	--		calculation := ( grams / 100 ) * p.gramsPer100g;
	--		dbms_output.put_line( 'There are ' || calculation || ' g of ' || p.name || ' in ' || grams || ' g of ' || ingredientName );
	--	end loop;
--
--		return 0;
--	end;

  procedure getIngredientProximates( argID number, grams number, results OUT sys_refcursor )
	is
		query varchar2(200);
	begin
		query := 'select p.name, ( :x / 100 ) * h.gramsPer100g as amount from proximate p, hasProximate h where p.id = h.proximateID and h.ingredientID = :y';
		open results for query using grams, argID;
	end;

  procedure getIngredientLipids( argID number, grams number, results OUT sys_refcursor )
	is
		query varchar2(200);
	begin
		query := 'select l.name, ( :x / 100 ) * h.milligramsPer100g as amount from lipid l, hasLipid h where l.id = h.lipidID and h.ingredientID = :y';
		open results for query using grams, argID;
	end;

  procedure getIngredientVitamins( argID number, grams number, results OUT sys_refcursor )
	is
		query varchar2(200);
	begin
		query := 'select v.name, ( :x / 100 ) * v.microgramsPer100g as amount from vitamin v, hasVitamin h where v.id = h.vitaminID and h.ingredientID = :y';
		open results for query using grams, argID;
	end;

  procedure getIngredientMinerals( argID number, grams number, results OUT sys_refcursor )  
	is
		query varchar2(200);
	begin
		query := 'select m.name, ( :x / 100 ) * h.microgramsPer100g as amount from mineral m, hasMineral h where m.id = h.mineralID and h.ingredientID = :y';
		open results for query using grams, argID;
	end;

  function getIngredientGrams( ID ingredient.ID%type, numUnit number, unit varchar2, argOption varchar2 ) return number
	is
		generalUnitID number := 0;
		generalUnitName varchar2(200) := '';

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

		--cursor alternativeUnitName_cursor
		--is
		--	select *
		--	from alternativeUnitName;

	begin
		if unit like 'gram' then
			return numUnit;
		end if;

 		for u in ingredientUnit_cursor				-- check the ingredientID table to see if we can build a DB unit
		loop
			dbms_output.put_line( 'Ingredient unit: ' || u.unitName );

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

			--for a in alternativeUnitName_cursor
			--loop
			--	if regexp_like( u.unitName, a.name || '.*' || argOption ) then
			--		dbms_output.put_line( 'There is a grams measurement for alt. unit ' || a.name );
			--		generalUnitID := a.unitID;
			--		grams := u.gramsPerUnit * numUnit;
			--	end if;

			--if unit = a.name then
	--				dbms_output.put_line( 'The destination ID is ' || a.unitID || ' for ' || a.name );
			--		destinationUnitID := a.unitID;
			--	end if;
			--end loop;

			--exit when destinationUnitID != 0 and grams != 0;		-- both desired values found
		end loop;

		if generalUnitID = 0 or destinationUnitID = 0 then	-- no conversion possible, or no destination found from DB units, look in general units

			for g in generalUnit_cursor
			loop
				dbms_output.put_line( 'General unit: ' || g.name );
		
				if g.name = unit then
					destinationUnitID := 4;
					generalUnitID := g.id;			-- convert from grams
					grams := numUnit;
					exit;
				end if;

			end loop;
		
			if generalUnitID = 0 or destinationUnitID = 0 then

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
				grams := grams * conv.contains;
				dbms_output.put_line( 'There are ' || conv.contains || ' of unit ID ' || generalUnitID || ' in ' || conv.nextID );
				dbms_output.put_line( 'Current count: ' || grams );
				generalUnitID := conv.nextID;
				dbms_output.put_line( 'To ' || conv.nextID );
			end loop;

			return grams;

		end if;

		dbms_output.put_line( 'Initial count: ' || grams );

		while not generalUnitID = destinationUnitID	-- convert down
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


  function querySplit( query varchar2, delimiter varchar2 default ',', duplicateTokens in number default 0 ) return sys.dbms_debug_vc2coll
	is
		wordTable sys.dbms_debug_vc2coll;
	begin
		select replace( replace( upper( regexp_substr( query, '[^' || delimiter || ']+', 1, level ) ), '(', '' ), ')', '' )
		bulk collect into wordTable
		from dual
		connect by regexp_substr( query, '[^' || delimiter || ']+', 1, level ) is not null
		order by level;										-- courtesy of stackOverflow user tbone

		if( duplicateTokens > 0 ) then
			return wordTable multiset union distinct wordTable;
		end if;
		return wordTable;
	end;

  --gets quality of hits
  function getQuality(searched varchar2, name varchar2)
	return number
	IS
	quality number;
	BEGIN
	SELECT sum(r)
        INTO quality
        FROM(
                SELECT column_value, ROWNUM as r
                from table( RFLpack.querySplit( name, ' ', 1 ) )
        ) ingred_name
        JOIN table( RFLpack.querySplit( searched, ' ', 1 ) ) s
        ON s.column_value = ingred_name.column_value;
 	return quality;
	END;

  --returns refcursor of matched ingredients
  procedure searchIngredients( searchQuery IN varchar2, results OUT sys_refcursor )
	is
	begin
		open results for
			SELECT ID, name, hits, RFLpack.getQuality(searchQuery, name) as q
        		FROM (
                		select i.ID, i.name, count(1) as hits
                		from ingredient i, table( RFLpack.querySplit( i.name, ' ', 1 ) )
                		where column_value in ( select column_value from table( RFLpack.querySplit( searchQuery, ' ', 1 ) ) )
                		group by i.ID, i.name
                		having count(1) >= ( select ( count(*) + 1 ) / 2 from table( querySplit( searchQuery, ' ', 1 ) ) )      -- at least one match 
        			)
        		order by hits desc, q asc, ID desc;
	end;

  function searchIngredientsUsingIndex( ingredient varchar2, options varchar2, numResults number ) return sys_refcursor
	is
		searchQuery varchar2(1000) := ingredient || ' ' || options;
		ingredientWords sys_refcursor;
		ingredientWord varchar2(100);
		optionWords sys_refcursor;
		optionWord varchar2(100);		

		exactMatch varchar2(1000) := '{';
		reverseExactMatch varchar2(1000) := '}';
		combinedMatch varchar2(1000) := '({';
		fuzzyMatch varchar2(1000) := '(';
		listMatch varchar2(1000) := '';
		stemMatch varchar2(1000) := '(';
	
		fullContains varchar2(4000) := '';

		results sys_refcursor;
	begin		
		open ingredientWords for 'select * from table( RFLpack.querySplit( :x, '' '', 1 ) )' using ingredient;
		open optionWords for 'select *  from table( RFLpack.querySplit( :y, '' '', 1 ) )' using options;

		loop					-- for each word, build onto strings
			fetch ingredientWords into ingredientWord;
			exit when ingredientWords%notFound;
		
			exactMatch := exactMatch || ingredientWord || ' ';
			reverseExactMatch := ' ' || ingredientWord || reverseExactMatch;
			combinedMatch := combinedMatch || ingredientWord || '} and {';
			fuzzyMatch := fuzzyMatch || 'fuzzy({' || ingredientWord || '}, 70, 100, weight) accum ';
			listMatch := listMatch || ingredientWord || ' ';
			stemMatch := stemMatch || '($' || ingredientWord || ') accum ';

		end loop;

		if nvl( options, 'x' ) != 'x' then

			dbms_output.put_line( 'Options set.' );

			loop
				fetch optionWords into optionWord;
				exit when optionWords%notFound;

				dbms_output.put_line( optionWord );

				exactMatch := exactMatch || optionWord || ' ';
				reverseExactMatch := ' ' || optionWord || reverseExactMatch;
				combinedMatch := combinedMatch || optionWord || '} and {';
				stemMatch := stemMatch || '($' || optionWord || ') accum ';
				fuzzyMatch := fuzzyMatch || 'fuzzy({' || optionWord || '}, 70, 100, weight) accum ';
				listMatch := listMatch || optionWord || ' ';
			end loop;

		end if;

		exactMatch := substr( exactMatch, 0, length( exactMatch ) - 1 ) || '} * 10 * 10';
		reverseExactMatch := '{' || reverseExactMatch;
		reverseExactMatch := reverseExactMatch || ' * 10 * 10';
		combinedMatch := substr( combinedMatch, 0, length( combinedMatch ) - 6 ) || ') * 10';
		fuzzyMatch := substr( fuzzyMatch, 0, length( fuzzyMatch ) - 7 ) || ')';
		listMatch := substr( listMatch, 0, length( listMatch ) - 1 );
		stemMatch := substr( stemMatch, 0, length( stemMatch ) - 7 ) || ')';				

		--dbms_output.put_line( exactMatch );
		--dbms_output.put_line( combinedMatch );
		--dbms_output.put_line( fuzzyMatch );
		--dbms_output.put_line( listMatch );
		--dbms_output.put_line( stemMatch );

		fullContains := exactMatch || ' or ' || reverseExactMatch || ' or ' || combinedMatch || ' or ' || stemMatch || ' or ' || fuzzyMatch;
		--fullContains := stemMatch || ' or ' || fuzzyMatch;

		dbms_output.put_line( fullContains );
		
		--open results for 'select * from ( select score(1), id, name from ingredient where contains ( name, :x, 1 ) > 0 order by score(1) desc, length( name ) asc ) where rownum <= :y' using fullContains, numResults;

		open results for 'select * from ( select score(1), id, name from ingredient where contains( name, :x, 1 ) > 0 order by score( 1 ) desc, length( name ) asc, utl_match.jaro_winkler_similarity( :y, name ) desc, utl_match.edit_distance( :y, name ) desc ) where rownum <= :z' using fullContains, listMatch, listMatch, numResults;	
	
		return results;
	end;

  function searchIngredientsWithOptions( ingredient varchar2, options varchar2 ) return sys_refcursor
	is
		searchQuery varchar2(1000) := ingredient || ' ' || options;
		results sys_refcursor;
	begin
		open results for
			SELECT ID, name, hits, RFLpack.getQuality(searchQuery, name) as q
        		FROM (
                		select i.ID, i.name, count(1) as hits
                		from ingredient i, table( RFLpack.querySplit( i.name, ' ', 1 ) )
                		where column_value in ( select column_value from table( RFLpack.querySplit( searchQuery, ' ', 1 ) ) )
                		group by i.ID, i.name
                		having count(1) >= ( select ( count(*) + 1 ) / 2 from table( RFLpack.querySplit( searchQuery, ' ', 1 ) ) )      -- at least one match 
        			)
        		order by hits desc, q asc, ID desc;

		return results;
	end;

  function searchIngredientsAndUnits( ingredient varchar2, options varchar2, unit varchar2 ) return sys_refcursor
	is
		results sys_refcursor;
	begin
		return results;
	end;

  /*--checks if recipe has all off the given ingredients
  function hasIngreds( r recipe.ID%type, ingredsIN varchar2, ingredsEx varchar2)
	return number
	is
	n number;
	x number;
	BEGIN
		--gets count of ingredIn that recipe includes
		SELECT count(*)
		into n
		FROM ingredient i, recipeIngredient r
		WHERE i.ID = r.ingredientID and i.name in (select column_value from table( RFLpack.querySplit(ingredsIn, ' ', 1) )); 
		
		--gets count on ingredsIN
		SELECT count(*)	
		into x
		FROM table( RFLpack.querySplit(ingredsIn, ' ', 1) );

		if x != n then
			return 0;
		END IF;
	
		--gets count of ingredsEx that recipe includes
                SELECT count(*)
                into n  
                FROM ingredient i, recipeIngredient r
                WHERE i.ID = r.ingredientID and i.name in (select column_value from table( RFLpack.querySplit(ingredsEx, ' ', 1) ));

		if n = 0 then
			return 1;
		else
			return 0;
		END IF;
	END;	
*/
  --returns refcursor of matched recipes, pass input in as long string we'll parse with split query
  procedure searchMyRecipes( searchQuery IN varchar2, user_email IN account.email%type, results OUT sys_refcursor )
        is
        begin
                open results for
                        SELECT ID, name, AuthorEmail, IMG, Directions, Servings, PrepTime, hits, RFLpack.getQuality(searchQuery, name) as q
                        FROM (
                                select r.ID, r.name, r.AuthorEmail, r.IMG, r.Directions, r.Servings, r.PrepTime, count(1) as hits
                                from recipe r, table( RFLpack.querySplit( r.name, ' ', 1 ) )
                                where column_value in ( select column_value from table( querySplit( searchQuery, ' ', 1 ) ) ) and r.authorEmail = user_email
                                group by r.ID, r.name, r.AuthorEmail, r.IMG, r.Directions, r.Servings, r.PrepTime
                                having count(1) >= ( select ( count(*) + 1 ) / 2 from table( querySplit( searchQuery, ' ', 1 ) ) )      -- at least one match 
                                )
                        order by hits desc, q asc, ID desc;	
        end;

    --returns refcursor of matched recipes, pass input in as long string we'll parse with split query
  procedure searchRecipes( searchQuery IN varchar2, results OUT sys_refcursor )
        is
        begin
                open results for
                        SELECT ID, name, AuthorEmail, IMG, Directions, Servings, PrepTime, hits, RFLpack.getQuality(searchQuery, name) as q
                        FROM (
                                select r.ID, r.name, r.AuthorEmail, r.IMG, r.Directions, r.Servings, r.PrepTime, count(1) as hits
                                from recipe r, table( RFLpack.querySplit( r.name, ' ', 1 ) )
                                where column_value in ( select column_value from table( querySplit( searchQuery, ' ', 1 ) ) ) 
                                group by r.ID, r.name, r.AuthorEmail, r.IMG, r.Directions, r.Servings, r.PrepTime
                                having count(1) >= ( select ( count(*) + 1 ) / 2 from table( querySplit( searchQuery, ' ', 1 ) ) )      -- at least one match 
                                )
                        order by hits desc, q asc, ID desc;
        end;



--  function lactoseFree( recipeID recipe.ID%TYPE ) return boolean
--	as
--		isDairyFree boolean := false;
--		type tableIDs is table of recipeIngredient.ingredientID%type;
--
--		IDs tableIDs;			-- get IDs of ingredients that contain lactose	
--
--		cursor ingredientsInRecipe is
--			select * from recipeIngredient r
--			where r.recipeID = :recipeID and r.ingredientID in
--			(
--				select ID from ingredient i, proximate p, hasProximate h
--				where p.name = 'Lactose' and p.ID = h.proximateID and i.ID = h.ingredientID and h.gramsPer100g > 0;
--			);
--	begin
--		for i in ingredientsInRecipe
--		loop
--			dbms_output.put_line( i.ingredientID );
--		end loop;
--	end;

  function userExists( email account.email%type ) return integer			-- return 1 if user exists
	is
		userBool boolean := false;
		query varchar2(1000);
		result integer;
	begin
		query := 'select count(*) from account where email = :x';

		execute immediate query into result using email;

		return result;		
	end;

  function createUser( email account.email%type, password account.password%type, zipcode account.zipcode%type ) return integer 		-- return 1 if user created
	is
		query varchar2(1000);
	begin
		if RFLpack.userExists( email ) = 0 then					-- user email is valid
			query := 'insert into account values( :x, :y, :z )';
			execute immediate query using email, password, zipcode;
			commit;
			return 1;
		else
			return 0;							-- user email exists
		end if;
	exception
		when others then
			return 0;
	end;

  function verifyCredentials( email account.email%type, password account.password%type ) return integer		-- return 1 if user credentials correct
	is
		query varchar2(1000);
		result integer;
	begin
		query := 'select count(*) from account where email = :x and password = :y';
		
		execute immediate query into result using email, password;
		
		return result;
	end;

  end RFLpack;
/


