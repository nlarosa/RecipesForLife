
BEGIN
	ctx_ddl.drop_preference( 'stemFuzzy' );
	ctx_ddl.drop_preference( 'lexFuzzy' );
END;
/

BEGIN
	ctx_ddl.create_preference( 'stemFuzzy', 'BASIC_WORDLIST' );
	ctx_ddl.set_attribute( 'stemFuzzy', 'FUZZY_MATCH', 'ENGLISH' );
	ctx_ddl.set_attribute( 'stemFuzzy', 'SUBSTRING_INDEX', 'YES');
	ctx_ddl.set_attribute( 'stemFuzzy','PREFIX_INDEX','TRUE');

	ctx_ddl.create_preference( 'lexFuzzy', 'BASIC_LEXER' );
	ctx_ddl.set_attribute( 'lexFuzzy', 'SKIPJOIN', '-()' );
END;
/

drop index ingredientIndex;
create index ingredientIndex on ingredient( name )
	indextype is ctxsys.context
	parameters( 'Wordlist stemFuzzy Lexer lexFuzzy' );

BEGIN
	ctx_ddl.sync_index( IDX_NAME => 'ingredientIndex' );
END;
/

