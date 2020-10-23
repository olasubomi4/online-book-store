<?php
    session_start();
s
    $count = 0;
    // connecto database

    $title = "Index";
    require_once "./template/headercis.php";
    require_once "./functions/database_functions.php";
    $conn = db_connect();
  
?>
<html>
    <head>
    </head>
    <body>
<h1>
search page</h1>
<div class="article-container">
    <?php
    if(isset($_POST['submit-search']))
    {
        $search= mysqli_real_escape_string($conn,$_POST['search']);
          $sql = "SELECT * FROM cis WHERE book_isbn LIKE '%$search%' OR name LIKE '%$search%' OR book_author LIKE '%$search%' OR book_image LIKE '%$search%'";
        $result= mysqli_query($conn,$sql);
        $queryResult = mysqli_num_rows($result);
echo "there are ". $queryResult."result";
        ?>
        <?php for ($i = 0; $i < mysqli_num_rows($result); $i++) { ?>
  <div class="row">
       <?php if($queryResult >0 )
        {

        while($row = mysqli_fetch_assoc($result))
        {?>
        <div class="col-md-3">
        <a href="showcasecis.php?bookisbn=<?php echo $row['book_isbn']; ?>">
          <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $row['book_image']; ?>">
        </a>
      </div>
      <?php
        $count++;
        if ($count >= 4) {
          $count = 0;
          break;
        }
      } ?>
  </div>
        <?php
        }
    
     else{
            echo "no result";
        }
    }
}
require_once "./template/footer.php";
    ?>
