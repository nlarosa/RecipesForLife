<?php
 ini_set('display_errors','On');
 error_reporting(E_ALL);

 include( 'core/init.inc.php' );

 if( isset($_POST['login']) )
 {
	$return = verifyCredentials( $_POST[ 'email' ], $_POST[ 'password' ] );
	echo 'set and password is '.$_POST['password']; 
	if( $return == 1 )
	{
		session_start();
		$_SESSION['id'] = $_POST[ 'email' ];
		header('Location: http://csevm04.crc.nd.edu:8404/home.php');
	}
	 
}

?>

<!DOCTYPE html>

<html>
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

		<link rel="icon" type="img/ico" href="favicon.ico">
		<title>Recipes for Life</title>
		<!-- Modernizr -->
		<script src="./js/libs/modernizr-2.6.2.min.js"></script>
		<!-- jQuery-->
		<script type="text/javascript" src="./js/libs/jquery-1.10.2.min.js"></script>
		<!-- framework css -->
		<link type="text/css" rel="stylesheet" href="./css/groundwork.css">

		<script type="text/javascript" src="./js/murmurhash3_gc.js"></script>
		<script type="text/javascript" src="./js/form.js"></script>

		<!--script>

			alert( document.cookie );

		</script-->
	
		<style>
			body
			{
				background-color: #C7C397;
			}
			div
			{
				color: #fff;
			}
		</style>
	</head>

	<body>
		<div class="container">
			
			<div class="row padded"></div>
			<div class="row padded">
				<div class="centered bounceInDown animated box round align-center" style="background-color:#6E7649; color:#fff;">
					<h1 class="museo-slab padded">Recipes For Life</h1>
					<p class="quicksand museo-slab">An interactive system to track your family food needs.</p>
				</div>
			</div>
			<div class="row padded">
				<div class="row">
					<div class="one eleventh padded"></div>
					<form id="existingUserForm" method="post" action="main.php">	
						<div class="four elevenths padded bounceInLeft animated box" style="background-color:#9D9754; color: #fff;">
							<h2 class="museo-slab align-center" style="margin-bottom:0;">Existing Users</h2>
							<div class="row">
								   <?php
								   if(isset($_POST['login']))
									{
										echo '<p id="existingUserStatus" class="error-bg museo-slab" style="padding:0; margin:0;"> ERROR: Invalid Login</p>';	
									}
								      else
									{
										echo '<p id="existingUserStatus" class="error-bg museo-slab" style="padding:0; margin:0;visibility:hidden;">Placeholder</p>';
									}
								    ?>								
							</div>						
							<div class="row">
								<label for="email" class="museo-slab">Email Address</label>
								<div class="one eighth"><span class="prefix"><i class="icon-envelope icon"></i></span></div>
								<div class="seven eighths">
									<input id="email" name="email" type="email" placeholder="Email Address" class="museo-slab">
								</div>
							</div>
							<div class="row">
								<label for="password" class="museo-slab">Password</label>
								<div class="one eighth"><span class="prefix"><i class="icon-lock icon"></i></span></div>
								<div class="seven eighths">
									<input id="password" type="password" name="password" placeholder="Password" class="museo-slab">	
								</div>
							</div>
							<br>
							<!--button type="button" style="font-family:museo-slab" onclick="validateExistingUserForm()">Log in</button-->
							<input type="submit" name="login" onclick="validateExistingUserForm()" style="font-family:museo-slab" value="Log in">
						</div>
					</form>
					<div class="one eleventh padded"></div>
					<form id="newUserForm" method="POST">
						<div class="four elevenths padded bounceInRight animated box" style="background-color:#9D9754; color: #fff;">
							<h2 class="museo-slab align-center" style="margin-bottom:0;">New Users</h2>
							<div class="row">
								<p id="newUserStatus" class="error-bg museo-slab" style="visibility:hidden; padding:0; margin:0;">Placeholder</p>
							</div>
							<div class="row">
								<label for="regEmail" class="museo-slab">Email Address</label>
								<div class="one eighth"><span class="prefix"><i class="icon-envelope icon"></i></span></div>
								<div class="seven eighths">
									<input id="regEmail" type="regEmail" placeholder="Email Address" class="museo-slab">
								</div>
							</div>
							<div class="row">
								<label for="password1" class="museo-slab">Password</label>
								<div class="one eighth"><span class="prefix"><i class="icon-lock icon"></i></span></div>
								<div class="seven eighths">	
									<input id="password1" type="password" placeholder="Password" class="museo-slab">
								</div>
							</div>
							<div class="row">
								<label for="password2" class="museo-slab">Repeat Password</label>
								<div class="one eighth"><span class="prefix"><i class="icon-lock icon"></i></span></div>
								<div class="seven eighths">
									<input id="password2" type="password" placeholder="Password" class="museo-slab">
								</div>
							</div>
							<div class="row">
								<label for="zipcode" class="museo-slab">Zip Code</label>
								<div class="one eighth"><span class="prefix"><i class="icon-globe icon"></i></span></div>
								<div class="seven eighths">
									<input id="zipcode" type="text" placeholder="Zip Code" class="museo-slab">
								</div>
							</div>
							<br>
							<button type="button" style="font-family:museo-slab" onclick="validateNewUserForm()">Register</button>
						</div>
					</form>
					<div class="one eleventhth padded"></div>
				</div>
			</div>
			<!--div class="row padded">
				<div class="one eleventh padded"></div>
				<div class="four elevenths padded bounceInUp animated yellow box">
					<h2 class = "museo-slab align-center">Enter as Guest</h2>
					<a href="home.html" class="blue button align-center" >Enter Site</a>
				</div>
			</div-->
			<div class="row padded">
				<div class="centered bounceInDown animated box round align-center" style="background-color:#6E7649; color: #fff;">
					<h5 class="padded museo-slab">Created by Nicholas LaRosa, Zachary Lipp, and Sean Murphy</h5>
					<p class="quicksand museo-slab">CSE 40746 - Advanced Database Projects</p>
				</div>
			</div>
		</div>
	</body>
</html>


