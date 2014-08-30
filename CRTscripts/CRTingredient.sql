drop table ingredient CASCADE CONSTRAINTS;

create table ingredient
(
	ID number not null PRIMARY KEY,
	name varchar2(150) not null,
	caloriesPer100g number not null,
	CHECK ( caloriesPer100g >= 0 )
);

commit;
