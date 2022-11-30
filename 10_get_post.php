<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
  $_GET can be used for URLs and forms - it will display your data in the URL (not ideal for forms and login because it is not secure) - GET in forms might be okay if you are just searching for a term etc
  $_POST can only be used for forms - will not display in the URL (much more secure)
*/
// echo 'Your name is ' . $_GET['name'] . '.' . '<br>'; 
// echo 'You are ' . $_GET['age'] . ' years old.' . '<br>';

// prevent errors from displaying - only echo if submit is set
if(isset($_POST['submit'])) {
    echo 'Your name is ' . $_POST['name'] . '.' . '<br>'; 
    echo 'You are ' . $_POST['age'] . ' years old.' . '<br>';
}
?>

<!-- anchor tag with href returning current file directory path -->
<!-- added attributes to the query string: name and age -->
<!-- these attributes can then be called for inside the PHP tag above -->
<!-- <a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Becca&age=32">Link to Get</a>  -->

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
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