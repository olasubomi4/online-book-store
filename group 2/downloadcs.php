<?php include 'downloadcs_ser.php';

	?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Download files</title>
</head>

<body>

  <table>
    <thead>
      <th>ID</th>
      <th>Filename</th>
      <th>size (in mb)</th>
      <th>Downloads</th>
      <th>Action</th>
    </thead>
    <tbody>
      <?php foreach ($files as $file) : ?>
        <tr>

          <td><?php echo $file['book_isbn']; ?></td>
          <td><?php echo $file['name']; ?></td>
          <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
          <td><?php echo $file['downloads']; ?></td>
          <td><a href="downloadcs.php?book_isbn=<?php echo $file['book_isbn'] ?>">Download</a></td>
        </tr>
        </tr>
      <?php endforeach; ?>

    </tbody>
  </table>
  <?php
require "./template/footer.php";
?>

</body>

</html>