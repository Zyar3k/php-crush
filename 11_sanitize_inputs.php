<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

if (isset($_POST['submit'])) {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

    echo $name;
    echo $age;
}
?>


<br><br>

<!-- Pass data through a form -->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
        <label>Name: </label>
        <input type="text" name="name">
    </div>
    <br>
    <div>
        <label>Age: </label>
        <input type="age" name="age">
    </div>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>