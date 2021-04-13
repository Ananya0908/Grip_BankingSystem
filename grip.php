<!DOCTYPE html>
<html>
<title>Banking website</title>
<head>
<style>
body
{
  background-image:url("main.jpg");
  background-size: 1600px 750px;
}
.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 600px;
  margin-top:-200px;
  
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
.bg
{
  text-align:center;
  color:white;
  font-size:55px;
}
</style>
  </head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<h1 class="bg">BANKING WEBSITE</h1>
<h2 class="bg">Sparks Foundation</h2>
<form action="customer.php" method="POST">
<div class="container">
  <input class="btn btn1" type="submit" name="submit" value="VIEW CUSTOMERS">
  </div>
  
</form>

</body>
</html>