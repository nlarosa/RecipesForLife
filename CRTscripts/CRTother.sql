drop table other CASCADE CONSTRAINTS;

create table other
(
	ID number not null PRIMARY KEY,
	name varchar2(100) not null
);

commit;
