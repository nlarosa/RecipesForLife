<?php 
 session_start(); 
 ini_set('display_errors','On');
 error_reporting(E_ALL);

 #imports
 require 'phpScripts/php_oci_funcs.php';

 #if $_SESSION not set redirect
 if(isset($_SESSION['id']) == FALSE || isUser($_SESSION['id'])==FALSE)
        #$_SESSION['id'] = 'zlipp@nd.edu';
	header('Location: http://csevm04.crc.nd.edu:8404/main.html');

 #submits info to database
 if(isset($_POST['submit']) && allSet())
   {
     #fire up oracle and sumbit everything to database
     $conn = connect();
     
     if(isset($_SESSION['parentID']) == FALSE || isRecipe($_SESSION['parentID'])==FALSE)
	$_SESSION['parentID'] = 0;
    
     #echo $_SESSION['id'];
     addRecipe($conn, $_SESSION['id'], $_POST['recName'], $_POST['instructs'], $_POST['servings'], $_POST['prepTime'], $_SESSION['parentID']); 
    
     #submit all ingredients ingredient recipe table
     for($temp = 0; $temp < $_SESSION['numIngreds']; $temp++)
     	addRecipeIngredient($conn, stripslashes($_POST['recName']), stripslashes($_POST[('sel_ingred'.$temp)]), $_POST[('amount'.$temp)], $_POST[('unit'.$temp)]);
	
     oci_close($conn);
    
     #redirect to next page
     header('Location: http://csevm04.crc.nd.edu:8404/home.php');
   }

   #checks if we are editting old recipe have to set are vars
   if(isset($_GET['recipeID']) && isRecipe($_GET['recipeID']) ) 
   {
	$conn = connect();
	
	#get recipe table info
	$_SESSION['parentID']= $_GET['recipeID']; 
	$row = getRecipeInfo($conn, $_SESSION['parentID']);

	#set recipe table info
	$_POST['recName'] = $row['NAME'];
	$_POST['servings'] = $row['SERVINGS'];
	$_POST['prepTime'] = $row['PREPTIME'];
	$_POST['instructs'] = $row['DIRECTIONS'];

	#get info from recipeIngredient table
	$ingreds = getRecipeIngreds($conn, $_SESSION['parentID']);
	echo count($ingreds);
	$temp=0;
	foreach ($ingreds as $ing)
	{
		$ing['NAME']=stripslashes($ing['NAME']);
		$_POST[('Ingred'.$temp)] = stripslashes($ing['NAME']);
		$_SESSION[('poss_ingreds'.$temp)]=array($ing);
		$_POST[('amount'.$temp)] = $ing['AMOUNT'];
		$_POST[('unit'.$temp)] = $ing['UNIT'];
		$temp++;
	}
	$_SESSION['numIngreds'] = $temp;
	oci_close($conn);
   }
?>


<!--This webpage will read in recipes from the user and store it in the 
data base-->
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimus-scale=1">
    <title>Recipes for Life - Home Page</title>
    <!-- Modernizr -->
    <script src="./js/libs/modernizr-2.6.2.min.js"></script>
    <!-- jQuery -->
    <script type="text/javascript" src="./js/libs.jquery-1.10.2.min.js"></script>
    <!-- framework css -->
    <link type ="text/css" rel="stylesheet" href="./css/groundwork.css">
  </head>
  <body>
    <header class="padded">
      <div class="container">
        <div class="row padded">
          <div class="centered bounceInDown animated yellow box round align-center">
            <h1 class="zero museo-slab">Recipes For Life</h1>
            <p class="quicksand"> An interactive system to track your family food needs.</p>
          </div>
          <nav role="navigation" class="nav gap-top">
            <ul role="menubar">
              <li><a href="./home.php"><i class="icon-home"></i>Home</a></li>
              <li><a href="./recipe_search.php"><i class="icon-search"></i>Recipe Search</a></li>
              <li><a href="./add_recipe.php"><i class="icon-plus"></i>Add Recipe</a></li>
              <li><a href="./shopping.php"><i class="icon-shopping-cart"></i>Shopping List</a></li>
              <li><a href="./about.php"><i class="icon-question"></i>About Us</a></li>
              <li><a href="./logout.php"><i class="icon-eject"></i>Log out</a></li>
            </ul>
          </nav>
        </div>
    </header>
  <div class="container">
    <div class="centered bounceInUp animated blue box round align-center">
	<h1 align="center">Enter your new recipe</h1>
    </div>
  </div>
<br>
  <div class="container">
    <div class="centered bounceInUp animated grey box align-center">
	<!--use post so we can unnset addIngred-->
	<p align="center"><font color="red">
	<?php
	    if(isset($_POST['submit']))
	    {
	        echo 'Please '.$GLOBALS['ERROR'].' before submitting';
	    }
	?>
 	</font></p>

	<form action="add_recipe_zl.php" method="post" style="text-align:center">
	<div class="row">
	  <div class="one third padded">

	    <br>Name: <br><input type="text" name="recName" onkeydown="if (event.keyCode ==13) return false"
  	    <?php
		if(isset($_POST['recName']))
	  		echo ' value="'.$_POST['recName'].'"';
  	    ?> 
	    > 
	  </div>
	  <div class="one third padded">
  	    <br>Prep Time:<br> <input type="text" name=prepTime size="20" onkeydown="if (event.keyCode ==13) return false"
            <?php
        	if(isset($_POST['prepTime']))
                  echo ' value="'.$_POST['prepTime'].'"';
            ?>
            ><br>
          </div>
          <div class="one third padded">
             <br>Servings:<br><input type="text" name=servings onkeydown="if (event.keyCode ==13) return false"
             <?php
          	if(isset($_POST['servings']))
                  echo ' value="'.$_POST['servings'].'"';
             ?>
  	     ><br>
          </div>
        </div>

        Ingredients:<br>
        <?php
          #add ingredient
          if(isset($_POST['addIngred']) && isset($_SESSION['numIngreds']))
          {
	    $_SESSION['numIngreds']= $_SESSION['numIngreds']+1;
	    unset($_POST['addIngred']);
          }
	  elseif(isset($_POST['removeIngred']))
	  {
	    $_SESSION['numIngreds']= $_SESSION['numIngreds']-1;
	  }	
          elseif(searchingForIngred()==FALSE && isset($_POST['submit'])==FALSE && isset($_GET['recipeID'])==FALSE)#initialize numIngreds if not searching for ingreds
	     resetPage();
	  

           if(isset($_SESSION['numIngreds'])==FALSE || $_SESSION['numIngreds'] < 1)
	     $_SESSION['numIngreds'] = 1;

           #get the session variable
           $numIngreds = $_SESSION['numIngreds'];

           #runs through for every ingredient
           for($i=0; $i<$numIngreds; $i++) 
           {

             echo '<div class="row">'."\n";
               echo '<div class="one third padded">'."\n";

                 echo '<input type="text" name="Ingred'.$i.'" onkeydown="if (event.keyCode ==13) return false" ' ;
                 #if the name of the ingredient is set, sets as value
                 if(isset($_POST[('Ingred'.$i)]) && $_POST[('Ingred'.$i)]!="")
	           echo ' value="'.$_POST[('Ingred'.$i)].'"';
      		 echo '>'."\n";

	       echo '</div>'."\n";
               echo '<div class="one third padded">'."\n";

                 #search ingredients button
      	         echo '<input type="submit" name="Search'.$i.'" value= "Search Ingredient Database">'."\n";

 	       echo '</div>'."\n";
	       echo '<div class="one third padded">'."\n";
	
      		 #populate poss_ingreds
      		 if(isset($_POST[('Search'.$i)]) && $_POST[('Ingred'.$i)]!="")#need to search for ingreds
      		 {
			$conn = connect();
			$_SESSION[('poss_ingreds'.$i)] = searchIngredient($conn, $_POST[('Ingred'.$i)],20);
			oci_close($conn);
			unset($_POST[('Search'.$i)]);
      	 	 }

      		#drop down menu to hold search results
      		echo '<select name=sel_ingred'.$i.'>'."\n";
      		  if(isset($_SESSION[('poss_ingreds'.$i)])&& count($_SESSION[('poss_ingreds'.$i)])>0)#holds array of possible ingredients from search query
      		  {
		    foreach ( $_SESSION[('poss_ingreds'.$i)] as $p)
		    {
	  	       echo '<option';
	  	       if(isset($_POST[('sel_ingred'.$i)])&& $_POST[('sel_ingred'.$i)] == $p['NAME'])
	    	       echo ' selected="selected"';
	               echo '> '.$p['NAME'].'</option>'."\n";	
		     }
      		   }
      		   else
			echo '<option>No results -- Please use button to find ingredients</option>'."\n";
      		echo '</select>'."\n";      

	      echo '</div>'."\n";
            echo '</div>'."\n";
            echo '<div class="row">'."\n";
              echo '<div class="one third padded">'."\n";
                echo 'Amount:';
	      echo '</div>'."\n";
	      echo '<div class="one third padded">'."\n";
	        echo '<input type="text" name="amount'.$i.'" onkeydown="if (event.keyCode ==13) return false"';
                #if  amount was set sets as value 
      		if(isset($_POST[('amount'.$i)]) && $_POST[('amount'.$i)]!="")
        	  echo ' value="'.$_POST[('amount'.$i)].'"';
                echo '>'."\n"; 
	      echo '</div>'."\n";
	      echo '<div class="one third padded">'."\n";
		#array of options for drop down
		$conn = connect();
		$units = getUnits($conn);
		oci_close($conn);

		#sets up drop down
        	echo '<select name=unit'.$i.'>'."\n";
	  	  foreach ( $units as $u)
	    	  {
	      	    echo '<option';

	      	    if(isset($_POST[('unit'.$i)]) && $_POST[('unit'.$i)] == $u)
		      echo ' selected="selected"';
	            echo '> '.$u.' </option>'."\n";	     
	    	  }
		echo '</select>'."\n";

	      echo '</div>'."\n";
	    echo '</div>'."\n";
            echo "<br>\n";
    	   }
  	?>
        <!--button to add ingredients-->
        <input type="submit" name="addIngred" value="Add Ingredient">
	<input type="submit" name="removeIngred" value="Remove Last Ingredient">
	<br>

  	<br>Instructions:<br>
  	<textarea rows="10" cols ="80" name=instructs>
	  <?php
	    if(isset($_POST['instructs']))
		echo $_POST['instructs'];
          ?>
	</textarea><br>

  	<input type="submit" name="submit" value="Submit">
        </form>
      </div>
    </div>
 </body>
</html>

<?php
#tests if a search for ingredients button has been pressed
function searchingForIngred()
{
	if(isset($_SESSION['numIngreds'])==FALSE) return FALSE;
	for($b=0; $b<$_SESSION['numIngreds']; $b++)
	{
		if(isset($_POST[('Search'.$b)]))
		{
			return true;
		}
	}
	return false;
}

#check to ensure all ingredients have been selected
function allSet()
{
	#echo '<p>'.$_SESSION['numIngreds'].'</p>';
	if(isset($_SESSION['numIngreds'])==FALSE) return FALSE;
	for($temp = 0; $temp < $_SESSION['numIngreds']; $temp++)
	{
		#echo '<p>'.$_POST[('db_ingred'.$temp)].'</p>';
		if($_POST[('sel_ingred'.$temp)] == 'No results -- Please use button to find ingredients') #ingredient not selected
		{
			$GLOBALS['ERROR'] = 'use the search buttons and dropdown menus to select ingredients from our database';
			return FALSE;
		}
		if(isIngred(stripslashes($_POST[('sel_ingred'.$temp)]))==FALSE) #ingredient not selected
                {
                        $GLOBALS['ERROR'] = stripslashes( $_POST[('sel_ingred'.$temp)]);
                        return FALSE;
                }

		if(floatval($_POST[('amount'.$temp)]==FALSE))#if amount isn't float
		{
			$GLOBALS['ERROR'] = 'enter ingredient amounts in decimal form';
			return FALSE;
		}
	}
	if($_POST['instructs'] == "")
	{
		$GLOBALS['ERROR'] = 'enter some instructions for the recipe';
		return FALSE;
	}
	if($_POST['recName']=="")
	{
		$GLOBALS['ERROR'] = 'enter a name for the recipe';
                return FALSE; 
	}
	if($_POST['prepTime']=="")
        {
                $GLOBALS['ERROR'] = 'enter a prep time for the recipe';
                return FALSE;
        }
	if(floatval($_POST['servings'])==FALSE)
        {
                $GLOBALS['ERROR'] = 'enter the number of servings in decimal form';
                return FALSE;
        }


	return TRUE;
}

#clear session variables used on this page
function resetPage()
{
	$_SESSION['numIngreds'] = 1;
	for($temp = 0; isset($_SESSION['poss_ingreds'.$temp]) && count($_SESSION['poss_ingreds'.$temp])>0; $temp++)
	{
		unset($_SESSION['poss_ingreds'.$temp]);
	}
	
}
?>
