
<?php


$conn = mysqli_connect('localhost', 'root', '', 'group');

$sql = "SELECT * FROM cs";
$result=mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);






// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];
    // fetch file to download from database
    $sql="SELECT * FROM cs WHERE book_isbn=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $fileFullPath = $_SERVER['DOCUMENT_ROOT'] . 'uploads/' .$fileName;

  

        if (file_exists($fileFullPath)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename='.basename($fileFullPath));
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
            header('Pragma: public');
            header('Content-Length: ' . filesize($fileFullPath));
            ob_clean();
            flush();
            readfile($fileFullPath);
            exit;

        // Now update downloads count
        $newCount=$file['downloads']+1;
        $updateQuery= "UPDATE cs SET downloads=$newCount WHERE book_isbn=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }
}

