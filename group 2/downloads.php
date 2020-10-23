<?php include 'normaluserser2.php';
 session_start();

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
      <th>Number of Downloads</th>

    </thead>
    <tbody>
      <th> Computer  science</th>
      <?php foreach ($files as $file) : ?>
        <tr>

          <td><?php echo $file['book_isbn']; ?></td>
          <td><?php echo $file['name']; ?></td>
          <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
          <td><?php echo $file['downloads']; ?></td>

        </tr>
        </tr>
      <?php endforeach; ?>
      <th> Computer Technology</th>
      <?php foreach ($files1 as $file) : ?>

        <tr>

          <td><?php echo $file['book_isbn']; ?></td>
          <td><?php echo $file['name']; ?></td>
          <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
          <td><?php echo $file['downloads']; ?></td>

        </tr>
        </tr>
      <?php endforeach; ?>
      <th> Computer information science</th>

      <?php foreach ($files2 as $file) : ?>

        <tr>

          <td><?php echo $file['book_isbn']; ?></td>
          <td><?php echo $file['name']; ?></td>
          <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
          <td><?php echo $file['downloads']; ?></td>

        </tr>
        </tr>
      <?php endforeach; ?>
      <th> Software engineering</th>
      <?php foreach ($files3 as $file) : ?>

        <tr>

          <td><?php echo $file['book_isbn']; ?></td>
          <td><?php echo $file['name']; ?></td>
          <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
          <td><?php echo $file['downloads']; ?></td>

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