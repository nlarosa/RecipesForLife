// Nicholas LaRosa
// Form verification

function setCookie( userName )		// log in the user
{
	//alert( document.cookie );

	var d = new Date();
	d.setTime( d.getTime() + ( 60*60*24*30*1000 ) );

	var expires = "expires=" + d.toGMTString();

	document.cookie = "user=" + encodeURIComponent( userName ) + "; " + expires + "; path=/;";

	//alert( document.cookie );
}

function cookieSet()			// check if user logged in
{
	var cookie_string = document.cookie;
	
	if( cookie_string.length != 0 )
	{
		return true;
	}
	else
	{
		return false;
	}
}

function getUser()			// return username
{
	if( cookieSet() )
	{
		var cookieString = document.cookie;
		var splits = cookieString.split( "user=" );
		
		try
		{
			splits = splits[1].split( ";");
			var userName = splits[0];
			//alert( userName );
			return userName;
		}
		catch( err )
		{
			//alert( err.message );
			return '';
		}
	}

	return '';
}

function unsetCookie( username )
{
	document.cookie = "expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/;";
}


function validEmail( formID )		// check that their email is valid
{
	var emailID;

	if( formID == 'newUserForm' )
	{
		emailID = 'regEmail';
	}
	else
	{
		emailID = 'email';
	}

	var email = document.getElementById( emailID ).value;
	var atpos = email.indexOf( '@' );
	var dotpos = email.lastIndexOf( '.' );

	if( atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length )
	{
		return false;
	}

	return true;
}

function validPassword( formID )	// check that password meets requirements
{
	var passwordID;

	if( formID == 'newUserForm' )
	{
		passwordID = 'password1';
	}
	else
	{
		passwordID = 'password';
	}

	var password = document.getElementById( passwordID ).value;
	var atpos = password.indexOf( '@' );
	var dotpos = password.lastIndexOf( '.' );

	if( password.length < 5 )
	{
		return false;
	}

	return true;
}

function validateNewUserForm()		// check for all fields and for same passwords
{
	var form = document.getElementById( 'newUserForm' );
	var formFull = true;

	var firstPassword;
	var samePasswords = true; 

	var email;
	var zipcode;

	for( i = 0; i < form.length; i++ )
	{
		var value = form[ i ].value;
		var id = form[ i ].id;

		if( id == null || id == '' )
		{
			continue;
		}
		else if( id == 'password1' )	// first password
		{
			firstPassword = value;
		}
		else if( id == 'password2' )	// second password
		{
			if( firstPassword != value )
			{
				samePasswords = false;
			}
		}
		else if( id == 'regEmail' )
		{
			email = value;
		}
		else if( id == 'zipcode' )
		{
			zipcode = value;
		}
		
		if( value == null || value == '' )
		{
			formFull = false;
		}
	}

	if( formFull && samePasswords )	// form is full, proceed with submit
	{
		var emailValid = validEmail( 'newUserForm' );
		var passwordValid = validPassword( 'newUserForm' );

		if( emailValid && passwordValid )
		{
			submitNewUserForm( email, murmurhash3_32_gc( firstPassword, 4 ), zipcode );
		}
		else if( !passwordValid )
		{
			document.getElementById( 'newUserStatus' ).innerHTML = '&nbsp Password too short.';
			document.getElementById( 'newUserStatus' ).style.visibility = 'visible';
			document.getElementById( 'newUserStatus' ).style.display = 'none';
			$("#newUserStatus").fadeIn();
		}
		else
		{
			document.getElementById( 'newUserStatus' ).innerHTML = '&nbsp Invalid email address.';
			document.getElementById( 'newUserStatus' ).style.visibility = 'visible';
			document.getElementById( 'newUserStatus' ).style.display = 'none';
			$("#newUserStatus").fadeIn();
		}
	}
	else if( !formFull && !samePasswords )
	{
		document.getElementById( 'newUserStatus' ).innerHTML = '&nbsp Passwords do not match & form incomplete.';
		document.getElementById( 'newUserStatus' ).style.visibility = 'visible';
		document.getElementById( 'newUserStatus' ).style.display = 'none';
		$("#newUserStatus").fadeIn();
	}
	else if( !formFull )		// otherwise, set invalid entry
	{
		document.getElementById( 'newUserStatus' ).innerHTML = '&nbsp Please complete all fields.';
		document.getElementById( 'newUserStatus' ).style.visibility = 'visible';
		document.getElementById( 'newUserStatus' ).style.display = 'none';
		$("#newUserStatus").fadeIn();
	}
	else
	{
		document.getElementById( 'newUserStatus' ).innerHTML = '&nbsp Passwords do not match.';
		document.getElementById( 'newUserStatus' ).style.visibility = 'visible';
		document.getElementById( 'newUserStatus' ).style.display = 'none';
		$("#newUserStatus").fadeIn();
	}
	
}

function validateExistingUserForm()	// check for all fields
{
	var form = document.getElementById( 'existingUserForm' );
	var formFull = true; 

	var email;
	var password;

	for( i = 0; i < form.length; i++ )
	{
		var value = form[ i ].value;
		var id = form[ i ].id;

		if( id == null || id == '' )
		{
			continue;
		}
		else if( id == 'email' )
		{
			email = value;
		}
		else if( id == 'password' )
		{
			password = value;
		}	

		if( value == null || value == '' )
		{
			formFull = false;
			break;
		}
	}

	if( formFull )			// form is full, proceed with submit
	{
		var emailValid = validEmail( 'existingUserForm' );
		var passwordValid = validPassword( 'existingUserForm' );

		if( emailValid && passwordValid )
		{
			//alert( 'Completed form.' );
			attemptLogin( email, murmurhash3_32_gc( password, 4 ) );
		}
		else if( !passwordValid )
		{
			document.getElementById( 'existingUserStatus' ).innerHTML = '&nbsp Invalid password.';
			document.getElementById( 'existingUserStatus' ).style.visibility = 'visible';
			document.getElementById( 'existingUserStatus' ).style.display = 'none';
			$("#existingUserStatus").fadeIn();	
		}
		else
		{
			document.getElementById( 'existingUserStatus' ).innerHTML = '&nbsp Invalid email address.';
			document.getElementById( 'existingUserStatus' ).style.visibility = 'visible';
			document.getElementById( 'existingUserStatus' ).style.display = 'none';
			$("#existingUserStatus").fadeIn();
		}
	}
	else				// otherwise, set invalid entry
	{
		document.getElementById( 'existingUserStatus' ).innerHTML = '&nbsp Please complete all fields.';
		document.getElementById( 'existingUserStatus' ).style.visibility = 'visible';
		document.getElementById( 'existingUserStatus' ).style.display = 'none';
		$("#existingUserStatus").fadeIn();
	}
}

function submitNewUserForm( email, password, zipcode )		// submit for via aJax
{
	var dataString = 'email='+ email + '&password=' + password + '&zipcode=' + zipcode;
	//alert( dataString );
	
	$.ajax(
		{
			type: "POST",
			url: "../phpScripts/addNewUser.php",
			dataType:'json',
			data: dataString,
			success: function( data ) 
			{
				if( data == 1 )		// successful registration
				{
					document.getElementById( 'newUserStatus' ).className = 'success-bg museo-slab';
					document.getElementById( 'newUserStatus' ).innerHTML = '&nbsp Successful registration!';
					document.getElementById( 'newUserStatus' ).style.visibility = 'visible';
					document.getElementById( 'newUserStatus' ).style.display = 'none';
					$("#newUserStatus").fadeIn();
					console.log( 'Success' );
				}
				else
				{
					document.getElementById( 'newUserStatus' ).innerHTML = '&nbsp Account exists for this email.';
					document.getElementById( 'newUserStatus' ).style.visibility = 'visible';
					document.getElementById( 'newUserStatus' ).style.display = 'none';
					$("#newUserStatus").fadeIn();	
					console.log( 'Failure' );
				}
				console.log( data );
			}
		}
	);

	return false;

}

function attemptLogin( email, password )		// verify credentials
{
	var dataString = 'email='+ email + '&password=' + password;
	//alert( dataString );

	$.ajax(
		{
			type: "POST",
			url: "../phpScripts/attemptLogin.php",
			dataType:'json',
			data: dataString,
			success: function( data ) 
			{
				if( data == 1 )		// successful registration
				{
					document.getElementById( 'existingUserStatus' ).className = 'success-bg museo-slab';
					document.getElementById( 'existingUserStatus' ).innerHTML = '&nbsp Successful login!';
					document.getElementById( 'existingUserStatus' ).style.visibility = 'visible';
					document.getElementById( 'existingUserStatus' ).style.display = 'none';
					$("#existingUserStatus").fadeIn();
	
					setCookie( email );
					window.location.href = 'http://csevm04.crc.nd.edu:8404/home.php';
					console.log( 'Success' );
				}
				else
				{
					document.getElementById( 'existingUserStatus' ).innerHTML = '&nbsp Username and/or password incorrect.';
					document.getElementById( 'existingUserStatus' ).style.visibility = 'visible';
					document.getElementById( 'existingUserStatus' ).style.display = 'none';
					$("#existingUserStatus").fadeIn();

					console.log( 'Failure' );
				}
				console.log( data );
			}
		}
	);

	return false;
}

