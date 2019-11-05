<?php
/* !Variable Functions! */

/*
function answer(){
    return 42;
}

function add_up($a, $b){
    return $a + $b;
}

//Pass function string into variable 
$func = 'answer';

//Use variable to call answer() function
//Echo 42
echo $func();

//Pass function string into variable
$funct = 'add_up';

//Pass arguments to function variable
echo $funct(2,2);
*/

/* !Anonymous Functions! */

/*
$name = 'Mike';

//Use a variable outside of the function scope inside of the function
$greet = function() use($name){
    echo "Hello, $name!";
};

$greet();
*/

/* !PHP DOCS! */

//String length example
//PHP Docs: strlen( string $string) :int
/*
$str = 'abc';

echo strlen($str);
/*

/* PHP String Functions */

//Use strlen function
$phrase = "We only hit what we aim for";

$len = strlen($phrase);

///echo $len;

//Use substing function to display char 0 > 5
//echo substr($phrase, 0, 5);

//Use string position function to find a particular occurence within a string
//Returns a string position starting at 0
$start = strpos($phrase, 'hit');
//echo string starting at position 8 from strpos 
echo substr($phrase, $start);


?>