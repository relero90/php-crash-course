<?php
    /* Syntax is similar to JavaScript function syntax */
    /* Global and local scope works the same way with one exception: */
    
    //global variable declaration:
    $glob_var = 10;
    function registerUser () {
        //to use global variable here, need global keyword:
        global $glob_var;
        echo 'User registered!' . '<br>';
        echo $glob_var . '<br>';
    }

    registerUser();

    /* Parameters and Arguments */
    function printEmail($email) { 
        echo $email . '<br>';
    }

    printEmail('me@mail.com');

    function sum($num1, $num2) {
        return $num1 + $num2;
    };

    echo sum(5, 7) . '<br>';
