<?php

session_start();

$count = 0;
// connecto database

$title = "Index";
require_once "./template/headerindex.php";
require_once "./functions/database_functions.php";
$conn = db_connect();

?>
<div class="error">
    <p> You Have to create an account to download books</p>
    <form class="nav-link" action="signin.php">
        <input type="submit" value="Log in" class="btn btn-outline-primary">
    </form>
    <form class="nav-link" action="signup.php">
        <input type="submit" value="Signup" class="btn btn-outline-primary">
    </form>
    <?php
    require_once "./template/footer.php";
    ?>