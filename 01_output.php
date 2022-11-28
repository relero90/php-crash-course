<?php 
// single line comments get double forward slash
/* multi-line
comments can be wrapped with
a slash astericks */

// echo - output strings, numbers, html, etc --> can output multiple values
echo "Echo", "Hello PHP", 12;

// print - works just like echo but can only output a single value
print "Print gives only one value";

// print_r() - function notation - print single values and arrays
print_r([1,2,3,4,5]);

// var_dump() - returns more info like data type and length
var_dump("Hello var dump");

// var_export() - similar to var_dump() --> outputs a string representation of a variable
var_export("Export the quotes too");
?>
