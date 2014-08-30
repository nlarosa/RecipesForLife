drop table hasOther CASCADE CONSTRAINTS;

create table hasOther
(
	ingredientID number not null,
	otherID number not null,
	milligramsPer100g number not null,
	CONSTRAINT pk_hasOth
		PRIMARY KEY ( ingredientID, otherID ),
	CONSTRAINT fk_ingred_hasOth
		FOREIGN KEY( ingredientID ) REFERENCES ingredient( ID ) ON DELETE CASCADE,
	CONSTRAINT fk_other_hasOth
		FOREIGN KEY( otherID ) REFERENCES other( ID ) ON DELETE CASCADE,	
	CHECK ( milligramsPer100g >= 0 )
);

commit;
