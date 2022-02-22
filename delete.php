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
if(isset($_GET["message"])){
  //check if message = not null
  if(($_GET["message"])=="delete"){
    echo "Record deleted <br><br>";
  }
}
$sql = "SELECT id, firstname, lastname, email FROM users";
$result = $conn->query($sql);
 ?>
 <table width="300" border="1" cellspacing="1" cellpadding="1">
   <?php
   if($result->num_rows > 0){
     //output data of each row
     while($row = $result->fetch_assoc()){
    ?>
    <tr>
      <td>ID</td>
      <td><?php echo $row["id"]; ?></td>
      <td>
        <a href="deluser.php?id=<?php echo $row["id"]; ?>">Delete</a>
        <br><a href="update.php?id=<?php echo $row["id"] ?>">Update</a>
      </td>
    </tr>
    <tr>
      <td>First Name</td>
      <td><?php echo $row["firstname"]; ?></td>
      <td>&nbsp</td>
    </tr>
    <tr>
      <td>Last Name</td>
      <td><?php echo $row["lastname"]; ?></td>
      <td>&nbsp</td>
    </tr>
    <tr>
      <td>Email</td>
      <td><?php echo $row["email"]; ?></td>
      <td>&nbsp</td>
    </tr>
    <?php
      }
    ?>
 </table>
 <?php
}else{
  echo "0 results";
}
$conn->close();
?>
