<?php
$servername = "localhost";
$username = "root";
$password = "5750";
$dbname = "DATA";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully". "<br>";

// $sql = "CREATE TABLE fatura (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// urunadi VARCHAR(30) NOT NULL,
// adet int(3) NOT NULL,
// fiyat int(3) NOT NULL
// )";

// if ($conn->query($sql) === TRUE) {
// 	echo "Table MyGuests created successfully";
// } else {
// 	echo "Error creating table: " . $conn->error;
// }






?>
