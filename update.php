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
$sql = "SELECT * FROM users WHERE id = '$id'";
$result = $conn->query($sql);
if($result->num_rows > 0){
  //output data of each row
  while($row = $result->fetch_assoc()){
    $fname = $row["firstname"];
    $lname = $row["lastname"];
    $email = $row["email"];
  }
  }else{
    echo "0 results";
  }
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>PHP - MySQL Lesson</title>
   </head>
   <body>
     <form action="updateuser.php" method="post">
       <table width="300" border="1" cellspacing="1" cellpadding="1">
         <tr>
           <td>First Name:</td>
           <td>
             <input type="text" name="fname" value="<?php echo $fname; ?>">
           </td>
         </tr>
         <tr>
           <td>Last Name:</td>
           <td>
             <input type="text" name="lname" value="<?php echo $lname; ?>">
           </td>
         </tr>
         <tr>
           <td>Email:</td>
           <td>
             <input type="text" name="email" value="<?php echo $email; ?>">
           </td>
         </tr>
         <tr>
           <td>&nbsp</td>
           <td>
             <input type="submit" value="update">
           </td>
         </tr>
       </table>
       <input type="hidden" name="id" value="<?php echo $id ?>">
     </form>
   </body>
 </html>
 <?php
 $conn->close();
  ?>
