<?php

$email = $_POST['login'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$pw = $_POST['password'];
$address = $_POST['address'];
$name = $fname . $lname;

$servername = "localhost";
$username = "111117";
$password = "saltaire";

try {
  $conn = new PDO("mysql:host=$servername;dbname=111117", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$sql = "INSERT INTO store_logins (Email, name, address, password)
VALUES ('$email', '$name', '$address', '$pw')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn = null;

header('Location: login.php');
?>