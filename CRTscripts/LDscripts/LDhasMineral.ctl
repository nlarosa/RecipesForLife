load data infile 'csv/hasMineral.csv'
into table hasMineral
fields terminated by "," optionally enclosed by '"'
(ingredientID,mineralID,microgramsPer100g)
