<?php
/* Conditions - same as JavaScript */
/*
    < Less than
    <= Less than or equal to
    > Greater than
    >= Greater than or equal to
    == Equal
    === True equal (value & data type)
    != Not equal
    !== Not true equal (value & data type)
*/

/* If Syntax - same as JavaScript */
/*
if(condition) {
    code block to be executed
} 

can use else, elseif (no space between)
*/

// $fav_food = 'spicy';
// if ($fav_food === 'spicy') {
//     echo "you know what's up";
// } else {
//     echo "oh well";
// };

// $time = date("H"); //returns hour in military format
// if ($time < 12) {
//     echo 'Good Morning!';
// } elseif ($time < 17 ) {
//     echo 'Good Afternoon';
// } else {
//     echo 'Good Evening';
// };

// $posts = [];
// if(!empty($posts)) {
//     echo $posts[0];
// } else {
//     echo 'no posts exist';
// };

/* Ternary Operator */
// echo !empty($posts) ? $posts[0] : 'no posts exist';

// $first_post = !empty($posts) ? $posts[0] : 'waiting for first post';
// echo $first_post;

/* Coalescing Operator */
// like || double pipe in JavaScript
// $first_post = $posts[0] ?? null;
// echo $first_post;

/* Switch Statements */
$fav_color = 'red';

switch($fav_color) {
    case 'red':
        echo 'Your favorite color is red.';
        break;
    case 'blue':
        echo 'Your favorite color is blue.';
        break;
    default:
        "I don't know what your favorite color is.";
        break;
};