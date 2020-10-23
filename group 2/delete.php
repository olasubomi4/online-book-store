<?php
require_once "./template/headeradmin.php";
session_start();


?>

<table class="table table table-white table-striped ">
    <thead class="thead-dark">
        <tr>
            <th> ID </th>
            <th> Username </th>
            <th> Password</th>
            <th>First name</th>
            <th>Last name </th>
            <th>E-mail</th>
            <th>Phone number</th>
            <th>Gender</th>
            <th>Date of birth</th>
            <th>Level</th>
            <th>Course</th>
        </tr>
    </thead>
    <?php
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "group";
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    //Select Database
    if (!mysqli_select_db($conn, 'group')) {
        echo "Database Not Selected";
    }
    //Select Query
    $sql = "SELECT * FROM info";

    //Execute the SQL query
    $records = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($records)) {
        echo "<tr>";
        echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['password'] . "</td>";
        echo "<td>" . $row['firstname'] . "</td>";
        echo "<td>" . $row['lastname'] . "</td>";
        echo "<td>" . $row['e'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "<td>" . $row['gender'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "<td>" . $row['level'] . "</td>";
        echo "<td>" . $row['course'] . "</td>";

        echo "</tr>";
    }
    ?>
</table>
</div>
<form action="delete_ser.php" method="post">
    <input type="text" name="delete" placeholder="ID">
    <input type="submit" value="submit">
</form>

<?php
require_once "./template/footer.php";

if (!isset($_GET['delete_ser'])) {
    exit();
} else {
    $deleteCheck = $_GET['delete_ser'];
    if ($deleteCheck == "pass") {
        echo "<p class='remove'>record deleted sucessfully</p>";
        exit();
    }
}

?>

</body>



</html>