// Nicholas LaRosa
// Recipe Veriication

function validateRecipeForm( button )		// check that all fields completed
{
	var form = document.getElementById( 'recipeForm' );
	var formFull = true;

	var recipeName;
	var recipeTime;
	var recipeServings;
	var recipeIngredients;
	var recipeIntructions;
	var recipeImage;

	for( i = 0; i < form.length; i++ )
	{
		var value = form[ i ].value;
		var id = form[ i ].id;

		if( id == null || id == '' )
		{
			continue;
		}
		else if( id == 'recipe_name' )
		{
			if( value == null || value == '' )
			{
				formFull = false;
				document.getElementById( 'recipe_name' ).className = 'invalid';
			}
			else
			{
				recipeName = value;
			}
		}
		else if( id == 'recipe_servings' )
		{
			if( value == null || value == '' )
			{
				formFull = false;
				document.getElementById( 'recipe_servings' ).className = 'invalid';
			}
			else
			{
				recipeServings = value;
			}
		}
		else if( id == 'recipe_time' )
		{
			recipeTime = value;
		}
		else if( id == 'ing' )
		{
			if( ( value == null || value == '' ) && button == 'Parse' )
			{
				formFull = false;
				document.getElementById( 'ing' ).className = 'invalid';
			}
			else
			{
				recipeIngredients = value;
			}
		}
		else if( id == 'direct' )
		{
			if( value == null || value == '' )
			{
				formFull = false;
				document.getElementById( 'direct' ).className = 'invalid';
			}
			else
			{
				recipeInstructions = value;
			}
		}
		else if( id == 'filename' )
		{
			if( value != null && value != '' )
			{
				if( !validateImage( document.getElementById( 'filename' ) ) )
				{
					//alert( 'File format still not okay' );
				}
			}
		}
	}

	//alert( 'Here' );

	if( !formFull && button == 'Parse' )
	{
		document.getElementById( 'recipeStatus' ).innerHTML = '&nbsp Please complete the highlighted fields.';
		document.getElementById( 'recipeStatus' ).className = 'error-bg';
		document.getElementById( 'recipeStatus' ).style.visibility = 'visible';
		document.getElementById( 'recipeStatus' ).style.display = 'none';
		$("#recipeStatus").fadeIn();
	}
	else if( button == 'Parse' )
	{
		document.getElementById( "submitRecipe" ).style.visibility = 'visible';	
		document.getElementById( 'recipeStatus' ).innerHTML = '&nbsp Parsing Recipe...';
		document.getElementById( 'recipeStatus' ).className = 'success-bg';
		document.getElementById( 'recipeStatus' ).style.visibility = 'visible';
		document.getElementById( 'recipeStatus' ).style.display = 'none';
		$("#recipeStatus").fadeIn();

		for( i = 0; i < form.length; i++ )
		{

			if( document.getElementById( form[i].id ).className == 'invalid' )
			{
				document.getElementById( form[i].id ).className = '';
			}
		}

		parseRecipeForm( recipeName, recipeServings, recipeTime, recipeIngredients, recipeInstructions );
	}
	else if( button == 'Submit' )
	{
		//alert( 'Clicked' );
		submitRecipeForm( recipeName, recipeServings, recipeTime, recipeInstructions );		// retrieve ingredients from DOM
	}
}

function validateImage( file )	// check for valid filename
{
	var fileExpr = /^(?:[\w]\:|\\)(\\[a-z_\-\s0-9\.]+)+\.(png|gif|jpg|jpeg)$/i;
	
	var fileName = file.value.replace( 'fakepath', '...' );
	var fileExt = file.value.split('.')[ file.value.split('.').length - 1 ].toLowerCase();

	if( fileExt === 'gif' || fileExt === 'png' || fileExt === 'jpg' || fileExt === 'jpeg' )
	{
		document.getElementById( 'fileUploadName' ).innerHTML = '&nbsp' + fileName;
		document.getElementById( 'fileUploadName' ).style.visibility = 'visible';
		document.getElementById( 'fileUploadName' ).style.display = 'none';
		$("#fileUploadName").fadeIn();

		return true;
	}
	else
	{
		document.getElementById( 'recipeStatus' ).innerHTML = '&nbsp Image format not suitable.';
		document.getElementById( 'recipeStatus' ).style.visibility = 'visible';
		document.getElementById( 'recipeStatus' ).style.display = 'none';
		$("#recipeStatus").fadeIn();	
	
		file.focus();
		return false;
    	}
}

function uploadImage()			// register click on input file
{
	//alert( 'Clicked' );
	$("#filename").trigger('click');
}

function parseRecipeForm( title, prepTime, servings, ingredients, instructions )		// parse form via aJax
{
	/*
	var dataString[ 'title' = title;
	dataString[ 'prepTime' ] = prepTime;
	dataString[ 'ingredients' ] = ingredients;
	dataString[ 'instructions' ] = instructions;
	*/

	dataString = JSON.stringify({ title: title, prepTime: prepTime, servings: servings, ingredients: ingredients, instructions: instructions});
	
	//alert( dataString );

	request = new XMLHttpRequest()
	request.open( "POST", "./phpScripts/parseRecipe.php", true )
	request.setRequestHeader( "Content-type", "application/json" )
	
	request.onreadystatechange = function()
	{
		if( request.readyState == 4 && request.status == 200 )
		{
			var returnData = request.responseText;
			//alert( returnData );

			var obj = JSON && JSON.parse( returnData ) || $.parseJSON( returnData );

			var table = document.getElementById( "ingredientsTable" );
			var unparsedIngredients = '';

			for( var i = table.rows.length - 1; i > 1; i-- )
			{
				
			//	table.deleteRow( i );				// clear any existing table
			}

			for( i = 1; i < obj.ingredients.length + 1; i++ )
			{
				//alert( JSON.stringify( obj.ingredients[i-1].Result ) );

				if( JSON.stringify( obj.ingredients[i-1].Result ) == '"Error"' )
				{
					//alert( 'Error' );
					unparsedIngredients = unparsedIngredients + JSON.stringify( obj.ingredients[i-1].originalString ).replace( /\"/g, '' );
					unparsedIngredients += "\n";
				}
				else
				{
					if( obj.ingredients[i-1].ingredientResults.length == 0 )		// no ingredients found, add to unparsed
					{
						unparsedIngredients = unparsedIngredients + JSON.stringify( obj.ingredients[i-1].originalString ).replace( /\"/g, '' );
						unparsedIngredients += "\n";
						continue;
					}

					var index = table.rows.length;

					var row = table.insertRow( index );

					//alert( row );

					var amount = row.insertCell( 0 );
					var unit = row.insertCell( 1 );
					var ingredient = row.insertCell( 2 );
					var bestMatch = row.insertCell( 3 );
					var descriptors = row.insertCell( 4 );
					var original = row.insertCell( 5 );

					//alert( 'okay' );
					amount.innerHTML = JSON.stringify( obj.ingredients[i-1].Amount ).toLowerCase();
					unit.innerHTML = JSON.stringify( obj.ingredients[i-1].Unit ).replace( /\"/g, '' ).toLowerCase();
					descriptors.innerHTML = JSON.stringify( obj.ingredients[i-1].Descriptor ).replace( /\"/g, '' ).toLowerCase();
					original.style.display = 'none';
					original.innerHTML = JSON.stringify( obj.ingredients[i-1].originalString ).replace( /\"/g, '' );

					var ingredientHTMLString = '';

					ingredientHTMLString = '<select id="select' + index + '">';	

					for( j = 0; j < obj.ingredients[i-1].ingredientResults.length; j++ )
					{
						ingredientHTMLString = ingredientHTMLString + '<option value=' + JSON.stringify( obj.ingredients[i-1].ingredientResults[j].ID ) + '>' + JSON.stringify( obj.ingredients[i-1].ingredientResults[j].NAME ).replace( /\"/g, '' ) + '</option>';
					}
				
					ingredientHTMLString += '</select>';
					//alert( ingredientHTMLString );

					ingredient.innerHTML = JSON.stringify( obj.ingredients[i-1].Ingredient ).replace( /\"/g, '' ).toLowerCase();
					bestMatch.innerHTML = ingredientHTMLString;

					//JSON.stringify( obj.ingredients[i-1].Ingredient ).replace( /\"/g, '' ).toLowerCase();
				}
			}

			if( unparsedIngredients != '' )
			{
				document.getElementById( "ingLabel" ).innerHTML = 'Unparsed Ingredients:';
			}
			else
			{
				document.getElementById( "ingLabel" ).innerHTML = 'Add Ingredients:';
			}

			document.getElementById( "ing" ).value = unparsedIngredients;
			document.getElementById( "submitRecipe" ).style.visibility = 'visible';	
			//$("#unparsedIngDiv").fadeIn();
			//$("#ingredText").fadeOut();
		
				
			
			document.getElementById( "recipe_name" ).disabled = true;
			document.getElementById( "recipe_time" ).disabled = true;
			document.getElementById( "recipe_servings" ).disabled = true;
			document.getElementById( "direct" ).disabled = true;
			document.getElementById( "directPerm" ).innerHTML = instructions;
			document.getElementById( 'recipeStatus' ).innerHTML = '&nbsp Verify Submit Below.';
	
			$("#recipe_name").fadeOut( function()
			{
				setTimeout( function() 
				{
					$("#recipe_name").fadeIn();
				}, 500 );
			}
			);

			$("#recipe_time").fadeOut( function()
			{
				setTimeout( function() 
				{
					$("#recipe_time").fadeIn();
				}, 500 );
			}
			);

			$("#recipe_servings").fadeOut( function()
			{
				setTimeout( function() 
				{
					$("#recipe_servings").fadeIn();
				}, 500 );
			}
			);

			//$("#ingredText").fadeOut( function()
			//{
				setTimeout( function() 
				{
					$("#tableContainer").fadeIn();
				}, 500 );
			//}
			//);

			$("#direct").fadeOut( function()
			{
				setTimeout( function() 
				{
					$("#direct").fadeIn();
				}, 500 );
			}
			);
		}
	}

	request.send( dataString );
}

function submitRecipeForm( title, prepTime, servings, instructions )		// submit form via aJax
{
	/*
	var dataString[ 'title' = title;
	dataString[ 'prepTime' ] = prepTime;
	dataString[ 'ingredients' ] = ingredients;
	dataString[ 'instructions' ] = instructions;
	*/

	var table = document.getElementById( "ingredientsTable" );		// first, check all ingredients for grams conversion
	var unparsedIngredients = document.getElementById( "ing" ).value;
	var invalidIngredients = '';

	for( var i = table.rows.length - 1; i > 0; i-- )
	{
		var amount = table.rows[ i ].cells[ 0 ].innerHTML;
		var unit = table.rows[ i ].cells[ 1 ].innerHTML;
		var descriptors = table.rows[ i ].cells[ 4 ].innerHTML;
		var original = table.rows[ i ].cells[ 5 ].innerHTML;

		var selectIndex = i;

		while( 1 )
		{
			try
			{
				var ingredient = document.getElementById( 'select' + selectIndex ).value;
				//alert( ingredient );
				break;
			}
			catch( err )
			{
				selectIndex++;				// we need to check for other indexes that may have been moved
				
				if( selectIndex == 100 )
				{
					//alert( err.message );
					return false;
				}
			}
		}

		var dataString = JSON.stringify({ title: title,  amount: amount, unit: unit, ingredient: ingredient, descriptors: descriptors });
		//alert( dataString );

		request = new XMLHttpRequest()
		request.open( "POST", "./phpScripts/checkRecipeIngredient.php", false );
		request.setRequestHeader( "Content-type", "application/json" );

		request.onreadystatechange = function()
		{
			if( request.readyState == 4 && request.status == 200 )
			{
				var returnData = request.responseText;
				var obj = JSON && JSON.parse( returnData ) || $.parseJSON( returnData );

				if( obj.Result != 'Success' )
				{
					invalidIngredients += original;
					table.deleteRow( i );
				}
			}
		}

		request.send( dataString );
	}

	if( invalidIngredients != '' )			// There are invalid ingredient units
	{
		document.getElementById( "ingLabel" ).innerHTML = 'Ingredients with Invalid Units';
		document.getElementById( "ing" ).value += invalidIngredients;
		return false;
	} 

	var dataString = JSON.stringify({ title: title, prepTime: prepTime, servings: servings, instructions: instructions});

	request = new XMLHttpRequest()
	request.open( "POST", "./phpScripts/addRecipe.php", false );
	request.setRequestHeader( "Content-type", "application/json" );

	request.onreadystatechange = function()
	{
		if( request.readyState == 4 && request.status == 200 )
		{
			var returnData = request.responseText;
			var obj = JSON && JSON.parse( returnData ) || $.parseJSON( returnData );

			if( obj.Result != 'Success' )
			{
				//alert( 'Adding failed' );
				return false;
			}
		}
	}

	request.send( dataString );

	var table = document.getElementById( "ingredientsTable" );

	for( var i = table.rows.length - 1; i > 0; i-- )
	{
		var amount = table.rows[ i ].cells[ 0 ].innerHTML;
		var unit = table.rows[ i ].cells[ 1 ].innerHTML;
		var descriptors = table.rows[ i ].cells[ 4 ].innerHTML;

		var selectIndex = i;

		while( 1 )
		{
			try
			{
				var ingredient = document.getElementById( 'select' + selectIndex ).value;
				//alert( ingredient );
				break;
			}
			catch( err )
			{
				selectIndex++;				// we need to check for other indexes that may have been moved
				
				if( selectIndex == 100 )
				{
					//alert( err.message );
					return false;
				}
			}
		}

		var dataString = JSON.stringify({ title: title,  amount: amount, unit: unit, ingredient: ingredient, descriptors: descriptors });
		//alert( dataString );

		request = new XMLHttpRequest()
		request.open( "POST", "./phpScripts/addRecipeIngredient.php", false );
		request.setRequestHeader( "Content-type", "application/json" );

		request.onreadystatechange = function()
		{
			if( request.readyState == 4 && request.status == 200 )
			{
				var returnData = request.responseText;
				var obj = JSON && JSON.parse( returnData ) || $.parseJSON( returnData );

				if( obj.Result != 'Success' )
				{
					return false;
				}
			}
		}

		request.send( dataString );

	}

	window.location.href = 'http://csevm04.crc.nd.edu:8404/recipe_search.php';

	//setTimeout( function() { window.location.href = 'http://csevm04.crc.nd.edu:8404/recipe_search.php'; }, 2000 );

/*
	dataString = JSON.stringify({ title: title, prepTime: prepTime, servings: servings, ingredients: ingredients, instructions: instructions});
	
	alert( dataString );

	request = new XMLHttpRequest()
	request.open( "POST", "./phpScripts/parseRecipe.php", true )
	request.setRequestHeader( "Content-type", "application/json" )
	
	request.onreadystatechange = function()
	{
		if( request.readyState == 4 && request.status == 200 )
		{
			var returnData = request.responseText;
			alert( returnData );

			var obj = JSON && JSON.parse( returnData ) || $.parseJSON( returnData );

			var table = document.getElementById( "ingredientsTable" );

			for( var i = table.rows.length - 1; i > 1; i-- )
			{
				table.deleteRow( i );				// clear any existing table
			}

			for( i = 1; i < obj.ingredients.length + 1; i++ )
			{
				var row = table.insertRow( i );

				var amount = row.insertCell( 0 );
				var unit = row.insertCell( 1 );
				var ingredient = row.insertCell( 2 );
				var bestMatch = row.insertCell( 3 );
				var descriptors = row.insertCell( 4 );
	
				amount.innerHTML = JSON.stringify( obj.ingredients[i-1].Amount ).toLowerCase();
				unit.innerHTML = JSON.stringify( obj.ingredients[i-1].Unit ).replace( /\"/g, '' ).toLowerCase();
				descriptors.innerHTML = JSON.stringify( obj.ingredients[i-1].Descriptor ).replace( /\"/g, '' ).toLowerCase();

				var ingredientHTMLString = '';

				ingredientHTMLString = '<select id="select' + i + '">';

				for( j = 0; j < obj.ingredients[i-1].Results.length; j++ )
				{
					ingredientHTMLString = ingredientHTMLString + '<option value=' + JSON.stringify( obj.ingredients[i-1].Results[j].ID ) + '>' + JSON.stringify( obj.ingredients[i-1].Results[j].NAME ).replace( /\"/g, '' ) + '</option>';
				}
				
				ingredientHTMLString += '</select>';
				alert( ingredientHTMLString );

				ingredient.innerHTML = JSON.stringify( obj.ingredients[i-1].Ingredient ).replace( /\"/g, '' ).toLowerCase();
				bestMatch.innerHTML = ingredientHTMLString;

				//JSON.stringify( obj.ingredients[i-1].Ingredient ).replace( /\"/g, '' ).toLowerCase();
			}

			document.getElementById( "recipe_name" ).disabled = true;
			document.getElementById( "recipe_time" ).disabled = true;
			document.getElementById( "recipe_servings" ).disabled = true;
			document.getElementById( "direct" ).disabled = true;
			document.getElementById( "directPerm" ).innerHTML = instructions;
			document.getElementById( "submitRecipe" ).innerHTML = 'Submit Recipe';		
	
			$("#recipe_name").fadeOut( function()
			{
				setTimeout( function() 
				{
					$("#recipe_name").fadeIn();
				}, 500 );
			}
			);

			$("#recipe_time").fadeOut( function()
			{
				setTimeout( function() 
				{
					$("#recipe_time").fadeIn();
				}, 500 );
			}
			);

			$("#recipe_servings").fadeOut( function()
			{
				setTimeout( function() 
				{
					$("#recipe_servings").fadeIn();
				}, 500 );
			}
			);

			$("#ingredText").fadeOut( function()
			{
				setTimeout( function() 
				{
					$("#tableContainer").fadeIn();
				}, 500 );
			}
			);

			$("#direct").fadeOut( function()
			{
				setTimeout( function() 
				{
					$("#direct").fadeIn();
				}, 500 );
			}
			);
		}
	}

	request.send( dataString );
*/
}



