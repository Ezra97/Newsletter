<?php
$servername = "localhost";
$username = "root";
$password = "Israel21!";
$dbname = "mywebsite";
//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if($conn->connect_error){
  die("Connection Failed: " . $conn->connect_error);
}
$id = $_GET["id"];
//sql to delete a record
$sql = "DELETE FROM users WHERE id='$id'";
if($conn->query($sql)==true){
  header("location:delete.php?message=delete");
}else {
  echo "Error deleting records" . $conn->error;
}
$conn->close();
 ?>
