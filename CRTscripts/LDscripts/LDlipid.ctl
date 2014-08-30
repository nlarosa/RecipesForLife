load data infile 'csv/lipid.csv'
into table lipid
fields terminated by "," optionally enclosed by '"'
(ID,name)
