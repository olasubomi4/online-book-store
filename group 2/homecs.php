<?php
session_start();

$count = 0;
// connecto database

$title = "Index";
require_once "./template/headercs.php";
require_once "./functions/database_functions.php";
$conn = db_connect();
$row = select4LatestBook2($conn);
?>

<!-- Example row of columns -->
<p class="lead text-center text-muted">Recommended computer science books</p>
<div class="row">
  <?php foreach ($row as $book) { ?>
    <div class="col-md-3">
      <a href="showcasecs.php?bookisbn=<?php echo $book['book_isbn']; ?>">
        <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $book['book_image']; ?>">
      </a>
    </div>

  <?php } ?>
</div>

<!-- <button id="myBtn">Open Modal</button> -->
<!-- Modal content -->
<!-- <div class="modal-content">
  <div class="modal-header">
    <span class="close">&times;</span>
    <h2>Modal Header</h2>
  </div>
  <div class="modal-body">
    <p>Some text in the Modal Body</p>
    <p>Some other text...</p>
  </div>
  <div class="modal-footer">
    <h3>Modal Footer</h3>
  </div>
</div> -->
<!-- The Modal -->
<!-- <div id="myModal" class="modal"> -->

  <!-- Modal content -->
  <!-- <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div> -->

<?php
if (isset($conn)) {
  mysqli_close($conn);
}
require_once "./template/footer.php";
?>