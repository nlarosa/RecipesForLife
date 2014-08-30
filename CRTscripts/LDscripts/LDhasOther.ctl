load data infile 'csv/hasOther.csv'
into table hasOther
fields terminated by "," optionally enclosed by '"'
(ingredientID,otherID,milligramsPer100g)
