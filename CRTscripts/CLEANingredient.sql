
delete from ingredient where upper( name ) like '%MCDONALD%';
delete from ingredient where upper( name ) like '%FAST FOOD%';
delete from ingredient where upper( name ) like '%BURGER KING%';
delete from ingredient where upper( name ) like '%DENNY%';

commit;
exit;

