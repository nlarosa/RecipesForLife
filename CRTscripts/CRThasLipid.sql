drop table hasLipid CASCADE CONSTRAINTS;

create table hasLipid
(
	ingredientID number not null,
	lipidID number not null,
	milligramsPer100g number not null,
	CONSTRAINT pk_hasLip
		PRIMARY KEY ( ingredientID, lipidID ),
	CONSTRAINT fk_ingred_hasLip
		FOREIGN KEY( ingredientID ) REFERENCES ingredient( ID ) ON DELETE CASCADE,
	CONSTRAINT fk_lipid_hasLip
		FOREIGN KEY( lipidID ) REFERENCES lipid( ID ) ON DELETE CASCADE,	
	CHECK ( milligramsPer100g >= 0 )
);

commit;
