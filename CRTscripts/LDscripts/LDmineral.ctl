load data infile 'csv/mineral.csv'
into table mineral
fields terminated by "," optionally enclosed by '"'
(ID,name)
