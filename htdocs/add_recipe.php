<?php
 session_start();

 require 'phpScripts/php_oci_funcs.php';
#$_SESSION['id'] = 'zlipp@nd.edu'; #for testing


 if(isset($_SESSION['id'])==FALSE || isUser($_SESSION['id'])==FALSE)
        header('Location: http://csevm04.crc.nd.edu:8404/main.html');

 ini_set('display_errors','On');
 error_reporting(E_ALL);
?>

<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimus-scale=1">
    <title>Recipes for Life - Add Recipe</title>
    <!-- Modernizr -->
    <script src="./js/libs/modernizr-2.6.2.min.js"></script>
    <!-- jQuery -->
    <script type="text/javascript" src="./js/libs/jquery-1.10.2.min.js"></script>
    <!-- framework css -->
    <link type ="text/css" rel="stylesheet" href="./css/groundwork.css">

    <script type="text/javascript" src="./js/recipe.js"></script>

  </head>
  
  <body>
    <header class="padded">
      <div class="container">
        <div class="row padded">
          <div class="centered bounceInDown animated yellow box round align-center">
            <h1 class="zero museo-slab">Recipes For Life</h1>
            <p class="quicksand"> An interactive system to track your family food needs.</p>
          </div>
          <nav role="navigation" class="nav gap-top bounceInDown animated">
            <ul role="menubar">
              <li><a href="./home.php"><i class="icon-home"></i>Home</a></li>
              <li><a href="./recipe_search.php"><i class="icon-search"></i>Recipe Search</a></li>
              <li><a href="./add_recipe.php"l><i class="icon-plus"></i>Add Recipe</a></li>
              <li><a href="./shopping.php"><i class="icon-shopping-cart"></i>Shopping List</a></li>
              <li><a href="./about.php"><i class="icon-question"></i>About Us</a></li>
	      <li><a href="./logout.php"><i class="icon-eject"></i>Log out</a></li>
          </ul>
          </nav>
        </div>
    </header>
    <div class="container">
      <div class="row padded">
	<div class="centered bounceInRight animated blue box round align-center">
	  <h2 class="zero museo-slab">Add Recipe</h2>
	</div>
      </div>
    </div>
    <div class="container">
      <div class="centered bounceInUp animated grey box align-center">
        <form id="recipeForm">
          <div class="row padded">
            <div class="one third padded">
              <label id="recipe_name_id" for="recipe_name">Recipe Name:</label>
              <input id="recipe_name" type="text" placeholder="e.g. Salisbury Steak">
	    </div>
	    <div class="one third padded">
              <label id="recipe_time_id"  for="recipe_time">Total Time:</label>
              <input id="recipe_time" type="text" placeholder="Preparation Time">
            </div>
	    <div class="one third padded">
              <label id="recipe_servings_id" for="recipe_servings">Servings:</label>
              <input id="recipe_servings" type="number" min="1" placeholder="Total Servings">
            </div>	
          </div>
	  
	  <div class="row padded">
	    <div id="tableContainer" class="one whole padded" style="display:none">
	
		<h3>Successfully Parsed Ingredients</h3>    
		<table id="ingredientsTable">
			<tr>
				<th width="20%"><b>Amount</b></th>
				<th width="20%"><b>Unit</b></th>	
				<th width="20%"><b>Ingredient</b></th>
				<th width="20%"><b>Best Match</b></th>
				<th width="20%"><b>Descriptors</b></th>
				<th style="display:none">Original String</th>
			</tr>
		</table>

	    </div>
	  </div>

          <div class="row padded">
            <div id="ingredText" class="one whole padded">
              <label id="ingLabel" for="ing">Ingredients:</label>
              <textarea id="ing" placeholder="One ingredient per line, preferrably as <amount> <unit> <ingredient>"></textarea>
            </div>
	    <!--div id="unparsedIngDiv" class="one whole padded" style="display:none">
	      <label id="unparsedIngLabel" for="unparsedIng">Unparsed Ingredients:</label>
	      <textarea id="unparsedIng" placeholder="No such ingredients found. Specify as <amount> <unit> <ingredient>"></textarea>
	    </div-->
          </div>
	  <div class="row padded">
	    <div id="directText" class="one whole padded">
	      <label for="direct">Directions:</label>
	      <textarea id="direct" placeholder="Just copy and paste recipe steps here!"></textarea>
	    </div>
	    <div id="directPerm" class="one whole padded" style="display:none">
	    </div>
	  </div>
	  <div class="row">
		<div class="one third"></div>
		<div class="one third">
			<p id="recipeStatus" class="error-bg museo-slab" style="visibility:hidden; padding:0; margin:0;">Placeholder</p>
		</div>
		<div class="one third"></div>
	  </div>	
          <div class="row">
            <div class="one fifth padded"></div>
	    <div class="one fifth padded">
	      <button type="button" id="updateButton" color="aaa" onclick="validateRecipeForm( 'Parse' )">Parse Recipe</button>
	    </div>
            <div class="one fifth padded">
              <button type="button" id="submitRecipe" color="aaa" onclick="validateRecipeForm( 'Submit' )" style="visibility:hidden">Submit Recipe</button>
            </div>
	    <div class="one fifth padded">
	      <button type="button" id="upload" color="aaa" onclick="uploadImage()">Upload Image</button>
	      <input type="file" id="filename" accept="image/*" onchange="validateImage(this)" style="display:none"/>
            </div>
	    <div class="one fifth padded">
	      <p id="fileUploadName" class="success-bg museo-slab" style="visibility:hidden; padding:0; margin:0;">Placeholder</p>
	    </div>
	    <div class="one fifth padded"></div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
