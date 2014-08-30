drop table hasMineral CASCADE CONSTRAINTS;

create table hasMineral
(
	ingredientID number not null,
	mineralID number not null,
	microgramsPer100g number not null,
	CONSTRAINT pk_hasMin
		PRIMARY KEY ( ingredientID, mineralID ),
	CONSTRAINT fk_ingred_hasMin
		FOREIGN KEY( ingredientID ) REFERENCES ingredient( ID ) ON DELETE CASCADE,
	CONSTRAINT fk_min_hasMin
		FOREIGN KEY( mineralID ) REFERENCES mineral( ID ) ON DELETE CASCADE,	
	CHECK ( microgramsPer100g >= 0 )
);

commit;
