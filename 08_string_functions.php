<?php

    $string = "I'm a string! I'm a string!";

    // Find the length of a string
    echo strlen($string) . '<br>';

    // Find the position of the first occurence of a substring or character within a string
    echo strpos($string, 'i') . '<br>';

    // Find the position of the last occurence of a substring or character within a string
    echo strrpos($string, 'i') . '<br>';

    // Reverse a string
    echo strrev($string) . '<br>';

    // Convert all characters to lowercase
    echo strtolower($string) . '<br>';

    // Convert all characters to uppercase
    echo strtoupper($string) . '<br>';

    // Uppercase the first character of each word
    echo ucwords($string) . '<br>';

    // Replace a span within a string -- will not mutate original string
    echo str_replace("I'm", "You're", $string) . '<br>';

    // Return portion of a string specified by the offset and length
    echo substr($string, 0, 5) . '<br>'; //returns the range of characters provided, second provided index excluded
    echo substr($string, 5) . '<br>'; //returns everything after the index provided

    // Check if a string starts or ends with a given substring
    var_dump(str_starts_with($string, "I'm"));
    var_dump(str_ends_with($string, "I'm"));


    $string2 = '<script>alert("Hello!")</script>';
    //echo $string2; //will run the script tag
    echo htmlspecialchars($string); //will turn the script tag into a string and render it as such

    // Formatted strings - good for forms or when users provide data
    // Specifiers are denoted with %char and formatted accordingly
    /* %s = string, %d = integer, %f = float */
    printf('%s likes to %s', 'Becca', 'code in PHP');
    printf('1+1=%d', 1+1);