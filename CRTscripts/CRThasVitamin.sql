drop table hasVitamin CASCADE CONSTRAINTS;

create table hasVitamin
(
	ingredientID number not null,
	vitaminID number not null,
	microgramsPer100g number not null,
	CONSTRAINT pk_hasVit
		PRIMARY KEY ( ingredientID, vitaminID ),
	CONSTRAINT fk_ingred_hasVit
		FOREIGN KEY( ingredientID ) REFERENCES ingredient( ID ) ON DELETE CASCADE,
	CONSTRAINT fk_vit_hasVit
		FOREIGN KEY( vitaminID ) REFERENCES vitamin( ID ) ON DELETE CASCADE,	
	CHECK ( microgramsPer100g >= 0 )
);

commit;
