load data infile 'csv/hasLipid.csv'
into table hasLipid
fields terminated by "," optionally enclosed by '"'
(ingredientID,lipidID,milligramsPer100g)
