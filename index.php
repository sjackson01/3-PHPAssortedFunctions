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

/* !PHP String Functions! */

/*
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
*/

/* !Array Functions! */

//Create array
$names = array(
    //Key     //Value 
    'Mike' => 'Frog',
    'Chris' => 'Teacher',
    'Hampton' => 'Teacher',
);

var_dump(array_keys($names));
/*
Output 
array(3) {  //Three Items
    [0]=> string(4) "Mike" //Key of $name as value of new array 
    [1]=> string(5) "Chris" //Key of $name as value of new array 
    [2]=> string(7) "Hampton" //Key of $name as value of new array 
}
*/


//Array keys creates new array wich previous arrays keys as values
//Foreach assigns each value to the $name variable
foreach (array_keys($names) as $name){
    echo "Hello, $name <br />";
}


//Create function to "walk through" with $value and $key arguments
function print_info($value, $key){
    echo "$key is a $value <br />";
}

//Pass in array and string verions of function name 
array_walk($names, 'print_info')

?>