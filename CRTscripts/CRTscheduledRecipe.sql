drop table scheduledRecipe CASCADE CONSTRAINTS;

create table scheduledRecipe
(
	email varchar2(50) not null,
	recipeID number not null,
	scheduledDate date not null,
	CONSTRAINT pk_schedRec
		PRIMARY KEY ( email, recipeID, scheduledDate ),
	CONSTRAINT fk_account_schedRec
		FOREIGN KEY ( email ) REFERENCES account( email ) ON DELETE CASCADE,
	CONSTRAINT fk_recipe_schedRec
		FOREIGN KEY ( recipeID ) REFERENCES recipe( ID ) ON DELETE CASCADE
);

commit;
