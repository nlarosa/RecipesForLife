<?php

// add 'whole' as ingredient unit for those that do not contain a unit
// remove plurality

// 1. Begin by replacing all unit abbreviations with full form
// 2. Search for full form units. If none found, keep unaccounted-for units (ie. package, container, etc)
// 3. If no unaccounted-for units, add 'serving' as default unit
// 4. Split on 'or', keeping the option with accounted-for unit

function parseIngredientBefore( $ingredient )
{
	$ingredient = preg_replace( "/\(/", '( ', $ingredient );
	$ingredient = preg_replace( "/\)/", ' )', $ingredient );

	#$ingredient = $ingredientParts[0]; 

	$ingredient = preg_replace( "/(^|\ )each\ /i", ' ', $ingredient );

	$ingredient = preg_replace( "/bacon/i", 'pork bacon', $ingredient );	
	$ingredient = preg_replace( "/^salt/i", 'salt, table', $ingredient );
	$ingredient = preg_replace( "/ salt/i", ' salt, table', $ingredient );
	$ingredient = preg_replace( "/eggs?/i", 'raw fresh egg', $ingredient );
	//$ingredient = preg_replace( "/ and pepper/i", '', $ingredient );
	//$ingredient = preg_replace( "/onion$/i", 'onions, raw', $ingredient );
	$ingredient = preg_replace( "/ketchup/i", 'catsup', $ingredient );
	//$ingredient = preg_replace( "/all-purpose/i", 'wheat', $ingredient );
	$ingredient = preg_replace( "/white sugar/i", 'granulated sugar', $ingredient );
	$ingredient = preg_replace( "/sugar/i", 'sugars', $ingredient );
	$ingredient = preg_replace( "/apple/i", 'raw apple', $ingredient );
	$ingredient = preg_replace( "/banana/i", 'large banana', $ingredient );
	
	#print_r( $ingredient );

	$words = explode( " ", $ingredient );

	$allUnits = "/(^|\ )((small)|(medium)|(large)|(cans?)|(patt(y|ies)?)|(loafs?)|(fillets?)|(steaks?)|(ribs?)|(drumsticks?)|(thighs?)|(links?)|(franks?)|(medallions?)|(bowls?)|(pieces?)|(orders?)|(portions?)|(slices?)|(servings?)|(containers?)|(packages?)|(cubes?)|(bars?)|(logs?)|(sticks?)|(whole)|(dash(es)?)|(pinch(es)?)|(g(rams?|s?\.?)\ )|(m((ls?\.?)|(illiliters?))?)|(t(sp?n?|bl?(sp?n?)?)?\.?)|(tablespoons?)|(teaspoons?)|((fl(\.|(uid))?\ )?(o((unces?)|(zs?\.?))?))|(handfuls?)|(c(\.|(ups?))?)|(p((ts?\.?)|(ints?))?)|(pounds?)|(lbs?\.?)|(q((ts?\.?)|(uarts?))?)|(l((s?\.?)|(iters?))?)|(gal((s?\.?)|(lons?))?))\ /i";

	$accountedUnits = "/(dash)|(pinch)|(milliliter)|(gram)|(teaspoon)|(tablespoon)|(ounce)|(handful)|(cup)|(pint)|(pound)|(quart)|(liter)|(gallon)/";

	$unaccountedUnits = "/(cans?)|(patt(y|ies)?)|(loafs?)|(fillets?)|(steaks?)|(ribs?)|(drumsticks?)|(thighs?)|(legs?)|(breasts?)|(links?)|(franks?)|(medallions?)|(bowls?)|(pieces?)|(orders?)|(portions?)|(slices?)|(servings?)|(containers?)|(packages?)|(cubes?)|(bars?)|(logs?)|(sticks?)|(whole)/i";

	$lastWord = array_pop( $words );
	
	if( substr( $lastWord, -1 ) == 's' )			// remove pluralities
	{
		$lastWord = rtrim( $lastWord, 's' );
	}
	
	$unitMatch = array();
	$words[] = $lastWord;

	#print_r( $ingredient );

	if( !preg_match_all( $allUnits, $ingredient, $unitMatch ) )		// no unit contained
	{
		if( preg_match( "/(^salt)|(^pepper)/i", $ingredient ) )
		{
			$ingredient = '1 dash ' . $ingredient;
		}
		else
		{
			foreach( array_values( $words ) as $i => $word )
			{
				if( preg_match( "/([0-9]+)|(and)|(,)|(plus)/i", $word ) && !preg_match( "/(inch)|\-/i", $word ) )
				{
					#print_r( 'Matches: ' . $word );
					continue;
				}
				else		// place 'serving after an amount
				{
					$ingredient = implode( " ", array_slice( $words, 0, $i ) ) . ' serving ' . implode( " ", array_slice( $words, $i ) );
					#print_r( $ingredient );
					break;
				}
			}
		}
	}
	else	// convert to standard form available in generalUnit table
	{
		if( preg_match( "/^(dash(es)?)\ /i", $ingredient ) )
		{
			$ingredient = preg_replace( "/^(dash(es)?)\ /i", "1 dash ", $ingredient );
		}
		else if( preg_match( "/\ (dash(es)?)\ /i", $ingredient ) )
		{
			$ingredient = preg_replace( "/\ (dash(es)?)\ /i", " dash ", $ingredient );
		}
		else if( preg_match( "/^(pinch(es)?)\ /i", $ingredient ) )
		{
			$ingredient = preg_replace( "/^(pinch(es)?)\ /i", "1 pinch ", $ingredient );
		}
		else if( preg_match( "/\ (pinch(es)?)\ /i", $ingredient ) )
		{
			$ingredient = preg_replace( "/\ (pinch(es)?)\ /i", " pinch ", $ingredient );		
		}
		else if( preg_match( "/^(m((ls?\.?)|(illiliters?))?)\ /i", $ingredient ) )
		{
			$ingredient = preg_replace( "/^(m((ls?\.?)|(illiliters?))?)\ /i", "1 milliliter ", $ingredient );
		}
		else if( preg_match( "/\ (m((ls?\.?)|(illiliters?))?)\ /i", $ingredient ) )
		{
			$ingredient = preg_replace( "/\ (m((ls?\.?)|(illiliters?))?)\ /i", " milliliter ", $ingredient );
		}
		else if( preg_match( "/^(g(rams?|s?\.?)\ )\ /i", $ingredient ) )
		{
			$ingredient = preg_replace( "/^(g(rams?|s?\.?)\ )\ /i", "1 gram ", $ingredient );
		}
		else if( preg_match( "/\ (g(rams?|s?\.?)\ )\ /i", $ingredient ) )
		{
			$ingredient = preg_replace( "/\ (g(rams?|s?\.?)\ )\ /i", " gram ", $ingredient );
		}
		else if( preg_match( "/^(t(sp?n?)?\.?)\ /", $ingredient ) )
		{
			$ingredient = preg_replace( "/^(t(sp?n?)?\.?)\ /", "1 teaspoon ", $ingredient );
		}
		else if( preg_match( "/\ (t(sp?n?)?\.?)\ /", $ingredient ) )
		{
			$ingredient = preg_replace( "/\ (t(sp?n?)?\.?)\ /", " teaspoon ", $ingredient );
		}
		else if( preg_match( "/^(tsp?n?\.?)\ /i", $ingredient ) )
		{
			$ingredient = preg_replace( "/^(tsp?n?\.?)\ /i", "1 teaspoon ", $ingredient );
		}
		else if( preg_match( "/\ (tsp?n?\.?)\ /i", $ingredient ) )
		{
			$ingredient = preg_replace( "/\ (tsp?n?\.?)\ /i", " teaspoon ", $ingredient );
		}
		else if( preg_match( "/^(tbl?(sp?n?)?\.?)\ /i", $ingredient ) )
		{
			$ingredient = preg_replace( "/^(tbl?(sp?n?)?\.?)\ /i", "1 tablespoon ", $ingredient );
		}
		else if( preg_match( "/\ (tbl?(sp?n?)?\.?)\ /i", $ingredient ) )
		{
			$ingredient = preg_replace( "/\ (tbl?(sp?n?)?\.?)\ /i", " tablespoon ", $ingredient );
		}
		else if( preg_match( "/^(T(bl?(sp?n?)?)?\.?)\ /", $ingredient ) )
		{
			$ingredient = preg_replace( "/^(T(bl?(sp?n?)?)?\.?)\ /", "1 tablespoon ", $ingredient );
		}
		else if( preg_match( "/\ (T(bl?(sp?n?)?)?\.?)\ /", $ingredient ) )
		{
			$ingredient = preg_replace( "/\ (T(bl?(sp?n?)?)?\.?)\ /", " tablespoon ", $ingredient );
		}
		else if( preg_match( "/^((fl(\.|(uid))?\ )?(o((unces?)|(zs?\.?))?))\ /i", $ingredient ) )
		{
			$ingredient = preg_replace( "/^((fl(\.|(uid))?\ )?(o((unces?)|(zs?\.?))?))\ /i", "1 ounce ", $ingredient );
		}
		else if( preg_match( "/\ ((fl(\.|(uid))?\ )?(o((unces?)|(zs?\.?))?))\ /i", $ingredient ) )
		{
			$ingredient = preg_replace( "/\ ((fl(\.|(uid))?\ )?(o((unces?)|(zs?\.?))?))\ /i", " ounce ", $ingredient );
		}
		else if( preg_match( "/^(handfuls?)\ /i", $ingredient ) )
		{
			$ingredient = preg_replace( "/^(handfuls?)\ /i", "1 handful ", $ingredient );
		}
		else if( preg_match( "/\ (handfuls?)\ /i", $ingredient ) )
		{
			$ingredient = preg_replace( "/\ (handfuls?)\ /i", " handful ", $ingredient );
		}
		else if( preg_match( "/^(c(\.|(ups?))?)\ /i", $ingredient ) )
		{
			$ingredient = preg_replace( "/^(c(\.|(ups?))?)\ /i", "1 cup ", $ingredient );
		}
		else if( preg_match( "/\ (c(\.|(ups?))?)\ /i", $ingredient ) )
		{
			$ingredient = preg_replace( "/\ (c(\.|(ups?))?)\ /i", " cup ", $ingredient );
		}	
		else if( preg_match( "/^(p((ts?\.?)|(ints?))?)\ /i", $ingredient ) )
		{
			$ingredient = preg_replace( "/^(p((ts?\.?)|(ints?))?)\ /i", "1 pint ", $ingredient );
		}
		else if( preg_match( "/\ (p((ts?\.?)|(ints?))?)\ /i", $ingredient ) )
		{
			$ingredient = preg_replace( "/\ (p((ts?\.?)|(ints?))?)\ /i", " pint ", $ingredient );
		}
		else if( preg_match( "/^((pounds?)|(lbs?\.?))\ /i", $ingredient ) )
		{
			$ingredient = preg_replace( "/^((pounds?)|(lbs?\.?))\ /i", "1 pound ", $ingredient );
		}
		else if( preg_match( "/\ ((pounds?)|(lbs?\.?))\ /i", $ingredient ) )
		{
			$ingredient = preg_replace( "/\ ((pounds?)|(lbs?\.?))\ /i", " pound ", $ingredient );
		}
		else if( preg_match( "/^(q((ts?\.?)|(uarts?))?)\ /i", $ingredient ) )
		{
			$ingredient = preg_replace( "/^(q((ts?\.?)|(uarts?))?)\ /i", "1 quart ", $ingredient );
		}
		else if( preg_match( "/\ (q((ts?\.?)|(uarts?))?)\ /i", $ingredient ) )
		{
			$ingredient = preg_replace( "/\ (q((ts?\.?)|(uarts?))?)\ /i", " quart ", $ingredient );
		}
		else if( preg_match( "/^(l((s?\.?)|(iters?))?)\ /i", $ingredient ) )
		{
			$ingredient = preg_replace( "/^(l((s?\.?)|(iters?))?)\ /i", "1 liter ", $ingredient );
		}
		else if( preg_match( "/\ (l((s?\.?)|(iters?))?)\ /i", $ingredient ) )
		{
			$ingredient = preg_replace( "/\ (l((s?\.?)|(iters?))?)\ /i", " liter ", $ingredient );
		}
		else if( preg_match( "/^(gal((s?\.?)|(lons?))?)\ /i", $ingredient ) )
		{
			$ingredient = preg_replace( "/^(gal((s?\.?)|(lons?))?)\ /i", "1 gallon ", $ingredient );
		}
		else if( preg_match( "/\ (gal((s?\.?)|(lons?))?)\ /i", $ingredient ) )
		{
			$ingredient = preg_replace( "/\ (gal((s?\.?)|(lons?))?)\ /i", " gallon ", $ingredient );
		}

		// replacements have been made - we either have accounted-for units or not

		$ingredientParts = preg_split( "/\ or\ /i", $ingredient );	// split on OR and prioritize side with accounted-for units

		foreach( $ingredientParts as $part )
		{
			if( preg_match( $accountedUnits, $part ) )		// keep this side
			{
				$ingredient = $part;
				break;
			}
		}

		#print_r( $ingredient );

		$parenMatches = array();
		$unaccountMatches = array();
		preg_match_all( '/\(([A-Za-z0-9 ]+?)\)/', $ingredient, $parenMatches );
		preg_match_all( $unaccountedUnits, $ingredient, $unaccountMatches );		//  remove all unaccounted units if possible

		array_filter( $parenMatches );
		array_filter( $unaccountMatches );

		#print_r( $parenMatches );

		foreach( array_values( $parenMatches[1] ) as $i => $paren )
		{
			$paren = trim( $paren );
			#print_r( $paren );

			if( preg_match( $accountedUnits, $paren ) )
			{
				try
				{
					#print_r( 'Replacing unaccounted-for unit ' . $unaccountMatches[0][0] );
					
					$splits = array();
					$splits = explode( $paren, $ingredient );

					for( $j = 0; $j < count( $splits ); $j++ )
					{
						$split = array_pop( $splits );

						$split = preg_replace( "/" . $unaccountMatches[0][0] . "s?/", $paren, $split );
						#print_r( $split );

						array_unshift( $splits, $split );
					}

					$ingredient = implode( '', $splits );
					#print_r( $splits );
				}
				catch( Exception $e )
				{
					#print_r( $e );
				}
			}
			else
			{
				#print_r( 'Parentheses around: ' . $parenMatches[0][$i] );
			}
		}

		if( preg_match( "/(^salt)|(^pepper)/i", $ingredient ) )
		{
			$ingredient = '1 dash ' . $ingredient;
		}
	}

	$ingredient = preg_replace( "/[(|\{|\}|)|,]/", '', $ingredient );	// finally, remove all parenthese, brackets, commas

	//print_r( $newIngredient );
	#print_r( $ingredient );

	return $ingredient;
}

#parseIngredientBefore( '1 cup whole-grain pastry flour or 1/2 cup each whole-wheat and all-purpose flours' );
#parseIngredientBefore( '2 tb Sauce (boiled)' );

