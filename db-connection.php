<?php
// Conectare la baza de date (înlocuiește cu informațiile tale de conectare)

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "style_design";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

?>