<?php

session_start();

$title = "Add new book";
require "./template/headeradmin.php";


?>


<?php


$conn= mysqli_connect('localhost', 'root', '', 'group');

$sql= "SELECT * FROM se";
$result= mysqli_query($conn, $sql);

$files= mysqli_fetch_all($result, MYSQLI_ASSOC);


if (isset($_GET['book_isbn'])) {
    $book_isbn= $_GET['book_isbn'];
    $conn = mysqli_connect('localhost', 'root', '', 'group');
    // fetch file to download from database
    $sql="SELECT name,downloads FROM se WHERE book_isbn = '$book_isbn'";
    $result=mysqli_query($conn,$sql);

    $file = mysqli_fetch_assoc($result);
    $filepath='uploads/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/'.$file['name']));
        readfile('uploads/'.$file['name']);
    

    $newCount= $file['downloads'] + 1;
    $updateQuery="UPDATE se SET downloads=$newCount WHERE book_isbn='$book_isbn'";
    mysqli_query($conn, $updateQuery);
    exit;
}



}

?>