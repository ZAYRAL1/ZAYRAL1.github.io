<?php
$servername = "localhost";
$username = "carritoej238y";
$password = "olivas001022";

try {
  $conn = new PDO("mysql:host=localhost;dbname=$username", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
  echo "<br>";
} catch(PDOException $e) {
  echo "Connection failed: :( " . $e->getMessage();
  echo "<br>";
}
?>