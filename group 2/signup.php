<?php
require_once "./template/headersignup.php";
?>

<table>
	<tr>
		<td>

			<form action="signup_ser.php" method="post">
				<br>
				<br>
				<?php
				if (isset($_GET['firstname'])) {
					$firstname = $_GET['firstname'];

					echo '<input type="text" name="firstname" placeholder="firstname" value="' . $firstname . '" required>';
				} else {
					echo '<input type="text" name="firstname" placeholder="firstname" required>';
				}
				?>
				<br>
				<br>
				<?php
				if (isset($_GET['lastname'])) {
					$lastname = $_GET['lastname'];

					echo '<input type="text" name="lastname" placeholder="lastname" value="' . $lastname . '" required>';
				} else {
					echo '<input type="text" name="lastname" placeholder="lastname" required>';
				}
				?>


				<br>
				<br>
				<?php
				if (isset($_GET['username'])) {
					$username = $_GET['username'];

					echo '<input type="text" name="username" placeholder="username" value="' . $username . '" required>';
				} else {
					echo '<input type="text" name="username" placeholder="username" required>';
				}
				?>
				<br>
				<br>
				<select name="course">
					<option value=" Computer science">Computer science</option>
					
				</select>
				<br>
				<br>
				<select name="level">
					<option value="100">100</option>
					<option value="200">200</option>
					<option value="300">300</option>
					<option value="400">400</option>
				</select>

				<br>
				<br>
				<input type="text" name="e" placeholder="E-mail" required>

				<br>

				<br>
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
				<br>
				<br>
				<?php
				if (isset($_GET['phone'])) {
					$phone = $_GET['phone'];

					echo '<input type="text" name="phone" placeholder="Phone number" value="' . $phone . '" required>';
				} else {
					echo '<input type="text" name="phone" placeholder="Phone number" required>';
				}
				?>
				<br>
				<br>
				<input type="radio" name="gender" value="Male">Male
				<input type="radio" name="gender" value="female">Female

				<br>
				<br>
				<input type="password" name="password" placeholder="password" required>
				<br>
				<br>
				<input type="password" name="comfirm" placeholder="confirm" required>
				<br>
				<br>
				<input type="submit" value="Register">
			</form>
			<?php
			/* $fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                if(strpos($fullUrl,"signup_ser=invalid")==true)
                
       	         echo "<p class='error'>You used invalid email!</p>";
                }*/
			if (!isset($_GET['signup_ser'])) {
				exit();
			} else {
				$signupCheck = $_GET['signup_ser'];
				if ($signupCheck == "invalid") {
					echo "<p class='error'>invalid email!</p>";
					exit();
				}
			}
			if (!isset($_GET['signup_ser'])) {
				exit();
			} else {
				$signupCheck = $_GET['signup_ser'];
				if ($signupCheck == "pass") {
					echo "<p class='error'>passwords dont match</p>";
					exit();
				}
			}
			if (!isset($_GET['signup_ser'])) {
				exit();
			} else {
				$signupCheck = $_GET['signup_ser'];
				if ($signupCheck == "number") {
					echo "<p class='error'>invalid phone number</p>";
					exit();
				}
			}
			if (!isset($_GET['signup_ser'])) {
				exit();
			} else {
				$signupCheck = $_GET['signup_ser'];
				if ($signupCheck == "date") {
					echo "<p class='error'>You are under 14</p>";
					exit();
				}
			}

			if (!isset($_GET['signup_ser'])) {
				exit();
			} else {
				$signupCheck = $_GET['signup_ser'];
				if ($signupCheck == "email") {
					echo "<p class='error'>Email already exists!</p>";
					exit();
				}
			}
			if (!isset($_GET['signup_ser'])) {
				exit();
			} else {
				$signupCheck = $_GET['signup_ser'];
				if ($signupCheck == "username") {
					echo "<p class='error'>Username already exists!</p>";
					exit();
				}
			}


			?>
		</td>
	</tr>

</table>
<?php
require_once "./template/footer.php";
?>
</body>

</html>