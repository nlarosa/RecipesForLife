load data infile 'csv/vitamin.csv'
into table vitamin
fields terminated by "," optionally enclosed by '"'
(ID,name)
