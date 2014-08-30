drop table proximate CASCADE CONSTRAINTS;

create table proximate
(
	ID number not null PRIMARY KEY,
	name varchar2(100) not null
);

commit;
