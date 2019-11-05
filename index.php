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

$str = 'abc';

echo strlen($str);



?>