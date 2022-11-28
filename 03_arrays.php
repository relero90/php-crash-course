<?php
    /* Simple Arrays - two ways to declare ([] or array()) */
    $numbers = [0, 12, 43, 7];
    $fruits = array("apple", "orange", "mango");

    // print_r($fruits); //prints nicely
    // var_dump($numbers); //good for debugging --> shows datatype (array), length (4), and index, datatype, and value for each array member
    // echo $fruits[1]; //prints "orange"


    /* Associative Arrays - very similar to JavaScript objects - set your own index values with numbers or strings */
    $colors = [
        'red' => '#9A031E',
        'orange' => '#E36414',
        'ochre' => '#FB8B24',
        'teal' => '#0F4C5C',
        'plum' => '#5F0F40',
    ];

    // echo $colors['plum'];

    /* Multi-Dimensional Arrays - like JavaScript matrices - arrays of arrays */
    $people = [
        [
            'first_name' => 'Wednesday',
            'last_name' => 'Addams',
            'quote' => 'You severely underestimate my apathy.'
        ],
        [
            'first_name' => 'Morticia',
            'last_name' => 'Addams',
            'quote' => 'Normal is an illusion. What is normal for the spider is chaos for they fly.'
        ],
        [
            'first_name' => 'Gomez',
            'last_name' => 'Addams',
            'quote' => 'You are the only cactus in the garden of my life.'
        ],
    ];

    // echo $people[0]['quote'] . "  -" . $people[0]['first_name'] . " " . $people[0]['last_name'];

    // common output from APIs
    var_dump(json_encode($people));