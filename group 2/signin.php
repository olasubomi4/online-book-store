<?php
require_once "./template/headersignup.php";
?>

<table>
  <tr>
    <td>
      <form action="signin_ser.php" method="post">
        <img src="male.png" width="90px" height="80px">
        <br>
        <br>
        <br>
        <label for="username">Username:</label>
        <?php
        if (isset($_GET['username'])) {
          $username = $_GET['username'];

          echo '<input type="text" name="username" placeholder="username" value="' . $username . '" required>';
        } else {
          echo '<input type="text" name="username" placeholder="username"required>';
        }
        ?>
        
        <br>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="Password" required>
        <br>
        <br>
        <input type="submit" value="LOG IN" class="btn btn-primary">
      </form>
    </td>
  </tr>
</table>
<br>
<div class="text-center">
  <form action="signup.php">

    <details> If u dont have an account </details>
    <br>
    <input type="submit" value="Sign up" class="btn btn-primary">
  </form>
</div>
<?php

require_once "./template/footer.php";
if (!isset($_GET['signin_ser'])) {
  exit();
} else {
  $signinCheck = $_GET['signin_ser'];
  if ($signinCheck == "pass") {
    echo "<p class='error'>invalid password!</p>";
    exit();
  }
}
if (!isset($_GET['signup_ser'])) {
  exit();
} else {
  $signupCheck = $_GET['signup_ser'];
  if ($signupCheck == "course") {
    echo "<p class='error'>please select course !</p>";
    exit();
  }
}
?>

</body>

</html>