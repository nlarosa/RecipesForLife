drop table vitamin CASCADE CONSTRAINTS;

create table vitamin
(
	ID number not null PRIMARY KEY,
	name varchar2(100) not null
);

commit;
