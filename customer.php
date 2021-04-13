<html>
  <head>
  <style>
  body
  {
    background-image:url("second.jpg");
    background-size:1600px 700px;
  }
  a:link {
  color: red;
}

/* visited link */
a:visited {
  color:red;
}

/* mouse over link */
a:hover {
  color:yellow;
}

/* selected link */
a:active {
  color:red;
}
.b{
  margin-left:20px;
}
  </style>
</head>
<body>
<?php
  //$connection = mysqli_connect("localhost","root","");
  //$db=mysqli_connect_db($connection,'grip');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grip";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

  if(isset($_POST['submit']))
  {
    $sql = "SELECT Name FROM customer";
    $result = $conn->query($sql);


     if ($result->num_rows > 0) {
  // output data of each row
  session_start();
        /// while($row = $result->fetch_assoc()) {
          //$x=$row['Name'];
          
         // $_SESSION['my']=$x;
           //echo $x;
           echo '<h1 class="b">'.'<a href="customerdetails.php?Name=Ananya">' ."Ananya" .'</a>'.'</h1>';
           echo '<h1 class="b">'.'<a href="customerdetails.php?Name=Suresh">' ."Suresh" .'</a>' .'</h1>';
           echo '<h1 class="b">'.'<a href="customerdetails.php?Name=Sachin">' ."Sachin" .'</a>' .'</h1>';
           echo '<h1 class="b">'.'<a href="customerdetails.php?Name=Mukesh">' ."Mukesh" .'</a>'.'</h1>';
           echo '<h1 class="b">'.'<a href="customerdetails.php?Name=Abhinav">' ."Abhinav" .'</a>' .'</h1>';
           echo '<h1 class="b">'.'<a href="customerdetails.php?Name=Reena">' ."Reena" .'</a>'.'</h1>';
           echo '<h1 class="b">'.'<a href="customerdetails.php?Name=Rajeev">' ."Rajeev" .'</a>'.'</h1>';
           echo '<h1 class="b">'.'<a href="customerdetails.php?Name=Devesh">' ."Devesh" .'</a>'.'</h1>';
           echo '<h1 class="b">'.'<a href="customerdetails.php?Name=Radha">' ."Radha" .'</a>'.'</h1>';
           echo '<h1 class="b">'.'<a href="customerdetails.php?Name=Rajan">' ."Rajan" .'</a>'.'</h1>';

         // echo '<a href="customerdetails.php">' . $x. '</a>';
         
          //session_abort();

        //  }
        }
        }
    
?>
</body>
</html>