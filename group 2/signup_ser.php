 

	<?php

        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $password=$_POST['password'];
        $comfirm=$_POST['comfirm'];
        $e=$_POST['e'];
        $gender= $_POST['gender'];
        $phone=$_POST['phone'];
		$username=$_POST['username'];
	    $level =$_POST['level'];
		$course =$_POST['course'];
		$yearOfBirth = $_POST['yearOfBirth'];
		$monthOfBirth = $_POST['monthOfBirth'];
		$dateOfBirth = $_POST['dateOfBirth'];

if ($yearOfBirth != '' && $monthOfBirth != '' && $dateOfBirth != '') {
  
  $date = $yearOfBirth.'-'.$monthOfBirth.'-'.$dateOfBirth;

      $dob =$date;
      $oDOB = new DateTime($dob);
      $oDiff = $oDOB->diff(new DateTime(), true);


  $new=$oDiff->format("%y");
  $con=mysqli_connect("localhost", "root", "", "group");
$query = "SELECT * FROM info WHERE username='$username'";
$query1 = "SELECT * FROM info WHERE e='$e'";
$result = mysqli_query($con, $query);
$count = mysqli_num_rows($result);
$result1= mysqli_query($con, $query1);
$count1= mysqli_num_rows($result1);
if (!$count>0) {
	if (!$count1>0) {
    if ($password==$comfirm)
        {
           if (filter_var($e, FILTER_VALIDATE_EMAIL)== true) 
           {

          if (preg_match('/^[0-9][0-9]{0,15}$/', $phone)) {
          	 if($new>=14)
                       {
          	            
           	  
        	    $host = "localhost";
		        $dbusername = "root";
		        $dbpassword ="";
		        $dbname = "group";
                $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
	                if(mysqli_connect_error())
	                {
		                die('Connect Error ('.mysqli_connect_errno().')'
		                .mysqli_connect_error());
	                }
	                else
	                {
		                $sql = "INSERT INTO info (firstname,lastname,phone,date,gender,password,comfirm,e,username,course,level) values ('".$firstname."','".$lastname."','".$phone."','".$date."','".$gender."','".$password."','".$comfirm."' ,'".$e."','".$username. "','" . $course. "','" . $level . "')"; 
                        if ($conn->query($sql))
                        {
			                
			                header("location:signin.php");
			            }
		                else
	                    {
			                echo "error :" .$sql."<br>".$conn->error;
	                    }
		                $conn->close();
               
                    }
                     }
            else
	        {
	        	 header("location:signup.php?signup_ser=date&firstname=$firstname&lastname=$lastname&username=$username&gender=$gender&date=$date");
	             
	        	}
                     }
            else
	        {
	        	 header("location:signup.php?signup_ser=number&firstname=$firstname&lastname=$lastname&username=$username&gender=$gender&date=$date");
	             
	        	}
	        }
	        else
	        {
	        	 header("location:signup.php?signup_ser=invalid&firstname=$firstname&lastname=$lastname&username=$username&gender=$gender&date=$date");
	             
	        	}
	        }
	    
	        else
	    	{
	    		header("location:signup.php?signup_ser=pass&firstname=$firstname&lastname=$lastname&username=$username&gender=$gender&date=$date"); 
	             
	             }
	         }
	         else
	         {
	         	header("location:signup.php?signup_ser=email&firstname=$firstname&lastname=$lastname&username=$username&gender=$gender&date=$date"); 
	         }
	         }
	         else{
	         	header("location:signup.php?signup_ser=username&firstname=$firstname&lastname=$lastname&username=$username&gender=$gender&date=$date"); 	         
	         }
	     }
	 ?>
</body>
</html>