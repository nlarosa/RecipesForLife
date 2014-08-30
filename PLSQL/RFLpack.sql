--package interface
create or replace package RFLpack
is
	type unitName is record ( unitName varchar2( 100 ) );	-- getUnits
	type unitNameTable is table of unitName;

	type optionName is record( optionName varchar( 100 ) );	-- getOptions
	type optionNameTable is table of optionName;

	type word is record( word varchar( 100 ) );		-- querySplit return table
	type wordTable is table of word;

	--package functions
	function isRecipe(recID recipe.ID%type)
		return number;

	procedure addScheduledRecipe(email scheduledRecipe.email%type, recID scheduledRecipe.recipeID%type, schedDate varchar);

	procedure getShoppingList(email scheduledRecipe.email%type, schedDate1 varchar2, schedDate2 varchar, results OUT sys_refcursor);

	procedure getScheduledRecipes(email scheduledRecipe.email%type, schedDate varchar2,results OUT sys_refcursor);

	procedure addRecipe(AuthorEmail recipe.authorEmail%type, name recipe.name%type, directions recipe.directions%type, servings recipe.servings%type, prepTime recipe.preptime%type, parentRecipe recipe.parentRecipeID%type default NULL, img recipe.IMG%type default Null); 	
	function addRecipeReturnID( AuthorEmail recipe.authorEmail%type, name recipe.name%type, directions recipe.directions%type, servings recipe.servings%type, prepTime recipe.preptime%type,parentRecipe recipe.parentRecipeID%type default NULL, img recipe.IMG%type default Null )
		return recipe.id%type;

	procedure addRecipeIngred(recipeName recipe.name%type, ingredName ingredient.name%type, amount recipeIngredient.amount%type, unit recipeIngredient.unit%type);
 
	procedure getRecipeIngreds(recID recipe.ID%type, results OUT sys_refcursor);	

	procedure getIngredientUnits( ID number, results OUT sys_refcursor);

	function getIngredientUnitsAsTable( ID number )
		return unitNameTable pipelined;

	function getIngredientOptionsAsTable( ID number )
		return optionNameTable pipelined;

	function getIngredientOptions( ID number ) 
		return number;

	procedure getIngredientProximates( argID number, grams number, results OUT sys_refcursor );

	procedure getIngredientLipids( argID number, grams number, results OUT sys_refcursor );

	procedure getIngredientVitamins( argID number, grams number, results OUT sys_refcursor );

	procedure getIngredientMinerals( argID number, grams number, results OUT sys_refcursor );

	function getIngredientGrams( ID ingredient.ID%type, numUnit number, unit varchar2, argOption varchar2 ) 
		return number;

	function querySplit( query varchar2, delimiter varchar2 default ',', duplicateTokens in number default 0 ) 
		return sys.dbms_debug_vc2coll;

	function getQuality(searched IN varchar2, name IN varchar2)
		return number;

	procedure searchIngredients( searchQuery IN varchar2, results OUT sys_refcursor );

	function searchIngredientsUsingIndex( ingredient varchar2, options varchar2, numResults number )
		 return sys_refcursor;

	function searchIngredientsWithOptions( ingredient varchar2, options varchar2 )
		return sys_refcursor;

	function searchIngredientsAndUnits( ingredient varchar2, options varchar2, unit varchar2 )
		return sys_refcursor;
	
	--function hasIngreds(r recipe.ID%type, ingredsIN varchar2, ingredsEx varchar2)
	--	return number;
	
	procedure searchMyRecipes( searchQuery IN varchar2, user_email IN account.email%type, results OUT sys_refcursor );
	
	procedure searchRecipes( searchQuery IN varchar2, results OUT sys_refcursor );
	
	function userExists( email account.email%type )
		return integer;

	function createUser( email account.email%type, password account.password%type, zipcode account.zipcode%type )
		return integer;

	function verifyCredentials( email account.email%type, password account.password%type )
		return integer;

end RFLpack;
/	
