<?php
/* PHP Data Types 
--> very similar to JavaScript datatypes
    -String (single or double quotes both work)
    -Integer (whole numbers)
    -Float (decimals)
    -Boolean
    -Array
    -Object (a class - OOP)
    -NULL
    -Resource (special variable --> holds a resource)

--> Rules for PHP variables
    -prefix with $
    -must begin with a letter or underscore
    -can only contain alphanumeric characters and underscore
    -case sensitive: $foo and $FOO are different variables
*/

// variable declarations
$name = "Becca";
$age = 32;
$cash_on_hand = 24.13;
$has_kids = false;

// printing variables
// echo $name;
// echo $age; 
// echo $cash_on_hand;
// var_dump($has_kids);

// concatenation: can use JavaScript template literal but with double quotes...
// echo "${name} is ${age} years old.";
// concatenation: can also use periods...
// echo $name . " is " . $age . " years old.";

// arithmetic
// echo $age + $age; //prints value, not concatenation
// can use all operations and modulus operator %

// $new_num = "5" + "6"; //will perform arithmetic even with string values
// var_dump($new_num)

// Constants - Can NEVER CHANGE VALUE
// Denoted with all caps; use define keyword
define("BEST_DOG", "Bill");
echo BEST_DOG;
?>