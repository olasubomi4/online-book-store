<?php
require_once "./template/headeradmin.php";

?>

<table class="table table table-white table-striped " >
  <thead class="thead-dark">
    <tr>
      <th>username</th>
      <th>password</th>
      <th>firstname</th>
      <th>lastname</th>
      <th>E-mail</th>
      <th>course</th>


    </tr>
    <tr>
      <td>
        <form action="add_ser.php" method="post">
          <?php
          if (isset($_GET['username'])) {
            $username = $_GET['username'];

            echo '<input type="text" name="username" placeholder="username" value="' . $username . '" required>';
          } else {
            echo '<input type="text" name="username" placeholder="username" required>';
          }
          ?>

      </td>
      <td>
        <?php
        if (isset($_GET['password'])) {
          $password = $_GET['password'];

          echo '<input type="password" name="password" placeholder="password" value="' . $password . '" required>';
        } else {
          echo '<input type="password" name="password" placeholder="password" required>';
        }
        ?>
      </td>
      <td>
        <?php
        if (isset($_GET['firstname'])) {
          $firstname = $_GET['firstname'];

          echo '<input type="text" name="firstname" placeholder="firstname" value="' . $firstname . '" required>';
        } else {
          echo '<input type="text" name="firstname" placeholder="firstname" required>';
        }
        ?>
      </td>
      <td>
        <?php
        if (isset($_GET['lastname'])) {
          $lastname = $_GET['lastname'];

          echo '<input type="text" name="lastname" placeholder="lastname" value="' . $lastname . '" required>';
        } else {
          echo '<input type="text" name="lastname" placeholder="lastname" required>';
        }
        ?>
      </td>
      <td>

        <input type="text" name="e" placeholder="E-mail" required>

      </td>
      <td>
        <select name="course">
          <option value=" Computer science">Computer science</option>
          <option value="Accounting">Accounting</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Level</th>
      <th>Date of birth</th>
      <th>phone number</th>
      <th>Gender</th>
      <th>confirm password</th>
    </tr>
   
    <td>
      <select name="level">
        <option value="100">100</option>
        <option value="200">200</option>
        <option value="300">300</option>
        <option value="400">400</option>
      </select>
    </td>

    <td>
      <select name="yearOfBirth">
        <option value="">Year</option>
        <?php for ($i = 1900; $i < date('Y'); $i++) : ?>
        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php endfor; ?>
      </select>
      <select name="monthOfBirth">
        <option value="">Month</option>s
        <?php for ($i = 1; $i <= 12; $i++) : ?>
        <option value="<?php echo ($i < 10) ? '0' . $i : $i; ?>"><?php echo $i; ?></option>
        <?php endfor; ?>
      </select>
      <select name="dateOfBirth">
        <option value="">Date</option>
        <?php for ($i = 1; $i <= 31; $i++) : ?>
        <option value="<?php echo ($i < 10) ? '0' . $i : $i; ?>"><?php echo $i; ?></option>
        <?php endfor; ?>
      </select>
    </td>

    <td>
      <?php
      if (isset($_GET['phone'])) {
        $phone = $_GET['phone'];

        echo '<input type="text" name="phone" placeholder="Phone number" value="' . $phone . '" required>';
      } else {
        echo '<input type="text" name="phone" placeholder="Phone number" required>';
      }
      ?>
    </td>
    <td>
      <input type="radio" name="gender" value="Male">Male
      <input type="radio" name="gender" value="female">Female


    </td>
    <td>



      <input type="password" name="comfirm" placeholder="confirm" required>
    </td>

    <td>
      <input type="submit" value="submit">
    </td>
    </tr>
</table>
</form>

<?php



require_once "./template/footer.php";

if (!isset($_GET['add_ser'])) {
  exit();
} else {
  $addCheck = $_GET['add_ser'];
  if ($addCheck == "done") {
    echo "<p class='fixed'>Record inserted!</p>";
    exit();
  }
}
if (!isset($_GET['add_ser'])) {
  exit();
} else {
  $addCheck = $_GET['add_ser'];
  if ($addCheck == "invalid") {
    echo "<p class='error'>invalid email!</p>";
    exit();
  }
}
if (!isset($_GET['add_ser'])) {
  exit();
} else {
  $addCheck = $_GET['add_ser'];
  if ($addCheck == "pass") {
    echo "<p class='error'>passwords dont match</p>";
    exit();
  }
}
if (!isset($_GET['add_ser'])) {
  exit();
} else {
  $addCheck = $_GET['add_ser'];
  if ($addCheck == "number") {
    echo "<p class='error'>invalid phone number</p>";
    exit();
  }
}
if (!isset($_GET['add_ser'])) {
  exit();
} else {
  $addCheck = $_GET['add_ser'];
  if ($addCheck == "date") {
    echo "<p class='error'>You are under 18</p>";
    exit();
  }
}
if (!isset($_GET['add_ser'])) {
  exit();
} else {
  $addCheck = $_GET['add_ser'];
  if ($addCheck == "email") {
    echo "<p class='error'>Email already exists!</p>";
    exit();
  }
}
if (!isset($_GET['add_ser'])) {
  exit();
} else {
  $addCheck = $_GET['add_ser'];
  if ($addCheck == "username") {
    echo "<p class='error'>Username already exists!</p>";
    exit();
  }
}
require_once "./template/footer.php";
?>

</body>

</html>