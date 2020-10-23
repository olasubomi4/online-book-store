
<?php
include"dbh.php";
session_start();

?>
<html>
    <head>
    </head>
    <body>
<form action="searchpage.php" method="POST">
    <input type="text" name="search" placeholder="search">
    <button type="submit" name="submit-search"></button>
</form>
<h1>front page </h1>

<div class="article-container">
    <?php
    $sql="SELECT * FROM books";
   $result=mysqli_query($conn,$sql);
    $queryResults= mysqli_num_rows($result);

    if($queryResults>0)
    {
        while($row= mysqli_fetch_assoc($result))
        {?>
            <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $row['book_image']; ?>">
            <?php
        }
    }
    ?>
    </body>