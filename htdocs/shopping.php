<?php
 #if(isset($_SESSION)==FALSE)
        session_start();

#imports
 require 'phpScripts/php_oci_funcs.php';

 if(isset($_SESSION['id'])==FALSE || isUser($_SESSION['id'])==FALSE )
#	$_SESSION['id']='zlipp@nd.edu';
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
    <title>Recipes for Life - Shopping List</title>
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
        <h1 align="center">Create Your Shopping List</h1>
    </div>
  </div>
<br>
<div class="container" align="center">
 <div class="centered bounceInUp animated grey box align-center">
   <form method="post" action="shopping.php"> 
	Select the days you wish to shop for:
	<br>
	<div class="row">
	<div class="one fourth padded" align="right">
	From:
	</div>
	<div class="one fourth padded" align="left">
	<?php
		dateDropDown(1);
	?>
	</div>
	<div class="one tenth padded" align="right">
	To:
	</div>
	<div class="one fourth padded" align="right">
	<?php
		dateDropDown(2);
	?>
	</div>
	</div>
	<input type="submit" name="submit" value="Submit">
    </form>
 </div>

    <?php
    if(isset($_POST['submit']))
    {
	
	$date1 = makeDate($_POST['day1'], $_POST['month1'], $_POST['year1']);
	$date2 = makeDate($_POST['day2'], $_POST['month2'], $_POST['year2']);
	$conn = connect();
	$results = getShoppingList($conn, $_SESSION['id'], $date1, $date2);
	oci_close($conn);
	if(count($results)<1)
		echo '<h4>You have no meals planned for this time</h4>';
	else
	echo '<br><h4>Shopping List:</h4>';	

	foreach($results as $line)
	{
		echo '<p>'.$line['AMOUNT'].' '.$line['UNIT'].' '.$line['NAME'].'</p>';
	}
     }		

    ?>	
  </div>
  </body>
</html>

<?php
function dateDropDown($i)
{
	#drop down menu for month
        $months = array('January','February','March','April','May','June','July','August','September','October','November','December');
        echo '<select name="month'.$i.'">';
        for($temp=1; $temp<13; $temp++)
        {
                echo '<option value="'.$temp.'">'.$months[$temp-1].'</option>';
        }
        echo '</select>';
        #drop down for days
        echo '<select name="day'.$i.'">';
        for($temp=1; $temp<=31; $temp++)
        {
                echo '<option>'.$temp.'</option>';
        }
        echo '</select>';
        #drop down for years
        echo '<select name="year'.$i.'">';
        for($temp=2014; $temp<2024; $temp++)
        {
                echo '<option>'.$temp.'</option>';
        }
        echo '</select>';
}













