<?php
require_once "./template/headeradmin.php";

?>
<?php
session_start();
$count = 0;

require_once "./functions/database_functions.php";
$conn = db_connect();


$row2 = select4LatestBook2($conn);
$row3 = select4LatestBook3($conn);
$row5 = select4LatestBook5($conn);
$row4 = select4LatestBook4($conn);
?>

<p class="lead text-center text-muted">Best selling   computer science books</p>
<div class="row">
    <?php foreach ($row2 as $book) { ?>
        <div class="col-md-3">

            <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $book['book_image']; ?>">

        </div>
    <?php } ?>
</div>
<p class="lead text-center text-muted">Best selling computer technology books</p>
<div class="row">
    <?php foreach ($row3 as $book) { ?>
        <div class="col-md-3">

            <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $book['book_image']; ?>">

        </div>
    <?php } ?>
</div>
<p class="lead text-center text-muted">Best selling computer information science books</p>
<div class="row">
    <?php foreach ($row5 as $book) { ?>
        <div class="col-md-3">

            <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $book['book_image']; ?>">

        </div>
    <?php } ?>
</div>
<p class="lead text-center text-muted">Best selling  software engineering books</p>
<div class="row">
    <?php foreach ($row4 as $book) { ?>
        <div class="col-md-3">

            <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $book['book_image']; ?>">

        </div>
    <?php } ?>
</div>
<?php
if (isset($conn)) {
    mysqli_close($conn);
}
require_once "./template/footer.php";
?>