drop table account CASCADE CONSTRAINTS;
drop table verification CASCADE CONSTRAINTS;

create table account
(
	email varchar2(50) not null PRIMARY KEY,
	password varchar2(50) not null,
	zipcode varchar2(6) not null
);

create table verification
(
	email varchar2(50) not null PRIMARY KEY,
	code varchar2(10) not null
);

commit;
