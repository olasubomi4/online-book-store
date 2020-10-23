<?php
require_once "./template/headerlogin.php";
?>
<?php

$con = mysqli_connect("localhost", "root", "", "group");
if (mysqli_connect_errno($con)) {
    echo "MySql Error: " . mysqli_connect_error();
}
if (($_POST['username'] != "admin") || ($_POST['password'] != 123)) {
    
    $query = mysqli_query($con, "SELECT * FROM info WHERE username='$_POST[username]' && password='$_POST[password]'");
    $count = mysqli_num_rows($query);
    $row = mysqli_fetch_array($query);
    if ($count == 1) {

            header("location:home.php");
        
        
    } else {

        header("location:signin.php?signin_ser=pass&username=$username");
    }
} else {
    header("location:adminhome.php?");
}
mysqli_close($con);
?>
</body>

</html>