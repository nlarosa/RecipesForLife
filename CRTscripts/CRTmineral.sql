drop table mineral CASCADE CONSTRAINTS;

create table mineral
(
	ID number not null PRIMARY KEY,
	name varchar2(100) not null
);

commit;
