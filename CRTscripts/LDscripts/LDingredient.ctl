load data infile 'csv/ingredient.csv'
into table ingredient
fields terminated by "," optionally enclosed by '"'
(ID,name,caloriesPer100g)
