<?php
$servername = "localhost";
$username = "root";
$password = "Israel21!";
$dbname = "mywebsite";
//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if($conn->connect_error){
  die("connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO users (firstname, lastname, email) values ('Leon', 'Deion', 'ldeion@gmail.com');";
$sql .= "INSERT INTO users (firstname, lastname, email) values ('Julie', 'Lam', 'jlam@gmail.com');";
$sql .= "INSERT INTO users (firstname, lastname, email) values ('Justin', 'Lee', 'jlee@gmail.com');";
if($conn->multi_query($sql)==true){
  echo "New Records Created";
}else{
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
 ?>
