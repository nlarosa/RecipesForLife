drop table recipe CASCADE CONSTRAINTS;

create table recipe
(
	ID number not null PRIMARY KEY,
	authorEmail varchar2(50) not null,
	parentRecipeID number,
	name varchar2(100) not null,
	img varchar2(100),
	directions varchar2(1000) not null,
	servings number not null,
	prepTime varchar2(100),
	CONSTRAINT fk_author
		FOREIGN KEY ( authorEmail ) REFERENCES account( email ) ON DELETE CASCADE,
	CONSTRAINT fk_recipe
		FOREIGN KEY( parentRecipeID ) REFERENCES recipe( ID ) ON DELETE CASCADE,
	CHECK( servings >= 0 )
);

DROP SEQUENCE auto_recipeID;
CREATE SEQUENCE auto_recipeID
	MINVALUE 0
	START WITH 0
	INCREMENT BY 1
	CACHE 100;

--CREATE OR REPLACE TRIGGER trigger_auto_recipeID
--	BEFORE INSERT ON recipe
--	FOR EACH ROW
--BEGIN
--	SELECT auto_recipeID.nextval
--	INTO :new.ID
--	FROM dual;
--END;
/

commit;
