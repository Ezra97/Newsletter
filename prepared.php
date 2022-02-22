<?php
$servername = "localhost";
$username = "root";
$password = "Israel21!";
$dbname = "mywebsite";
//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}
//create prepare statement
$stmt = $conn->prepare("INSERT INTO users(firstname, lastname, email)VALUES(?,?,?)");
//Bind prepare statement
$stmt->bind_param("sss", $firstname, $lastname, $email);
//sss = this argument signify that the 3 parameters above are all strings
//set parameters and execute
$firstname = "Jon";
$lastname = "Mcdonald";
$email = "jmcdonald@gmail.com";
$stmt->execute();

$firstname = "Abe";
$lastname = "Lincoln";
$email = "alincoln@gmail.com";
$stmt->execute();

$firstname = "Josh";
$lastname = "Bosh";
$email = "jbosh@gmail.com";
$stmt->execute();

echo "New Records Created";
//close statement and database connection
$stmt->close();
$conn->close();
 ?>
