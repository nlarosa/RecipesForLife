load data infile 'csv/hasProximate.csv'
into table hasProximate
fields terminated by "," optionally enclosed by '"'
(ingredientID,proximateID,gramsPer100g)
