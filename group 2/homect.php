<?php
session_start();

$count = 0;
// connecto database

$title = "Index";
require_once "./template/headerct.php";
require_once "./functions/database_functions.php";
$conn = db_connect();
$row = select4LatestBook3($conn);
?>

<!-- Example row of columns -->
<p class="lead text-center text-muted">Recommended computer technology books</p>
<div class="row">
  <?php foreach ($row as $book) { ?>
    <div class="col-md-3">
      <a href="showcasect.php?bookisbn=<?php echo $book['book_isbn']; ?>">
        <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $book['book_image']; ?>">
      </a>
    </div>
  <?php } ?>
</div>
<?php
if (isset($conn)) {
  mysqli_close($conn);
}
require_once "./template/footer.php";
?>