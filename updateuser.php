<?php
//database connection variables
$servername = "localhost";
$username = "root";
$password = "Israel21!";
$dbname = "mywebsite";
//form variables
$fname = val($_POST["fname"]);
$lname = val($_POST["lname"]);
$email = val($_POST["email"]);
$id = val($_POST["id"]);
//validation
function val($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
//databaase connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if($conn->connect_error){
  die("connection failed " . $conn->connect_error);
}
//update users table with new values
$sql = "UPDATE users SET firstname='$fname', lastname='$lname', email='$email' WHERE id='$id'";
//redirect user back to main page
if($conn->query($sql)==true){
  header("location:delete.php?message=success&id=" . $id);
}else{
  echo "Error updating record: " . $conn->error;
}
//close database connection
$conn->close();
 ?>
