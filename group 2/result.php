	<?php
	$conn = mysql_connect("localhost", "root", "123");
	mysql_select_db("group", $conn);
	//search code
	//error_reporting(0);
	if ($_REQUEST['submit']) {
		$name = $_POST['name'];
		if (empty($name)) {
			$make = '<h4>You must type a word to search!</h4>';
		} else {
			$make = '<h4>No match found!</h4>';
			$sele = "SELECT * FROM books WHERE book_isbn LIKE '%$name%'";
			$result = mysql_query($sele);

			if ($make = mysql_num_rows($result) > 0) {
				while ($row = mysql_fetch_assoc($result)) {
					echo '<h4> Id						: ' . $row['book_isbn'];
					echo '<br> name						: ' . $row['book_name'];
					echo '</h4>';
				}
			} else {
				echo '<h2> Search Result</h2>';
				print($make);
			}
			mysql_free_result($result);
			mysql_close($conn);
		}
	}
	?>