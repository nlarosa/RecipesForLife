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
      </div>
    </header>
    <div class="container">
      <div class="row padded">
	<div class="centered bounceInUp animated purple box align-center">
		<div class="one third padded">
			<form action="home.php" method="post" > <input type="submit" name="prev" value="Prev"></form>
		</div>
		<h2 class="zero museo-slab">

		<div class="one third padded">
			<?php if(isset($_SESSION['month'])==FALSE|| isset($_SESSION['year'])==FALSE)
				{
				  date_default_timezone_set('America/New_York');
				  $date = getdate();
				  $_SESSION['month'] = $date['mon'];
				  $_SESSION['year'] = $date['year'];
				}
			      if(isset($_POST['prev']))
				{
					if($_SESSION['month']<=1)
					{
						$_SESSION['year']--;
						$_SESSION['month'] = 12;
					}
					else
						$_SESSION['month']--;
				}
			      if(isset($_POST['next']))  
				 {
					if($_SESSION['month']>=12)
					{
						$_SESSION['month']= 1;
						$_SESSION['year']++;       
					}
					else
						$_SESSION['month']++;
				}		

			      $months = array('January','February','March','April','May','June','July','August','September','October','November','December');
			      echo $months[($_SESSION['month']-1)].' '.$_SESSION['year'];
			?>
		</div>
		</h2>
		<div class="one third padded">
                        <form action="home.php" method="post" > <input type="submit" name="next" value="Next"></form>
                </div>
	  <table border=1>
	    <tr>
	      <td><h3><font color="black">Monday</font></h3></td>
	      <td><h3><font color="black">Tuesday</font></h3></td>
	      <td><h3><font color="black">Wednesday</font></h3></td>
	      <td><h3><font color="black">Thursday</font></h3></td>
	      <td><h3><font color="black">Friday</font></h3></td>
	      <td><h3><font color="black">Saturday</font></h3></td>
	      <td><h3><font color="black">Sunday</font></h3></td>
	    </tr>
	    <tr>
		<?php
                	date_default_timezone_set('America/New_York');
                	$offset = date('N',mktime(0, 0, 0, $_SESSION['month'], 1, $_SESSION['year']));
                	$days = array(31,28,31,30,31,30,31,31,30,31,30,31);
			for($i = 1; $i< $offset+ $days[($_SESSION['month']-1)]; $i++)
			{
				echo '<td>';
				if($i >= $offset)
				{
					echo '<font color="black"><p>'.($i-$offset+1).'</p>';
					
					#get recipes for day
        				$conn = connect();
        				$results = getScheduledRecipes($conn,$_SESSION['id'],$i-$offset+1, $_SESSION['month'], $_SESSION['year']);
        				oci_close($conn);
					#echo $results;
					foreach($results as $line)
					{
						echo '<p><a href="http://csevm04.crc.nd.edu:8404/recipe.php?recipeID='.$line['ID'].'">'.$line['NAME'].'</a></p>';
					}
					echo '</font>'; 
				}
				echo '</td>';
				if($i%7 == 0 )
				{
					echo '</tr><tr>';
				}			
			}
			while($i%7 != 1)
			{
				echo '<td></td>';
				$i++;
			}
				
            	?>
	     </tr>
	  </table>
	</div>
      </div>
    </div>
  </body>
</html>
