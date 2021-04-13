<?php
  //$connection = mysqli_connect("localhost","root","");
  //$db=mysqli_connect_db($connection,'grip');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grip";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$a=$_POST["fname"];
$b=$_POST["lname"];
$c=$_POST["amount"];
$t=$_POST["sender"];

$sender_balance="SELECT currentBalance from customer WHERE Name='$t'";
$balance=$conn->query($sender_balance);
$sender=mysqli_fetch_array($balance);

if($sender['currentBalance'] > $c)
{
$amount="SELECT currentBalance from customer WHERE Name='$a'";
$result1=$conn->query($amount) ;
$row=mysqli_fetch_array($result1);
$totalamount=$c+$row['currentBalance'];

$query = "UPDATE customer SET currentBalance='$totalamount' WHERE Name ='$a'";
$result = $conn->query($query) or die($conn->error);

$sub=$sender['currentBalance'] - $c;

$q2= "UPDATE customer SET currentBalance='$sub' WHERE Name ='$t'";
$r1=$conn->query($q2);

$q3="INSERT INTO transaction(Sender,Reciever,Amount)values ('$t','$a',$c)";
$R2=$conn->query($q3);

echo "<h1 class='circle'>TRANSACTION   SUCCESSFUL</h1>";
}

else{
  
 echo "<h1 class='circle'>INSUFFICIENT   BALANCE</h1>";
}



?>
<html>
<body>
<style>
body {
  background: #A0CBA4;
  font-family: 'Lobster', cursive;
}
.circle {
  margin: auto;
  height: 300px;
  width: 300px;
  border-radius: 100%;
  background: #4E8953;
  margin-top: 150px;
}

h1 {
  color: #D5E2D6;
  text-align: center;
  line-height: 50px;
  margin-top: -350px;
  font-size:50px;
  -moz-transform: scale(1) rotate(-5deg) translateX(0px) translateY(0px) skewX(1deg) skewY(1deg);
-webkit-transform: scale(1) rotate(-5deg) translateX(0px) translateY(0px) skewX(1deg) skewY(1deg);
-o-transform: scale(1) rotate(-5deg) translateX(0px) translateY(0px) skewX(1deg) skewY(1deg);
-ms-transform: scale(1) rotate(-5deg) translateX(0px) translateY(0px) skewX(1deg) skewY(1deg);
transform: scale(1) rotate(-5deg) translateX(0px) translateY(0px) skewX(1deg) skewY(1deg);
  /*-----------------------*/
  text-shadow: 1px 1px #4A744D, 2px 2px #4A744D, 3px 3px #4A744D, 4px 4px #4A744D, 5px 5px #4A744D, 6px 6px #4A744D, 7px 7px #4A744D, 8px 8px #4A744D, 9px 9px #4A744D, 10px 10px #4A744D, 11px 11px #4A744D, 12px 12px #4A744D, 13px 13px #4A744D, 14px 14px #4A744D, 15px 15px #4A744D, 16px 16px #4A744D, 17px 17px #4A744D, 18px 18px #4A744D, 19px 19px #4A744D, 20px 20px #4A744D, 21px 21px #4A744D, 22px 22px #4A744D, 23px 23px #4A744D, 24px 24px #4A744D, 25px 25px #4A744D, 26px 26px 6px #06520C;
  
}

span:nth-child(3), span:nth-child(7) { 
font-size: 150px;
}

span:nth-child(1), span:nth-child(9), span:nth-child(5)  {
  font-size: 210px;
}
</style>
</body>
</html>
