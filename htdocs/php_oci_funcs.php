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
        $q = $q.", :parID";

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
          array_push($arr,$row['NAME']);
          $row = oci_fetch_array($curs, OCI_ASSOC);
        }
        oci_free_statement($curs);
        oci_free_statement($stid);
        return $arr;
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
	$q = "BEGIN addScheduledRecipe(:email, :rid, :date); END;";
	$stid = oci_parse($conn, $q);
	oci_bind_by_name($stid, ":email", $email);
	oci_bind_by_name($stid, ":rid", $recID);
	oci_bind_by_name($stid, ":date", $date);
	oci_execute($stid);
	oci_free_statement($stid);
}

#gets array of rows of scheduled recipes
function getScheduledRecipes($conn, $user_email)
{
	$q = "BEGIN getScheduledRecipes(:email, :ref_c); END;";
	$stid = oci_parse($conn, $q);
	$curs = oci_new_cursor($conn);
	oci_bind_by_name($stid, ":email", $email);
	oci_bind_by_name($stid, ":ref_c", $curs);
	oci_execute($stid);
	oci_execute($curs);
	
	$results = array();
	$row = oci_fetch_array($curs, OCI_ASSOC+OCI_RETURN_NULLS);
	while($row)
	{
		array_push($results, $row);
		$row = oci_fetch_array($curs, OCI_ASSOC+OCI_RETURN_NULLS);
	}
}
?>
