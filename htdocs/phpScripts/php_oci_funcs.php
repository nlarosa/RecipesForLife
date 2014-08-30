<?php
#connect to database
function connect()
{
	$conn = oci_connect('system','sm_nl_zl_4RFL');
        if(!$conn)
         {
           $e = oci_error();
           trigger_error(htmlentities($e['oriconnect failed'], ENT_QUOTES), E_USER_ERROR);
         }
	return $conn;
}

#check if recipe is scheduled
function isSched($email, $recName, $day, $month, $year)
{
	$conn = connect();
	$schedRecipes = getScheduledRecipes($conn, $email, $day, $month, $year);
	oci_close($conn);
	
	foreach($schedRecipes as $r)
	{
		if($r['ID'] == $recName) return TRUE;
	}
	
	return FALSE;
}

#checks is recipe id is valid
function isRecipe( $recID)
{
	$conn = connect();
	$q = "SELECT RFLpack.isRecipe(:recID) FROM dual";
	$stid = oci_parse($conn, $q);
	oci_bind_by_name($stid, ":recID", $recID);
	oci_execute($stid);
	$arr = oci_fetch_array($stid); 
	oci_close($conn);
	if( $arr[0] == 1)
		return true;
	else
		return false;
}	

#tie an ingredient to the recipe
function addRecipeIngredient($conn, $recName, $ingredName, $amt, $unit)
{
        $q = "BEGIN RFLpack.addRecipeIngred(:recN, :ingredN, :amt, :unt); END;";
        $stid = oci_parse($conn, $q);
        oci_bind_by_name($stid, ":recN", $recName);
        oci_bind_by_name($stid, ":ingredN", $ingredName);
        oci_bind_by_name($stid, ":amt", $amt);
        oci_bind_by_name($stid, ":unt", $unit);
        oci_execute($stid);
        oci_free_statement($stid);

}

#adds a recipe
function addRecipe($conn, $authEmail, $recName, $dir, $serv, $prepT, $parID)
{
     $q = "BEGIN RFLpack.addRecipe(:authE, :recName, :dir, :ser, :prepT";
     if($parID!=0)
     {
        $q = $q.", :parID";
     }


     $q = $q."); END;";
     $stid = oci_parse($conn, $q);
     oci_bind_by_name($stid, ":authE", $authEmail);
     oci_bind_by_name($stid, ":recName", $recName);
     oci_bind_by_name($stid, ":dir", $dir);
     oci_bind_by_name($stid, ":ser", floatval($serv));
     oci_bind_by_name($stid, ":prepT", $prepT);

     if($parID!=0)
        oci_bind_by_name($stid, ":parID", $parID);

     oci_execute($stid);
     oci_free_statement($stid);

}

#returns first num search entries
function searchIngredient($conn, $string, $num)
{
        $q = 'BEGIN RFLpack.searchIngredients(:str, :ref_c); END;';
        $stid = oci_parse($conn, $q);
        $curs = oci_new_cursor($conn);
        oci_bind_by_name($stid, ":str", $string);
        oci_bind_by_name($stid, ":ref_c",$curs, -1, OCI_B_CURSOR);
        oci_execute($stid);

        //fetch data from query
        
        $arr = array();
        oci_execute($curs);
        $row = oci_fetch_array($curs, OCI_ASSOC+OCI_RETURN_NULLS);
        for($x=0; $row && $x<$num; $x++)
        {
          #echo $row['NAME'];
          array_push($arr,$row);
          $row = oci_fetch_array($curs, OCI_ASSOC);
        }
        oci_free_statement($curs);
        oci_free_statement($stid);
        return $arr;
}

#returns if a username is valid
function isUser($user_name)
{
	$conn=connect();
	$q = "SELECT count(*) FROM ACCOUNT WHERE email=:uName";
	$stid = oci_parse($conn, $q);
	oci_bind_by_name($stid, ":uName", $user_name);
	oci_execute($stid);
	$row = oci_fetch_array($stid);
	if($row[0]!=1)
		return FALSE;
	else
		return TRUE;
}

#returns first num search entries
function searchIngredientsUsingIndex($conn, $ingredient, $options, $num)
{
        $q = 'BEGIN :rc := RFLpack.searchIngredientsUsingIndex(:ing, :opt, :num); END;';
        $stid = oci_parse($conn, $q);
        $curs = oci_new_cursor($conn);
        oci_bind_by_name($stid, ":ing", $ingredient);
	oci_bind_by_name($stid, ":opt", $options);
	oci_bind_by_name($stid, ":num", $num);
        oci_bind_by_name($stid, ":rc",$curs, -1, OCI_B_CURSOR);
        oci_execute($stid);

        //fetch data from query
        
        $arr = array();
        oci_execute($curs);
        $row = oci_fetch_array($curs, OCI_ASSOC+OCI_RETURN_NULLS);
        for($x=0; $row && $x<$num; $x++)
        {
          #echo $row['NAME'];
          array_push($arr,$row);
          $row = oci_fetch_array($curs, OCI_ASSOC);
        }
        oci_free_statement($curs);
        oci_free_statement($stid);
        return $arr;
}

function getIngredientProximates($conn, $ingredID, $grams)
{
	$q = "BEGIN RFLpack.getIngredientProximates( :id, :grams, :ref_c ); END;";
	$stid = oci_parse( $conn, $q );
	$curs = oci_new_cursor( $conn );

	oci_bind_by_name( $stid, ":id", $ingredID );
	oci_bind_by_name( $stid, ":grams", $grams );
	oci_bind_by_name( $stid, ":ref_c", $curs, -1, OCI_B_CURSOR );
	oci_execute( $stid );
	oci_execute( $curs );

	$row = oci_fetch_array($curs, OCI_ASSOC+OCI_RETURN_NULLS);
	$results = array();
        while($row)
        {
		array_push($results, $row);
		$row = oci_fetch_array($curs, OCI_ASSOC+OCI_RETURN_NULLS);
        }
        oci_free_statement($stid);
	return $results;
}

function getIngredientLipids($conn, $ingredID, $grams)
{
	$q = "BEGIN RFLpack.getIngredientLipids( :id, :grams, :ref_c ); END;";
	$stid = oci_parse( $conn, $q );
	$curs = oci_new_cursor( $conn );

	oci_bind_by_name( $stid, ":id", $ingredID );
	oci_bind_by_name( $stid, ":grams", $grams );
	oci_bind_by_name( $stid, ":ref_c", $curs, -1, OCI_B_CURSOR );
	oci_execute( $stid );
	oci_execute( $curs );

	$row = oci_fetch_array($curs, OCI_ASSOC+OCI_RETURN_NULLS);
	$results = array();
        while($row)
        {
		array_push($results, $row);
		$row = oci_fetch_array($curs, OCI_ASSOC+OCI_RETURN_NULLS);
        }
        oci_free_statement($stid);
	return $results;
}

function getIngredientVitamins($conn, $ingredID, $grams)
{
	$q = "BEGIN RFLpack.getIngredientVitamins( :id, :grams, :ref_c ); END;";
	$stid = oci_parse( $conn, $q );
	$curs = oci_new_cursor( $conn );

	oci_bind_by_name( $stid, ":id", $ingredID );
	oci_bind_by_name( $stid, ":grams", $grams );
	oci_bind_by_name( $stid, ":ref_c", $curs, -1, OCI_B_CURSOR );
	oci_execute( $stid );
	oci_execute( $curs );

	$row = oci_fetch_array($curs, OCI_ASSOC+OCI_RETURN_NULLS);
	$results = array();
        while($row)
        {
		array_push($results, $row);
		$row = oci_fetch_array($curs, OCI_ASSOC+OCI_RETURN_NULLS);
        }
        oci_free_statement($stid);
	return $results;
}

function getIngredientMinerals($conn, $ingredID, $grams)
{
	$q = "BEGIN RFLpack.getIngredientMinerals( :id, :grams, :ref_c ); END;";
	$stid = oci_parse( $conn, $q );
	$curs = oci_new_cursor( $conn );

	oci_bind_by_name( $stid, ":id", $ingredID );
	oci_bind_by_name( $stid, ":grams", $grams );
	oci_bind_by_name( $stid, ":ref_c", $curs, -1, OCI_B_CURSOR );
	oci_execute( $stid );
	oci_execute( $curs );

	$row = oci_fetch_array($curs, OCI_ASSOC+OCI_RETURN_NULLS);
	$results = array();
        while($row)
        {
		array_push($results, $row);
		$row = oci_fetch_array($curs, OCI_ASSOC+OCI_RETURN_NULLS);
        }
        oci_free_statement($stid);
	return $results;
}

function getIngredientGrams( $conn, $ingredID, $amount, $unit )
{
	$q = "BEGIN :x := RFLpack.getIngredientGrams( :id, :n, :u, :o ); end;";
	$stid = oci_parse( $conn, $q );
	$emptyStr = '';

	$return = 0;

	oci_bind_by_name( $stid, ":x", $return, 1000 );
	oci_bind_by_name( $stid, ":id", $ingredID );
	oci_bind_by_name( $stid, ":n", $amount );
	oci_bind_by_name( $stid, ":u", $unit );
	oci_bind_by_name( $stid, ":o", $emptyStr );

	oci_execute( $stid );
	oci_free_statement( $stid );

	#print_r( $return . ',' );

	return $return;
}

#get recipe table info
function getRecipeInfo($conn, $recID)
{ 
        $q = "SELECT * FROM recipe WHERE ID = :rID";
        $stid = oci_parse($conn, $q);
        oci_bind_by_name($stid, ":rID", $recID);
        oci_execute($stid);
        $row = oci_fetch_array($stid, OCI_BOTH);
        oci_free_statement($stid);

	return $row;
}

#get recipeIngredients
#returns array of rows of recipeIngredient
function getRecipeIngreds($conn, $recID)
{
	$q = "BEGIN RFLpack.getRecipeIngreds(:rid, :ref_c); END;";
     	$stid = oci_parse($conn, $q);
        $curs = oci_new_cursor($conn);
	oci_bind_by_name($stid, ":rid", $recID);
        oci_bind_by_name($stid, ":ref_c", $curs, -1, OCI_B_CURSOR);
	oci_execute($stid);
	oci_execute($curs);

	$row = oci_fetch_array($curs, OCI_ASSOC+OCI_RETURN_NULLS);
	$results = array();
        while($row)
        {
		array_push($results, $row);
		$row = oci_fetch_array($curs, OCI_ASSOC+OCI_RETURN_NULLS);
        }
        oci_free_statement($stid);
	return $results;
}

#add recipe to calender
function addScheduledRecipe($conn, $email, $recID, $date)
{
	$q = "BEGIN RFLpack.addScheduledRecipe(:email, :rid, :date); END;";
	$stid = oci_parse($conn, $q);
	oci_bind_by_name($stid, ":email", $email);
	oci_bind_by_name($stid, ":rid", $recID);
	oci_bind_by_name($stid, ":date", $date);
	oci_execute($stid);
	oci_free_statement($stid);
}

#return a string with a date readable by the db
function makeDate($day, $month, $year)
{
	$date = $day.'/';
        if(floatval($day)<10) $date = '0'.$date;
        if(floatval($month)<10)$data = $date.'0';
        $date=$date.$month.'/'.$year;
	return $date;
}

#getshoppinglist
function getShoppingList($conn, $email, $startDate, $endDate)
{
	$q = 'BEGIN RFLpack.getShoppingList(:email, :date1, :date2, :ref_c);END;';
	$stid = oci_parse($conn, $q);
	$curs = oci_new_cursor($conn);
	oci_bind_by_name( $stid, ":email", $email); 
	oci_bind_by_name( $stid, ":date1", $startDate);
	oci_bind_by_name( $stid, ":date2", $endDate);
	oci_bind_by_name( $stid, ":ref_c", $curs, -1, OCI_B_CURSOR);
	oci_execute($stid);
	oci_execute($curs);

	$row = oci_fetch_array($curs, OCI_ASSOC+OCI_RETURN_NULLS);
        $results = array();
        while($row)
        {
                array_push($results, $row);
                $row = oci_fetch_array($curs, OCI_ASSOC+OCI_RETURN_NULLS);
        }
        oci_free_statement($stid);
        return $results;
}

#gets array of rows of scheduled recipes
function getScheduledRecipes($conn, $user_email, $day, $month, $year)
{
	$date = makeDate($day, $month, $year);
	#echo $date;
	$q = "BEGIN RFLpack.getScheduledRecipes(:email, :dat, :ref_c); END;";
	$stid = oci_parse($conn, $q);
	$curs = oci_new_cursor($conn);
	oci_bind_by_name($stid, ":email", $email);
	oci_bind_by_name($stid, ":dat", $date);
	oci_bind_by_name($stid, ":ref_c", $curs, -1, OCI_B_CURSOR);
	oci_execute($stid);
	oci_execute($curs);
	
	$results = array();
	$row = oci_fetch_array($curs, OCI_ASSOC+OCI_RETURN_NULLS);
	while($row)
	{
		array_push($results, $row);
		$row = oci_fetch_array($curs, OCI_ASSOC+OCI_RETURN_NULLS);
	}
	return $results;
}

#gets list of recipes for search
#returns array of rows from search as many as $num 
function searchRecipes($conn, $num, $searchQuery, $user_email)
{
    if($searchQuery == NULL && $user_email==NULL)
    {
	$q= "SELECT * FROM RECIPE";
        $curs = oci_parse($conn, $q);
    }
    elseif($searchQuery == NULL)
    {
	$q= "SELECT * FROM RECIPE WHERE authorEmail = :email";
	$curs = oci_parse($conn, $q);
	oci_bind_by_name($curs, ":email", $user_email); 
    }	
    else
    {
	if($user_email == NULL)
		$q = "BEGIN RFLpack.searchRecipes(:query, :ref_c); END;";
	else
		$q = "BEGIN RFLpack.searchMyRecipes(:query, :email, :ref_c); END;";
		
	$stid = oci_parse($conn, $q);
	$curs = oci_new_cursor($conn);
	oci_bind_by_name($stid, ":query", $searchQuery);
	oci_bind_by_name($stid, ":ref_c", $curs, -1, OCI_B_CURSOR);
	if($user_email != NULL)
		oci_bind_by_name($stid,":email", $user_email);
	#echo $q;
        oci_execute($stid);
     }

    oci_execute($curs);
	
    $row = oci_fetch_array($curs, OCI_ASSOC+OCI_RETURN_NULLS);
    $results = array();
    while($row)
    {
         array_push($results, $row);
         $row = oci_fetch_array($curs, OCI_ASSOC+OCI_RETURN_NULLS);
    }
    oci_free_statement($curs);
    return $results;
}

function getUnits($conn)
{
	$q = "SELECT name FROM generalUnit";
	$stid = oci_parse($conn, $q);
	oci_execute($stid);
	
	$results = array();
	while( $row = oci_fetch_array($stid) )
	{
		array_push($results, $row['NAME']);
        }

	return $results; 
}
?>
