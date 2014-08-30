drop table hasProximate CASCADE CONSTRAINTS;

create table hasProximate
(
	ingredientID number not null,
	proximateID number not null,
	gramsPer100g number not null,
	CONSTRAINT pk_hasProx
		PRIMARY KEY ( ingredientID, proximateID ),
	CONSTRAINT fk_ingred_hasProx
		FOREIGN KEY( ingredientID ) REFERENCES ingredient( ID ) ON DELETE CASCADE,
	CONSTRAINT fk_prox_hasProx
		FOREIGN KEY( proximateID ) REFERENCES proximate( ID ) ON DELETE CASCADE,	
	CHECK ( gramsPer100g >= 0 )
);

commit;
