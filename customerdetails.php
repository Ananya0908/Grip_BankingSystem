<html>
<body>


<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "grip";
 // Create connection
 //session_register();
 session_start();
 $conn = new mysqli($servername, $username, $password, $dbname);
// here we get the incomming video id (videoinfo.php?id=123)
$video_id = $_GET['Name'];
$_SESSION['xyz']=$video_id;
//echo $video_id;
// build a database query to select the videoInformation
// here we use WHERE to select the video_id we want
$query = "SELECT * FROM customer WHERE Name = '$video_id'";

// lets connect and do the query
$result = $conn->query($query) or die($conn->error);
 //{
    // output data of each row
    //<? php echo "<p><center>i am center</center></p>" 
           while($row = $result->fetch_assoc()) {
           
            echo "<table border=>";
            echo "<tr>";
            echo "<th><b>Name</th>";
            echo "<td>" . $row['Name'] . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Email</th>";
            echo "<td>" . $row['Email'] . "</td>";
            echo "</tr>";
             echo "<tr>";
            echo "<th>Address</th>";
            echo "<td>" . $row['Address'] . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>CurrentBalance</th>";
            echo "<td>" . $row['CurrentBalance'] . "</td>";
            echo "</tr>";
            echo "</table>";


            //echo "Name: " . $row["Name"]. " - Email: " . $row["Email"]. " " . $row["Address"]. " " . $row["CurrentBalance"]."<br>";
            }

         

?>
<style>
body
{
  background-image:url('b.jpg');
  background-repeat: no-repeat;
  background-size: 1500px 700px;
  overflow:hidden;
}
table, td, th {
  border: 4px solid black;
  padding:10px;
}

table {
  border-collapse: collapse;
  margin-left:100px;

margin-right:auto;
border-style: outset;
margin-top:200px;
margin-bottom:-200px;
}
.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 600px;
  margin-right:950px;
  
}
.btn {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 25px;
}
.btn1:hover{
  background-color: white;
  color: black;
  border: 2px solid #555555;
}

.btn1 {
  background-color: #555555;
  color: white;
}
</style>
   <form action="transaction.php" method="POST">
   <div class="container">
  <input class="btn btn1" type="submit" name="submit" value="TRANSACTION">
            
          </form>

</body>
</html>
