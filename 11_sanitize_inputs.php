<?php

// because we are echoing out the results of the form inputs here, we need to protect against someone simply submitting a script tag with harmful JavaScript in it because it will be exectuted immediately on our page
// we can use htmlspecialchars to convert the input to a string
/* if(isset($_POST['submit'])) {
    $name_str = htmlspecialchars($_POST['name']); 
    $age_str = htmlspecialchars($_POST['age']);
    
    echo 'Your name is ' . $name_str . '.' . '<br>'; 
    echo 'You are ' . $age_str . ' years old.' . '<br>';
} */

// another way to accomplish this is to use filter_input()
if(isset($_POST['submit'])) {
    $name_str = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS); 
    $age_str = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);;
    
    echo 'Your name is ' . $name_str . '.' . '<br>'; 
    echo 'You are ' . $age_str . ' years old.' . '<br>';
}

// yet another way is filter_var() (similar syntax to filter_input())
?>

<!-- note that we also wrap the action in htmlspecialchars for the same reason -->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>