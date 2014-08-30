DECLARE
	--hits number;
	--quality number;
	searchQuery varchar(100);
BEGIN
	--name :='one two three four five six seven eight';
	searchQuery := 'chicken broth';
for line in (
	SELECT ID, name, hits, RFLpack.getQuality(searchQuery, name) as q
	FROM (
		select i.ID, i.name, count(1) as hits
		from ingredient i, table( RFLpack.querySplit( i.name, ' ', 1 ) )  
		where column_value in ( select column_value from table( querySplit( searchQuery, ' ', 1 ) ) )
		group by i.ID, i.name
		having count(1) >= ( select ( count(*) + 1 ) / 2 from table( querySplit( searchQuery, ' ', 1 ) ) )      -- at least one match 
		order by hits desc, i.ID asc
	)
	order by hits desc, q asc, ID desc
	) loop
		dbms_output.put_line(line.NAME||'  '||line.hits||'  ');--|| line.q);
	end loop;
END;
/
quit;
