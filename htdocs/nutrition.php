<?php

include "./phpScripts/php_oci_funcs.php";

if( isset( $_GET[ 'id' ] ) )		// pass in recipe ID
{
	$conn = connect();

	$ingredients = getRecipeIngreds( $conn, $_GET[ 'id' ] );

	#print_r( $ingredients );

	$proximates = array();
	$lipids = array();
	$vitamins = array();
	$minerals = array();

	$lipids[ 'Saturated' ] = 0;
	$lipids[ 'Monounsaturated' ] = 0;
	$lipids[ 'Polyunsaturated' ] = 0;
	$lipids[ 'Trans' ] = 0;
	
	$lipids[ 'n-6' ] = 0;
	$lipids[ 'ALA' ] = 0;
	$lipids[ 'EPA' ] = 0;
	$lipids[ 'DPA' ] = 0;
	$lipids[ 'DHA' ] = 0;

	$totalOmega6 = 0;
	$totalOmega3 = 0;

	$lipids[ 'Cholesterol' ] = 0;

	foreach( $ingredients as $ingredient )
	{
		$grams = getIngredientGrams( $conn, $ingredient['ID'], $ingredient['AMOUNT'], $ingredient['UNIT'] );
	
		$proximateInstance = getIngredientProximates( $conn, $ingredient['ID'], $grams );

		foreach( $proximateInstance as $proximate )
		{
			if( !array_key_exists( $proximate[ 'NAME' ], $proximates ) )
			{
				$proximates[ $proximate[ 'NAME' ] ] = $proximate[ 'AMOUNT' ];
			}
			else
			{
				$proximates[ $proximate[ 'NAME' ] ] += $proximate[ 'AMOUNT' ];
			}
		}

		$lipidInstance = getIngredientLipids( $conn, $ingredient['ID'], $grams );

		foreach( $lipidInstance as $lipid )
		{
			if( preg_match( "/n-6/i", $lipid[ 'NAME' ] ) )
			{
				$lipids[ 'n-6' ] += $lipid[ 'AMOUNT' ];
				$totalOmega6 += $lipid[ 'AMOUNT' ];
			}
			else if( preg_match( "/n-3/i", $lipid[ 'NAME' ] ) )
			{
				if( preg_match( "/ALA/", $lipid[ 'NAME' ] ) )
				{
					$lipids[ 'ALA' ] += $lipid[ 'AMOUNT' ];
					$totalOmega3 += $lipid[ 'AMOUNT' ];
				}
				else if( preg_match( "/EPA/", $lipid[ 'NAME' ] ) )
				{
					$lipids[ 'EPA' ] += $lipid[ 'AMOUNT' ];
					$totalOmega3 += $lipid[ 'AMOUNT' ];
				}
				else if( preg_match( "/DPA/", $lipid[ 'NAME' ] ) )
				{
					$lipids[ 'DPA' ] += $lipid[ 'AMOUNT' ];
					$totalOmega3 += $lipid[ 'AMOUNT' ];
				}
				else if( preg_match( "/DHA/", $lipid[ 'NAME' ] ) )
				{
					$lipids[ 'DHA' ] += $lipid[ 'AMOUNT' ];
					$totalOmega3 += $lipid[ 'AMOUNT' ];
				}
			}
			else if( preg_match( "/cholesterol/i", $lipid[ 'NAME' ] ) )
			{
				$lipids[ 'Cholesterol' ] += $lipid[ 'AMOUNT' ];
			}
			else if( preg_match( "/ saturated/i", $lipid[ 'NAME' ] ) )
			{
				print_r( $lipid );
				$lipids[ 'Saturated' ] += $lipid[ 'AMOUNT' ];
			}
			else if( preg_match( "/ monounsaturated/i", $lipid[ 'NAME' ] ) )
			{
				print_r( $lipid );
				$lipids[ 'Monounsaturated' ] += $lipid[ 'AMOUNT' ];
			}
			else if( preg_match( "/ polyunsaturated/i", $lipid[ 'NAME' ] ) )
			{
				print_r( $lipid );
				$lipids[ 'Polyunsaturated' ] += $lipid[ 'AMOUNT' ];
			}
			else if( preg_match( "/ trans/i", $lipid[ 'NAME' ] ) )
			{
				print_r( $lipid );
				$lipids[ 'Trans' ] += $lipid[ 'AMOUNT' ];
			}
		}

		/*
		$vitaminInstance = getIngredientVitamins( $conn, $ingredient['ID'], $grams );

		foreach( $vitaminInstance as $vitamin )
		{
			if( !array_key_exists( $vitamin[ 'NAME' ], $vitamins ) )
			{
				$vitamins[ $vitamin[ 'NAME' ] ] = $vitamin[ 'AMOUNT' ];
			}
			else
			{
				$vitamins[ $vitamin[ 'NAME' ] ] += $vitamin[ 'AMOUNT' ];
			}
		}
		*/

		$mineralInstance = getIngredientMinerals( $conn, $ingredient['ID'], $grams );

		foreach( $mineralInstance as $mineral )
		{
			if( !array_key_exists( $mineral[ 'NAME' ], $minerals ) )
			{
				$minerals[ $mineral[ 'NAME' ] ] = $mineral[ 'AMOUNT' ];
			}
			else
			{
				$minerals[ $mineral[ 'NAME' ] ] += $mineral[ 'AMOUNT' ];
			}
		}
		
	}

	print_r( $proximates );
	print_r( $lipids );
	print_r( $minerals );
}

?>	

<!DOCTYPE html>

<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimus-scale=1">
    <title>Recipes for Life - About</title>
    <!-- Modernizr -->
    <script src="./js/libs/modernizr-2.6.2.min.js"></script>
    <!-- jQuery -->
    <script type="text/javascript" src="./js/libs.jquery-1.10.2.min.js"></script>
    <!-- framework css -->
    <link type ="text/css" rel="stylesheet" href="./css/groundwork.css">

	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    	<script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the proximate table.
        var data1 = new google.visualization.DataTable();
        data1.addColumn('string', 'Proximate');
        data1.addColumn('number', 'Grams');
        data1.addRows([
	
		<?php

		while( list( $key, $val ) = each( $proximates ) )
		{
			echo "['" . $key . "'" . ", " . $val . "],\n";
		}

		echo "]);";

		?>

        // Set chart options
        var options = {'title':'Proximate Data (Grams)',
                       'width':500,
                       'height':500};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div1'));
        chart.draw(data1, options);

	 // Create the lipid data table.
        var data2 = new google.visualization.DataTable();
        data2.addColumn('string', 'Lipid');
        data2.addColumn('number', 'Grams');
        data2.addRows([
	
		<?php

		$fats = array();
		$fats[ 'Saturated' ] = $lipids[ 'Saturated' ] / 1000;
		$fats[ 'Monounsaturated' ] = $lipids[ 'Monounsaturated' ] / 1000;
		$fats[ 'Polyunsaturated' ] = $lipids[ 'Polyunsaturated' ] / 1000; 
		$fats[ 'Trans' ] = $lipids[ 'Trans' ] / 1000;

		while( list( $key, $val ) = each( $fats ) )
		{
			echo "['" . $key . "'" . ", " . $val . "],\n";
		}

		echo "]);";

		?>

        // Set chart options
        var options = {'title':'Fat Profile',
                       'width':500,
                       'height':500};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));
        chart.draw(data2, options);

	
	

      }
    </script>



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
              <li><a href="./home.html"><i class="icon-home"></i>Home</a></li>
              <li><a href="./recipe_search.html"><i class="icon-search"></i>Recipe Search</a></li>
              <li><a href="./add_recipe.html"><i class="icon-plus"></i>Add Recipe</a></li>
              <li><a href="./ingredients.html"><i class="icon-food"></i>Ingredients</a></li>
              <li><a href="./shopping.html"><i class="icon-shopping-cart"></i>Shopping List</a></li>
              <li><a href="./about.html"><i class="icon-question"></i>About Us</a></li>
	      <li><a href="./main.php"><i class="icon-eject"></i>Log out</a></li>
            </ul>
          </nav>
        </div>
    </header>
    <div class="container">
      <div class="row padded">
	
		<div id="chart_div1"></div>

		<div id="chart_div2"></div>

      </div>
    </div>
  </body>
</html>
