drop table recipeIngredient CASCADE CONSTRAINTS;

create table recipeIngredient
(
	recipeID number not null,
	ingredientID number not null,
	amount number not null,
	unit varchar2(100) not null,
	CONSTRAINT pk_recIngred
		PRIMARY KEY ( recipeID, ingredientID ),
	CONSTRAINT fk_ingred_recIngred
		FOREIGN KEY( ingredientID ) REFERENCES ingredient( ID ) ON DELETE CASCADE,
	CONSTRAINT fk_recipe_recIngred
		FOREIGN KEY( recipeID ) REFERENCES recipe( ID ) ON DELETE CASCADE,	
	CHECK ( amount >= 0 )
);

commit;
