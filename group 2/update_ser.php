<?php
$data =$_POST['data'];
$update =$_POST['update'];
 $updateinfo=$_POST['updateinfo'];
 $host = "localhost";
 $dbusername = "root";
 $dbpassword ="";
 $dbname = "group";
   $con=mysqli_connect("localhost", "root", "", "group");
   $query = "SELECT * FROM info WHERE username='$data'";
   $query1 = "SELECT * FROM info WHERE e='$data'";
   $result = mysqli_query($con, $query);
   $count = mysqli_num_rows($result);
   $result1= mysqli_query($con, $query1);
   $count1= mysqli_num_rows($result1);
   if (!$count>0) {
	    if (!$count1>0) {
                        $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

                        if (!$conn) {
                                      die("Connection failed: " . mysqli_connect_error());
                                    }
                        $sql = "UPDATE info SET $updateinfo='$data' WHERE id='$update'";

                 if (mysqli_query($conn, $sql)) {
    
                                                  header("location:update.php?update=pass&username=$username");
                                               } 
       else {
             echo "Error updating record: " . mysqli_error($conn);
            }
           }
	    else
	    {
	         	header("location:update.php?update_ser=email&firstname=$firstname&lastname=$lastname&username=$username&gender=$gender&date=$date"); 
	    }
	}
	         else{
	         	header("location:update.php?update_ser=username&firstname=$firstname&lastname=$lastname&username=$username&gender=$gender&date=$date"); 	         
	         }

mysqli_close($conn)
?>