load data infile 'csv/unitConversion.csv'
into table unitConversion
fields terminated by "," optionally enclosed by '"'
(unitID,contains,nextID)
