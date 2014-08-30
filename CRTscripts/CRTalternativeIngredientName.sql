drop table alternativeIngredientName CASCADE CONSTRAINTS;

create table alternativeIngredientName
(
	ingredientID number not null,
	name varchar2(100) not null,
	ingredientOption varchar2(100) not null,
	CONSTRAINT fk_ingred_altIngred
		FOREIGN KEY ( ingredientID ) REFERENCES ingredient( ID ) ON DELETE CASCADE,
	CONSTRAINT pk_altIngred
		PRIMARY KEY ( ingredientID, name )
);

commit;
