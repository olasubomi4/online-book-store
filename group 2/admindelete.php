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
require_once "./template/headeradmin.php";
?>

<p class="lead text-center text-muted">All ct</p>
<?php for ($i = 0; $i < mysqli_num_rows($result1); $i++) { ?>
    <div class="row">
        <?php while ($query_row1 = mysqli_fetch_assoc($result1)) { ?>
            <div class="col-md-3">

                <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $query_row1['book_image']; ?>">

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
<p class="lead text-center text-muted">All cs</p>
<?php for ($i = 0; $i < mysqli_num_rows($result2); $i++) { ?>
    <div class="row">
        <?php while ($query_row2 = mysqli_fetch_assoc($result2)) { ?>
            <div class="col-md-3">

                <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $query_row2['book_image']; ?>">

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
<p class="lead text-center text-muted">All cis</p>
<?php for ($i = 0; $i < mysqli_num_rows($result3); $i++) { ?>
    <div class="row">
        <?php while ($query_row3 = mysqli_fetch_assoc($result3)) { ?>
            <div class="col-md-3">

                <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $query_row3['book_image']; ?>">

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
<p class="lead text-center text-muted">all se</p>
<?php for ($i = 0; $i < mysqli_num_rows($result4); $i++) { ?>
    <div class="row">
        <?php while ($query_row4 = mysqli_fetch_assoc($result4)) { ?>
            <div class="col-md-3">
                <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $query_row4['book_image']; ?>">
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




?>
<form action="admindelete_ser.php" method="post">
    <select name="course">
        <option value="">course</option>
        <option value="all">all</option>
        <option value="ct">ct</option>
        <option value="cs">cs</option>
        <option value="cis">cis</option>
        <option value="se">se</option>
    </select>
    <input type="text" name="book_title" placeholder="book">
    <input type="submit" value="submit">
</form>
<?php
require_once "./template/footer.php";
?>