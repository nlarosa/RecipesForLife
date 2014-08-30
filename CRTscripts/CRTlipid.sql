drop table lipid CASCADE CONSTRAINTS;

create table lipid
(
	ID number not null PRIMARY KEY,
	name varchar2(100) not null
);

commit;
