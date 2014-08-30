<?php # vim:ft=php
include 'jlex.php';

%%

%{
//<YYINITIAL> L? \" (\\.|[^\\\"])* \"	{ $this->createToken(CParser::TK_STRING_LITERAL); }
	/* blah */
%}

%function nextToken
%line
%char
%ignorecase
%state COMMENTS A NUMERATOR DENOMINATOR HAVE_AMOUNT HAVE_UNIT HAVE_INGREDIENT

ALPHA=[A-Za-z_]
DIGIT=[0-9]
NON-ZERO=[1-9]({DIGIT})*
ALPHA_NUMERIC={ALPHA}|{DIGIT}
IDENT={ALPHA}({ALPHA_NUMERIC})*
NUMBER=(({DIGIT})*)\.?(({DIGIT})+)
WHITE_SPACE=([\ \n\r\t\f])+
NON_NEWLINE_WHITE_SPACE=([\ \r\t\f\(\)\-])+
NON_SPACE_NEWLINE_WHITE_SPACE=([\r\t\f\(\)\-])+

HALF=hal(f|(ves))
THIRD=thirds?
FOURTH=(fourths?)|(quarters?)
FIFTH=fifths?
SIXTH=sixths?
SEVENTH=sevenths?
EIGHTH=eighths?
NINTH=nineths?
TENTH=tenths?

DOZEN=doz(\.|(en))?

UNIT=((small)|(medium)|(large)|(patt(y|ies)?)|(loafs?)|(fillets?)|(steaks?)|(ribs?)|(drumsticks?)|(thighs?)|(links?)|(franks?)|(medallions?)|(bowls?)|(pieces?)|(orders?)|(portions?)|(slices?)|(servings?)|(containers?)|(packages?)|(cubes?)|(bars?)|(logs?)|(sticks?)|(whole)|(dash(es)?)|(pinch(es)?)|(m((ls?\.)|(illiliters?))?)|(t(sp?n?|bl?(sp?n?)?)?\.?)|(tablespoons?)|(teaspoons?)|((fl(\.|(uid))?\ )?(o((unces?)|(zs?\.?))?))|(handfuls?)|(c(\.|(ups?))?)|(p((ts?\.?)|(ints?))?)|(pounds?)|(lbs?\.?)|(q((ts?\.?)|(uarts?))?)|(l((s?\.?)|(iters?))?)|(gal((s?\.?)|(lons?))?))[\ ]

INGREDIENT=({ALPHA_NUMERIC})+

DESCRIPTOR=(cooked)|(dry)|(crumb(s|led))|(individual)|(fluid)|(whipped)|(sifted)|(cube(d|s))|(snack\-size)|(thin)|(thick)|(regular)|(shelled)|(in\ shell)|(hulled)|(drained)|(whole)|(leaves)|(crumbled)|(slivered)|(shredded)|(lightly)|(beaten)|(unsalted)|(finely)|(thinly)|(sliced)||(coarsely)|(chopped)|(diced)|(minced)|(separated)|(divided)|(ground)|(packed)

%%

<YYINITIAL> {NUMBER} 		{ $this->yybegin( self::NUMERATOR ); return $this->createToken(); }
<YYINITIAL> {DESCRIPTOR} 	{ $this->yybegin( self::HAVE_UNIT ); return $this->createToken('Descriptor'); }
<YYINITIAL> {UNIT}		{ $this->yybegin( self::HAVE_UNIT ); return $this->createToken('Unit'); }

<YYINITIAL> {WHITE_SPACE} { }

<YYINITIAL> "//"	{ $this->yybegin( self::COMMENTS ); return $this->createToken('Comment'); }

<YYINITIAL> {HALF}	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.5); }
<YYINITIAL> {THIRD}	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.33); }
<YYINITIAL> {FOURTH}	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.25); }
<YYINITIAL> {FIFTH}	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.2); }
<YYINITIAL> {SIXTH}	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.166); }
<YYINITIAL> {SEVENTH}	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.1429); }
<YYINITIAL> {EIGHTH}	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.125); }
<YYINITIAL> {NINTH}	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.11); }
<YYINITIAL> {TENTH}	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.1); }

<YYINITIAL> "a"		{ $this->yybegin( self::A ); return $this->createToken(1); }
<YYINITIAL> "one" 	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(1); } 
<YYINITIAL> "two" 	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(2); } 
<YYINITIAL> "three" 	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(3); } 
<YYINITIAL> "four" 	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(4); } 
<YYINITIAL> "five" 	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(5); } 
<YYINITIAL> "six" 	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(6); } 
<YYINITIAL> "seven" 	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(7); } 
<YYINITIAL> "eight" 	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(8); } 
<YYINITIAL> "nine" 	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(9); } 
<YYINITIAL> "ten" 	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(10); } 
<YYINITIAL> "eleven" 	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(11); } 
<YYINITIAL> "dozen"	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(12); }
<YYINITIAL> "twelve" 	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(12); } 
<YYINITIAL> "thirteen" 	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(13); } 
<YYINITIAL> "fourteen" 	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(14); } 
<YYINITIAL> "fifteen" 	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(15); } 
<YYINITIAL> "sixteen" 	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(16); } 
<YYINITIAL> "seventeen" { $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(17); } 
<YYINITIAL> "eighteen" 	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(18); } 
<YYINITIAL> "ninteen" 	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(19); } 
<YYINITIAL> "twenty" 	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(20); } 

<A> {NON_NEWLINE_WHITE_SPACE} 	{ }
<A> "and"			{ }
<A> {UNIT} 			{ $this->yybegin( self::HAVE_UNIT ); return $this->createToken('Unit'); } 

<A> {HALF}	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.5); }
<A> {THIRD}	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.33); }
<A> {FOURTH}	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.25); }
<A> {FIFTH}	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.2); }
<A> {SIXTH}	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.166); }
<A> {SEVENTH}	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.1429); }
<A> {EIGHTH}	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.125); }
<A> {NINTH}	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.11); }
<A> {TENTH}	{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.1); }

<NUMERATOR> {NON_NEWLINE_WHITE_SPACE} 	{ }
<NUMERATOR> {NUMBER}			{ $this->yybegin( self::NUMERATOR ); return $this->createToken(); }
<NUMERATOR> "and"			{ $this->yybegin( self::YYINITIAL ); return $this->createToken('Add'); }
<NUMERATOR> "/"				{ $this->yybegin( self::DENOMINATOR ); return $this->createToken('Fraction'); }
<NUMERATOR> {UNIT} 			{ $this->yybegin( self::HAVE_UNIT ); return $this->createToken('Unit'); }

<DENOMINATOR> {NON-ZERO}		{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(); }

<HAVE_AMOUNT> {NON_NEWLINE_WHITE_SPACE} 	{ }
<HAVE_AMOUNT> "-"				{ }
<HAVE_AMOUNT> "and"				{ }
<HAVE_AMOUNT> "&"				{ }
<HAVE_AMOUNT> ","				{ }
<HAVE_AMOUNT> "plus"				{ }
<HAVE_AMOUNT> "of"				{ $this->yybegin( self::HAVE_UNIT ); }
<HAVE_AMOUNT> {DOZEN}				{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(12); }
<HAVE_AMOUNT> {UNIT}				{ $this->yybegin( self::HAVE_UNIT ); return $this->createToken('Unit'); }

<HAVE_UNIT> {NON_NEWLINE_WHITE_SPACE}		{ }
<HAVE_UNIT> "of"				{ return $this->createToken(); }
<HAVE_UNIT> "and"				{ $this->yybegin( self::YYINITIAL ); return $this->createToken('Add'); }
<HAVE_UNIT> "plus"				{ $this->yybegin( self::YYINITIAL ); return $this->createToken('Add'); }
<HAVE_UNIT> {DESCRIPTOR}			{ return $this->createToken('Descriptor'); }
<HAVE_UNIT> {INGREDIENT}			{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }

<HAVE_INGREDIENT> {NON_NEWLINE_WHITE_SPACE}	{ }
<HAVE_INGREDIENT> ","				{ }
<HAVE_INGREDIENT> {DESCRIPTOR}			{ return $this->createToken('Descriptor'); }
<HAVE_INGREDIENT> {INGREDIENT}			{ return $this->createToken('Ingredient'); }
<HAVE_INGREDIENT> [\n]				{ $this->yybegin( self::YYINITIAL ); return $this->createToken('Done'); }

<COMMENTS> [^\n] {
}
<COMMENTS> [\n] {
	$this->yybegin(self::YYINITIAL);
	return $this->createToken('Done');
}
<YYINITIAL> . {
	  throw new Exception("bah!");
}
