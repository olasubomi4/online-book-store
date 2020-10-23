<?php
session_start();

$count = 0;
$count1 = 0;
$count2 = 0;
$count3 = 0;
$count4 = 0;
// connecto database
require_once "./functions/database_functions.php";

$conn = db_connect();



$query1 = "SELECT book_isbn, book_image FROM ct";
$result1 = mysqli_query($conn, $query1);
if (!$result1) {
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
}
$query2 = "SELECT book_isbn, book_image FROM cs";
$result2 = mysqli_query($conn, $query2);
if (!$result2) {
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
}
$query3 = "SELECT book_isbn, book_image FROM cis";
$result3 = mysqli_query($conn, $query3);
if (!$result3) {
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
}
$query4 = "SELECT book_isbn, book_image FROM se";
$result4 = mysqli_query($conn, $query4);
if (!$result4) {
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
}

$title = "Full Catalogs of Books";
require_once "./template/header.php";
?>

<p class="lead text-center text-muted">All Computer Technology</p>
<?php for ($i = 0; $i < mysqli_num_rows($result1); $i++) { ?>
    <div class="row">

        <?php while ($query_row1 = mysqli_fetch_assoc($result1)) { ?>
            <div class="col-md-3">
                <a href="showcasect.php?bookisbn=<?php echo $query_row1['book_isbn']; ?>">
                    <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $query_row1['book_image']; ?>">
                </a>
            </div>
        <?php
                $count++;
                if ($count1 >= 4) {
                    $count1 = 0;
                    break;
                }
            } ?>
    </div>
<?php
}

?>
<p class="lead text-center text-muted">All Computer science</p>
<?php for ($i = 0; $i < mysqli_num_rows($result2); $i++) { ?>
    <div class="row">
        <?php while ($query_row2 = mysqli_fetch_assoc($result2)) { ?>
            <div class="col-md-3">
                <a href="showcasecs.php?bookisbn=<?php echo $query_row2['book_isbn']; ?>">
                    <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $query_row2['book_image']; ?>">
                </a>
            </div>
        <?php
                $count2++;
                if ($count2 >= 4) {
                    $count2 = 0;
                    break;
                }
            } ?>
    </div>
<?php
}
?>
<p class="lead text-center text-muted">All Computer information system</p>
<?php for ($i = 0; $i < mysqli_num_rows($result3); $i++) { ?>
    <div class="row">
        <?php while ($query_row3 = mysqli_fetch_assoc($result3)) { ?>
            <div class="col-md-3">
                <a href="showcasecis.php?bookisbn=<?php echo $query_row3['book_isbn']; ?>">
                    <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $query_row3['book_image']; ?>">
                </a>
            </div>
        <?php
                $count3++;
                if ($count3 >= 4) {
                    $count3 = 0;
                    break;
                }
            } ?>
    </div>
<?php
}
?>
<p class="lead text-center text-muted">All Software engineering </p>
<?php for ($i = 0; $i < mysqli_num_rows($result4); $i++) { ?>
    <div class="row">
        <?php while ($query_row4 = mysqli_fetch_assoc($result4)) { ?>
            <div class="col-md-3">
                <a href="showcasese.php?bookisbn=<?php echo $query_row4['book_isbn']; ?>">
                    <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $query_row4['book_image']; ?>">
                </a>
            </div>
        <?php
                $count3++;
                if ($count4 >= 4) {
                    $count4 = 0;
                    break;
                }
            } ?>
    </div>
<?php
}
if (isset($conn)) {
    mysqli_close($conn);
}

require_once "./template/footer.php";


?>