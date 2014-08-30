drop table ingredientUnit CASCADE CONSTRAINTS;

create table ingredientUnit
(
	ingredientID number not null,
	unitName varchar2(100) not null,
	gramsPerUnit number not null,
	CONSTRAINT pk_ingredUnit
		PRIMARY KEY ( ingredientID, unitName, gramsPerUnit ),
	CONSTRAINT fk_ingred_ingredUnit
		FOREIGN KEY( ingredientID ) REFERENCES ingredient( ID ) ON DELETE CASCADE,
	CHECK ( gramsPerUnit >= 0 )
);

commit;
