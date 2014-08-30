load data infile 'csv/alternativeIngredientName.csv'
into table alternativeIngredientName
fields terminated by "," optionally enclosed by '"'
(ingredientID,name,ingredientOption)
