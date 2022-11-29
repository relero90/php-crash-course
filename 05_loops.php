<?php

/* Loops in PHP - Just like loops in JavaScript */

/* -----For Loop Syntax----- */
    /* for (initialize; condition; increment) {
        code block to be executed while condition is truthy
    } */

for ($x = 0; $x <= 10; $x++) {
    echo 'Number ' . $x . '<br>';
};

$cats = ['Paco', 'Goby', 'Kitten', 'Tom'];

for ($y = 0; $y < count($cats); $y++) {
    echo $cats[$y] . ' is a flying kidgeon.' . '<br>';
};

/* -----While Loop Syntax----- */
    /* while (condition) {
        code block to be executed while condition is truthy
    } */

$z = 0;
while ($z < count($cats)) {
    echo $cats[$z] . ' is a teeny beastie.' . '<br>';
    $z++;
}

/* -----Do...While Loop Syntax----- */
// runs the code block once whether the condition is truthy or not because the condition is checked after the code block
$dogs = ['Bill', 'Beatrix', 'Zion', 'Rocky', 'Clover'];
$a = 0;
do {
    echo $dogs[$a] . ' loves you.' . '<br>';
    $a++;
} while ($a < count($dogs));

/* -----Foreach Loop Syntax----- */
/* foreach ($array as $value) {
    //code to be executed
} */

foreach ($dogs as $dog) {
    echo $dog . ' is a good dog.' . '<br>';
};

// to access the index value...
foreach ($dogs as $index => $dog) {
    echo $index . ' -- ' . $dog . '<br>';
};

// to access key/value pairs in a multi-dimensional array
$person = [
    'first_name' => 'Wednesday',
    'last_name' => 'Addams',
    'quote' => 'You severely underestimate my apathy.'
];

foreach ($person as $key => $value) {
    echo $key . ' -- ' . $value . '<br>';
};