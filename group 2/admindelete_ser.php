<?php



 $host = "localhost";
 $dbusername = "root";
 $dbpassword ="";
 $dbname = "group";
 $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
$course = $_POST['course'];
$book_title = $_POST['book_title'];

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($course == "cs") {

    $sql = "DELETE FROM cs WHERE book_title ='$book_title'";

    if (mysqli_query($conn, $sql)) {
        header("location:admindelete.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
if ($course == "ct") {

    $sql = "DELETE FROM ct WHERE book_title ='$book_title'";

    if (mysqli_query($conn, $sql)) {
        header("location:admindelete.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
if ($course == "cis") {

    $sql = "DELETE FROM cis WHERE book_title ='$book_title'";

    if (mysqli_query($conn, $sql)) {
        header("location:admindelete.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
if ($course == "se") {

    $sql = "DELETE FROM se WHERE book_title ='$book_title'";

    if (mysqli_query($conn, $sql)) {
        header("location:admindelete.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}





mysqli_close($conn);
?>