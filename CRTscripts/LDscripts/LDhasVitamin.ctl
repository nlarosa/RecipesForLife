load data infile 'csv/hasVitamin.csv'
into table hasVitamin
fields terminated by "," optionally enclosed by '"'
(ingredientID,vitaminID,microgramsPer100g)
