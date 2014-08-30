drop table generalUnit CASCADE CONSTRAINTS;

create table generalUnit
(
	ID number not null PRIMARY KEY,
	name varchar2(100) not null
);

commit;
