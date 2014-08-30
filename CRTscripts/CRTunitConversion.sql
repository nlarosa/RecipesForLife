drop table unitConversion CASCADE CONSTRAINTS;

create table unitConversion
(
	unitID number not null,
	contains number not null,
	nextID number not null,
	CONSTRAINT pk_conv
		PRIMARY KEY ( unitID, nextID ),
	CONSTRAINT fk_unit1
		FOREIGN KEY ( unitID ) REFERENCES generalUnit( ID ) ON DELETE CASCADE,
	CONSTRAINT fk_unit2
		FOREIGN KEY( nextID ) REFERENCES generalUnit( ID ) ON DELETE CASCADE
);

commit;
