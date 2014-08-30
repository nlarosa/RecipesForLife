<?php

 session_start();

 ini_set('display_errors','On');
 error_reporting(E_ALL);

 #imports 
 require 'phpScripts/php_oci_funcs.php';
 
 $conn = connect();

 if(isset($_POST['add']))#adding scheduled recipe
 {
    if(isSched($_SESSION['id'],$_POST['recID'],$_POST['day'], $_POST['month'], $_POST['year']))
    {
         echo '<font color="red"><p>ERROR: Could not add recipe because recipe is already planned for that day</p></font>';
    }
    else
    {
        if(isset($_SESSION['id'])==FALSE)
                $_SESSION['id'] = 'zlipp@nd.edu';
        $date = makeDate($_POST['day'], $_POST['month'],$_POST['year']);
        addScheduledRecipe($conn,$_SESSION['id'],$_POST['recID'], $date);
        oci_close($conn);-
        header('Location: http://csevm04.crc.nd.edu:8404/home.php');
    } 
}

if(isset($_GET['recipeID' ])&&isRecipe($_GET['recipeID']))// pass in recipe ID
{
        $ingredients = getRecipeIngreds( $conn, $_GET[ 'recipeID' ] );

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
                                #print_r( $lipid );
                                $lipids[ 'Saturated' ] += $lipid[ 'AMOUNT' ];
                        }
                        else if( preg_match( "/ monounsaturated/i", $lipid[ 'NAME' ] ) )
                        {
                                #print_r( $lipid );
                                $lipids[ 'Monounsaturated' ] += $lipid[ 'AMOUNT' ];
                        }
                        else if( preg_match( "/ polyunsaturated/i", $lipid[ 'NAME' ] ) )
                        {
                                #print_r( $lipid );
                                $lipids[ 'Polyunsaturated' ] += $lipid[ 'AMOUNT' ];
                        }
                        else if( preg_match( "/ trans/i", $lipid[ 'NAME' ] ) )
                        {
                                #print_r( $lipid );
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

#        print_r( $proximates );
 #       print_r( $lipids );
  #      print_r( $minerals );

	$recipeInfo = getRecipeInfo($conn, $_GET['recipeID']);

	#if($totalOmega3 != 0)
		
	if( $totalOmega6 > $totalOmega3 )
	{
		$ratio = $totalOmega6 / $totalOmega3;
	}
	else
	{
		$ratio = $totalOmega3 / $totalOmega6;
	}

	#else 
		#$ratio = 0; #maybe
}

?>

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
   
	<script type="text/javascript" src="https://www.google.com/jsapi"></script> 
	<script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart','gauge']});

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
                        echo "['" . $key . "'" . ", " . $val / $recipeInfo[ 'SERVINGS' ] . "],\n";
                }

                echo "]);";

                ?>

        // Set chart options
        var options = {'title':'Proximate Data (Grams)',
                       'width':400,
                       'height':400};

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
                        echo "['" . $key . "'" . ", " . $val / $recipeInfo[ 'SERVINGS' ] . "],\n";
                }

                echo "]);";

                ?>

        // Set chart options
        var options = {'title':'Lipid Profile (Grams)',
                       'width':400,
                       'height':400};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));
        chart.draw(data2, options);

	var data3 = new google.visualization.DataTable();
        data3.addColumn('string', 'Minerals');
        data3.addColumn('number', 'Milligrams');
        data3.addRows([

                <?php

                while( list( $key, $val ) = each( $minerals ) )
                {
                        echo "['" . $key . "'" . ", " . $val / 1000 / $recipeInfo[ 'SERVINGS' ] . "],\n";
                }

                echo "]);";

                ?>

        // Set chart options
        var options = {'title':'Mineral Data (Milligrams)',
                       'width':400,
                       'height':400};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('chart_div3'));
        chart.draw(data3, options);

	var data4 = new google.visualization.DataTable();
	data4.addColumn( 'string', 'Omega 6 to Omega 3 Ratio' );
	data4.addColumn( 'number', 'Ratio' );
	data4.addRows([
          ['Omega 6', <?php echo $totalOmega6 / $totalOmega3; ?>],
	  ['Omega 3', <?php echo $totalOmega3 / $totalOmega3; ?>]
        ]);

        var options = {
          'title':'Omega 6 to Omega 3 Ratio',
	  'width':400,
	  'height':400};  

        var chart = new google.visualization.BarChart(document.getElementById('chart_div4'));
        chart.draw(data4, options);

      }
    </script>

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
    </header>
    <div class="container" align="center">
    <?php
	if(isset($_GET['recipeID']) && isRecipe($_GET['recipeID']))
	{
		$conn = connect();
		$recipeInfo = getRecipeInfo($conn, $_GET['recipeID']);
		$ingreds = getRecipeIngreds($conn, $_GET['recipeID']);
		oci_close($conn);
		if(isset($_SESSION['id']) && isUser($_SESSION['id']))
                {
		 	echo '<p align="right"><a href="http://csevm04.crc.nd.edu:8404/add_recipe_zl.php?recipeID='.$recipeInfo['ID'].'">Edit</a></p>';
		}
		echo '<h2>'.$recipeInfo['NAME'].'</h2>';
		echo '<div class="row">';
		echo '<div class="one seventh padded">';
		echo '<h5>By: '.$recipeInfo['AUTHOREMAIL'].'</h5>';
		echo '<h5>Prep Time: '.$recipeInfo['PREPTIME'].'</h5>';
		echo '<h5>Servings: '.$recipeInfo['SERVINGS'].'</h5>';
		echo '</div>';
		echo '<div class="three seventh padded">';
		echo '<h5 align="left">Ingredients: </h5>';
		echo '<ul>';
		foreach($ingreds as $line)
			echo '<li align="left">'.$line['AMOUNT'].' '.$line['UNIT'].' '.$line['NAME'].'</li>'."\n";
		echo '</ul>';
		echo '</div>';
		echo '<div class="two seventh padded">';
		echo '<h5 align="left">Directions:</h5>';
		echo '<p align="left">';
		echo $recipeInfo['DIRECTIONS'];
		echo '</p>';
		echo '</div>';

		if(isset($_SESSION['id']) && isUser($_SESSION['id']))
		{
			echo '<div class="one seventh padded">';
			echo '<form method="post" action="recipe.php?recipeID='.$_GET['recipeID'].'">';
			echo '<input type="hidden" name="recID" value="'.$_GET['recipeID'].'">';
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
        		echo '<input type="submit" name="add" value="Add">';
        		echo '</form>';
			echo '</div>';
		}
		echo '</div>';
	}	
	else
		echo '<h2>No Valid recipeID passed!</h2>';




    ?>
	<div class="row padded">
		<h3 class="center"><?php if(isset($_GET['recipeID']) && isRecipe($_GET['recipeID'])) echo 'Nutrition Per Serving'?></h3>
		<div class="one half bounceLeft animated">
			<div id="chart_div1"></div>
		</div>
		<div class="one half bounceRight animated">
			<div id="chart_div2"></div>
		</div>
	</div>
	<div class="row padded">
		<div class="one half bounceIn animated">
			<div id="chart_div4"></div>
		</div>
		<div class="one half bounceDown animated">
			<div id="chart_div3"></div>
		</div>
	</div>
	</div>
    </div>
  </body>
</html>

