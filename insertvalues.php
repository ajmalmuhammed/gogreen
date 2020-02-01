<?php
 $name=$_POST["username"];
// echo "Submitted".$name."hello";
 $place=$_POST["placename"];
 $phone=$_POST["contactnumber"];
 $email=$_POST["emailname"];

$servername = "localhost";
$username = "testuser";
$password = "pass";
$db="gogreen";

// Create connection
 $conn = mysqli_connect($servername, $username, $password, $db);
 $sql = "INSERT INTO userdetails(username,place,contact,email) VALUES('$name','$place','$phone','$email')";
 if(mysqli_query($conn, $sql)){
 //    echo "Records inserted successfully.";
 } else{
     echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
 }
 mysqli_close($conn)
 // Check connection
//  if (!$conn) {
//      die("Connection failed: ");
//      }
//      echo "Connected successfully";
  
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sreshta | Go Green</title>
</head>
<body>
<h1> Thank you we will contact you soon <a href="index.html">Home.</a></h1>
</body>
</html>