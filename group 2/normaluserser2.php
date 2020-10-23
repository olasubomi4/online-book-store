<?php
session_start();

$title = "Add new book";
require "./template/headeradmin.php";
require "./functions/database_functions.php";
$conn = db_connect();

if (isset($_POST['add'])) {
	$isbn = trim($_POST['isbn']);
	$isbn = mysqli_real_escape_string($conn, $isbn);

	$title = trim($_POST['title']);
	$title = mysqli_real_escape_string($conn, $title);

	$author = trim($_POST['author']);
	$author = mysqli_real_escape_string($conn, $author);

	$descr = trim($_POST['descr']);
	$descr = mysqli_real_escape_string($conn, $descr);

	$price = floatval(trim($_POST['price']));
	$price = mysqli_real_escape_string($conn, $price);

	$publisher = trim($_POST['publisher']);
	$publisher = mysqli_real_escape_string($conn, $publisher);

	$course = $_POST['course'];
	
	// add image

	if (isset($_FILES['image']) && $_FILES['image']['name'] != "") {
		$image = $_FILES['image']['name'];
		$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);
		$uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . "bootstrap/img/";
		$uploadDirectory .= $image;
		move_uploaded_file($_FILES['image']['tmp_name'], $uploadDirectory);
	}

	// name of the uploaded file
	// name of the uploaded file
	$filename = $_FILES['myfile']['name'];

	// destination of the file on the server
	$destination = 'uploads/' . $filename;

	// get the file extension
	$extension = pathinfo($filename, PATHINFO_EXTENSION);

	// the physical file on a temporary uploads directory on the server
	$file = $_FILES['myfile']['tmp_name'];
	$size = $_FILES['myfile']['size'];
	move_uploaded_file($file, $destination);

	if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
		echo "You file extension must be .zip, .pdf or .docx";
	} elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
		echo "File too large!";
	} 
	     else {




		// find publisher and return pubid
		// if publisher is not in db, create new
	

		if ($course == "ct")
		{
		$query = "INSERT INTO ct (book_isbn,book_title,book_author,book_image,book_descr,book_price,publisherid,size,name,downloads) values ('" . $isbn . "', '" . $title . "', '" . $author . "', '" . $image . "', '" . $descr . "', '" . $price . "','" . $publisherid . "' ,$size,'" . $filename . "',0)";
		$result = mysqli_query($conn, $query);
		if (!$result) {
			echo "Can't add new data " . mysqli_error($conn);
			exit;
		} else {
			header("Location:adminhome.php");
		}
	}

		if ($course == "cs") {

			$query = "INSERT INTO cs (book_isbn,book_title,book_author,book_image,book_descr,book_price,publisherid,size,name,downloads) values ('" . $isbn . "', '" . $title . "', '" . $author . "', '" . $image . "', '" . $descr . "', '" . $price . "','" . $publisherid . "' ,$size,'" . $filename . "',0)";
			$result = mysqli_query($conn, $query);
			if (!$result) {
				echo "Can't add new data " . mysqli_error($conn);
				exit;
			} else {
				header("Location:adminhome.php");
			}
		}
	}
	if ($course == "se") {
	$query = "INSERT INTO se(book_isbn,book_title,book_author,book_image,book_descr,book_price,publisherid,size,name,downloads) values ('" . $isbn . "', '" . $title . "', '" . $author . "', '" . $image . "', '" . $descr . "', '" . $price . "','" . $publisherid . "' ,$size,'" . $filename . "',0)";
	$result= mysqli_query($conn, $query);
	if (!$result) {
		echo "Can't add new data " . mysqli_error($conn);
		exit;
	} else {
		header("Location:adminhome.php");
	}
}
	if ($course == "cis") {
		$query = "INSERT INTO cis (book_isbn,book_title,book_author,book_image,book_descr,book_price,publisherid,size,name,downloads) values ('" . $isbn . "', '" . $title . "', '" . $author . "', '" . $image . "', '" . $descr . "', '" . $price . "','" . $publisherid . "' ,$size,'" . $filename . "',0)";
		$result = mysqli_query($conn, $query);
		if (!$result) {
			echo "Can't add new data " . mysqli_error($conn);
			exit;
		} else {
			header("Location:adminhome.php");
		}
	}
	
		
	
	if($course == "all")

		{

			$query1 = "INSERT INTO cs (book_isbn,book_title,book_author,book_image,book_descr,book_price,publisherid,size,name,downloads) values ('" . $isbn . "', '" . $title . "', '" . $author . "', '" . $image . "', '" . $descr . "', '" . $price . "','" . $publisherid . "' ,$size,'" . $filename . "',0)";
			$result1 = mysqli_query($conn, $query1);
			if (!$result1) {
				echo "Can't add new data " . mysqli_error($conn);
				exit;
			} else {
				header("Location:adminhome.php");
			}
		

	
		$query2= "INSERT INTO se(book_isbn,book_title,book_author,book_image,book_descr,book_price,publisherid,size,name,downloads) values ('" . $isbn . "', '" . $title . "', '" . $author . "', '" . $image . "', '" . $descr . "', '" . $price . "','" . $publisherid . "' ,$size,'" . $filename . "',0)";
		$result2= mysqli_query($conn, $query2);
		if (!$result2) {
			echo "Can't add new data " . mysqli_error($conn);
			exit;
		} else {
			header("Location:adminhome.php");
		}
	

		$query3= "INSERT INTO cis (book_isbn,book_title,book_author,book_image,book_descr,book_price,publisherid,size,name,downloads) values ('" . $isbn . "', '" . $title . "', '" . $author . "', '" . $image . "', '" . $descr . "', '" . $price . "','" . $publisherid . "' ,$size,'" . $filename . "',0)";
		$result3= mysqli_query($conn, $query3);
		if (!$result3) {
			echo "Can't add new data " . mysqli_error($conn);
			exit;
		} else {
			header("Location:adminhome.php");
		}
	

	$query4= "INSERT INTO ct (book_isbn,book_title,book_author,book_image,book_descr,book_price,publisherid,size,name,downloads) values ('" . $isbn . "', '" . $title . "', '" . $author . "', '" . $image . "', '" . $descr . "', '" . $price . "','" . $publisherid . "' ,$size,'" . $filename . "',0)";
	$result4= mysqli_query($conn, $query4);
	if (!$result4) {
		echo "Can't add new data " . mysqli_error($conn);
		exit;
	} else {
		header("Location:adminhome.php");
	}
    }
	
}

?>

<?php


$conn = mysqli_connect('localhost', 'root', '', 'group');

$sql="SELECT * FROM cs ORDER BY downloads DESC";
$result=mysqli_query($conn,$sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

$conn1= mysqli_connect('localhost', 'root', '', 'group');

$sql1 = "SELECT * FROM ct ORDER BY downloads DESC";
$result1 = mysqli_query($conn1, $sql1);

$files1= mysqli_fetch_all($result1, MYSQLI_ASSOC);
$conn2 = mysqli_connect('localhost', 'root', '', 'group');

$sql2 = "SELECT * FROM cis ORDER BY downloads DESC";
$result2 = mysqli_query($conn2, $sql2);

$files2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);
$conn3 = mysqli_connect('localhost', 'root', '', 'group');

$sql3 = "SELECT * FROM se ORDER BY downloads DESC";
$result3 = mysqli_query($conn3, $sql3);

$files3 = mysqli_fetch_all($result3, MYSQLI_ASSOC);




if (isset($_GET['book_isbn'])) {
	$book_isbn=$_GET['book_isbn'];

	// fetch file to download from database
	$sql="SELECT * FROM cs WHERE book_isbn=$book_isbn";
	$result=mysqli_query($conn,$sql);

	$file=mysqli_fetch_assoc($result);
	$filepath ='uploads/'.$file['name'];

	if (file_exists($filepath)) {
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename=' . basename($filepath));
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		header('Content-Length: ' . filesize('uploads/' . $file['name']));
		readfile('uploads/'. $file['name']);
	}

            
		// Now update downloads count
		$newCount=$file['downloads'] + 1;
		$updateQuery = "UPDATE cs SET downloads=$newCount WHERE book_isbn=$book_isbn";
		mysqli_query($conn, $updateQuery);
		exit;
	}





?>






