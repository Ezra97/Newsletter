<?php
$fname = val($_POST["fname"]);
$lname = val($_POST["lname"]);
$email = val($_POST["email"]);
function val($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$servername = "localhost";
$username = "root";
$password = "Israel21!";
$dbname = "mywebsite";
//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if($conn->connect_error){
  die("connection failed " . $conn->connect_error);
}
$sql = "INSERT INTO users(firstname, lastname, email) VALUES('$fname', '$lname', '$email')";
if($conn->query($sql)==true){
  $last_id = $conn->insert_id;
  echo "New record created successfully, record ID is: " . $last_id;
}else{
  echo "Error " . $sql . "<br>" . $conn->error;
}
$conn->close();
 ?>
