<?php
    $menu = ['albondigas', 'pozole', 'caldo de queso'];

    // Get length --> count($array)

    // Search array --> in_array('value we're looking for', $array) --> returns boolean

    // Add to end of array --> $array[] = 'value to add';
    // Add to end of array --> array_push($array, 'value to add')

    // Add to beginning of array --> array_unshift($array, 'value to add')

    // Remove from array --> array_pop($array) --> removes last item in array
    // Remove from array --> array_shift($array) --> removes first item in array
    // Remove from array --> unset($array[index]) --> removes item at a specific index position as well as that index value (if I used unset($menu[0]) --> output = [ 1: 'pozole', 2: 'caldo de queso'] *0 index is gone)

    // Split array into parts --> $chunked_array = array_chunk($fruits, 2) --> will divide array into chunks of 2 at each index position (last one may be a chunk of 1 if array has an odd number of members)

    $arr1 = [1,2,3];
    $arr2 = [4,5,6];

    // Merge arrays -->
    $arr3 = array_merge($arr1, $arr2);
    $arr4 = [...$arr1, ...$arr2];

    // Merge arrays using one as keys and the other as values -->
    $a = ['green', 'red', 'yellow'];
    $b = ['avocado', 'tomato', 'banana'];
    $c = array_combine($a, $b);
    print_r($c); // basically builds the equivalent of a JavaScript object

    $keys = array_keys($c);
    print_r($keys);

    $flipped = array_flip($c);
    print_r($flipped); //flips keys to values and values to keys

    $numbers = range(0,20); //creates an array of numbers in the given range
    print_r($numbers);

    // Map function (just like JavaScript map)
    $new_numbers = array_map(function($number) {
        return "Number = ${number}";
    }, $numbers);

    print_r($new_numbers);

    // Filter function (just like JavaScript filter)
    $lessThan10 = array_filter($numbers, fn($number) => 
        $number <= 10);

    print_r($lessThan10);

    // Reduce - reduces an array to a single value using a function
    // array_reduce($arrayToReduce, fn($lastNum, $currentNum) => function body)
    $sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
    var_dump($sum);