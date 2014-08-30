load data infile 'csv/ingredientUnit.csv'
into table ingredientUnit
fields terminated by "," optionally enclosed by '"'
(ingredientID,unitName,gramsPerUnit)
