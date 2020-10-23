<?php

$delete =$_POST['delete'];

 $host = "localhost";
 $dbusername = "root";
 $dbpassword ="";
 $dbname = "group";
 $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM info WHERE ID ='$delete'";

if (mysqli_query($conn, $sql)) {
    header("location:delete.php?delete=pass&username=$username");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>