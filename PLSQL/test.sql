
create or replace function searchIngredientsWithIndex( ingredient varchar2, options varchar2, results number ) return sys_refcursor
	is
		results sys_refcursor
		searchQuery varchar2(1000) := ingredient || options;
		containsString varchar2(2000);
		
		cursor wordCursor;
	begin
		execute immediate 'select * into wordCursorfrom table( RFLpack.querySplit( :x, '' '', 1 ) )' using searchQuery;

		for wordCursor
		loop
			

		SELECT score(1), sortname 
FROM   TEMP_CUSTOMER 
where  CONTAINS
         (sortname, 
          '{Karlsson Hanna} * 10 * 10 
           or ({Karlsson} and {Hanna}) * 1.1 
           or (fuzzy({Karlsson}, 70, 100, weight) ACCUM 
               fuzzy({Hanna}, 70, 100, weight))',
          1) > 0 
order  by score(1) desc, 
          utl_match.jaro_winkler_similarity ('Karlsson, Hanna', sortname) desc,
          utl_match.edit_distance ('Karlsson, Hanna', sortname),
          length (sortname);
