<?php
$servername = "localhost";
$username = "u240461_recensies";
$password = "4nQp8QmuVD9Q5WtHWPut";
$dbname = "u240461_recensies";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "hendrik-hogendijk";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
  $conn->exec("SET NAMES utf8mb4");
  // set the PDO error mode to exception

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>