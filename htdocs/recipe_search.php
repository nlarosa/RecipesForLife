<?php
 if(isset($_SESSION)==FALSE)
        session_start();

 ini_set('display_errors','On');
 error_reporting(E_ALL);
 
 #imports 
 require 'phpScripts/php_oci_funcs.php';
#echo 'here';
 if(isset($_POST['add']))#&& isSched($_SESSION['id'],$_POST['recID'],$_POST['day'], $_POST['month'], $_POST['year'])==FALSE)#adding scheduled recipe
 {
	if(isSched($_SESSION['id'],$_POST['recID'],$_POST['day'], $_POST['month'], $_POST['year']))
	{
		echo '<font color="red"><p>ERROR: Could not add recipe because recipe is already planned for that day</p></font>';
	}
	else
	{
		#echo 'guess its not scheduled';
		if(isset($_SESSION['id'])==FALSE)
			$_SESSION['id'] = 'zlipp@nd.edu'; 
		$date = makeDate($_POST['day'], $_POST['month'], $_POST['year']);
		$conn = connect();
		addScheduledRecipe($conn,$_SESSION['id'],$_POST['recID'], $date);  
		oci_close($conn);-
		header('Location: http://csevm04.crc.nd.edu:8404/home.php');
	} 
}
?>
<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimus-scale=1">
    <title>Recipes for Life - Recipe Search</title>
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
	      <li><a href="./logout.php"><i class="icon-eject"></i>
		<?php
                        if(isset($_SESSION['id']))
                                echo 'Log out';
                        else
                                echo 'Log in';
                ?></a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <div class="container">
      <div class="row padded">
	<div class="centered bounceInRight animated blue box round align-center">
	  <h2 class="zero museo-slab">Recipe Search</h2>
	</div>
      </div>
    </div>
    <div class="container">
      <div class="centered bounceInUp animated grey box align-center">
	<form action="#" method="post">
	  <div class="row">
	    <div class="one half padded">
	      <label for="recipe_name">Recipe Name:</label>
	      <input name= "recipe_name" id="recipe_name" type="text" placeholder="e.g. Salisbury Steak" 
		<?php
			if(isset($_POST["recipe_name"]) &&$_POST["recipe_name"]!="")
				echo ' value="'.$_POST["recipe_name"].'"';
		?>
		>
   	    </div>
	    <div class="one half padded">
	      <label for="user_name">User Name:</label>
	      <input name="user_name" id="user_name" type="text" placeholder="e.g. cookmaster545@yahoo.com" 
 		<?php
                        if(isset($_POST["user_name"]) &&$_POST["user_name"]!="")
                                echo ' value="'.$_POST["user_name"].'"';
                ?>
		>
	    </div>
	  </div>
	  <div class="row">
	    <div class="three sevenths padded"></div>
	    <div class="one seventh padded">
	      <input type="submit" name="submit" value="Submit" color="aaa">
	    </div>
	    <div class="three sevenths padded"></div>
	  </div> 
	</form>	
      </div>
    </div>
<!--Display search results-->

<?php
  #searched
  if(isset($_POST['submit']))
  {
     $conn = connect();
     if((isset($_POST['recipe_name']) ==FALSE || $_POST['recipe_name'] == "") && (isset($_POST['user_name'])==FALSE || $_POST['user_name'] == ""))
     {
	$results = searchRecipes($conn, 100, NULL, NULL);
	echo '<p align="center">Searching All Recipes ... </p>';
     }
     elseif(isset($_POST['user_name'])==FALSE || $_POST['user_name'] == "")
     {
	$results = searchRecipes($conn, 100, $_POST['recipe_name'], NULL);
        echo '<p align="center">Searching All Recipes for '.$_POST['recipe_name'].'... </p>';
     }
     elseif(isset($_POST['recipe_name'])==FALSE || $_POST['recipe_name'] == "")
     {
	$results =searchRecipes($conn, 100, NULL, $_POST['user_name']);
     	 echo '<p align="center"> Searching '.$_POST['user_name'].'\'s Recipes ...</p>';
     }
     else
     {
	$results = searchRecipes($conn, 100, $_POST['recipe_name'], $_POST['user_name']);	
	echo '<p align="center"> Searching '.$_POST['user_name'].'\'s Recipes for '.$_POST['recipe_name'].'...</p>';
     }
    oci_close($conn);

    if( count($results) == 0)
    {
	echo '<h2 align="center">No Results Found</h2>';
    }

    #display results
    foreach( $results as $line) 
    {
	echo '<div class="container">';	
	echo '<div class="row">';
	echo '<div style="width:550px;float:left;">' ;
	echo '<h2><a href="http://csevm04.crc.nd.edu:8404/recipe.php?recipeID='.$line['ID'].'">'.$line['NAME'].'</a></h2>';
	echo '<h5> By: '.$line['AUTHOREMAIL'].'</h5>';
	echo '<h5> Prep Time: '.$line['PREPTIME'].'</h5>';
	echo '<h5> Servings: '.$line['SERVINGS'].'</h5>';
	echo '<h5 Ingredients: </h5>';
	$conn = connect();
	$ingreds = getRecipeIngreds($conn, $line['ID']);
	oci_close($conn);
	foreach($ingreds as $i)
	{
	   echo '<p> '.$i['AMOUNT'].' '.$i['UNIT'].' '.$i['NAME'].'</p>';  
	}
	echo "</div>";
	echo '<div style="width:400px;float:left;">';
	echo '<h5>Directions:</h5>';
	echo '<p>';
	echo $line['DIRECTIONS'];
	echo '</p>';
	echo '</div>';     
	#form to add to schedule
      	if(isset($_SESSION['id']) && isUser($_SESSION['id']))
      	{
		echo '<div style="float:right">';
		echo '<form method="post" action=recipe_search.php align="center">';
		echo '<input type="hidden" name="recID" value="'.$line['ID'].'">';
		echo 'Add to schedule: ';
		#drop down menu for month
		$months = array('January','February','March','April','May','June','July','August','September','October','November','December');
		echo '<select name="month">';
		for($temp=1; $temp<13; $temp++)
		{
			echo '<option value="'.$temp.'">'.$months[$temp-1].'</option>';
		}
		echo '</select>';
		#drop down for days
		echo '<select name="day">';
		for($temp=1; $temp<=31; $temp++)
		{
			echo '<option>'.$temp.'</option>';
		}
		echo '</select>';
		#drop down for years
		echo '<select name="year">';
        	for($temp=2014; $temp<2024; $temp++)
        	{
        	        echo '<option>'.$temp.'</option>';
        	}
        	echo '</select>';
		#submit button
		echo '<input type="submit" name="add" value="Add"/>';
		echo '</form>';
		echo '</div>';
	}
	echo '</div>';
	echo '</div>';
        #echo '</div>';
    }
  }
?>
  </body>
</html>
