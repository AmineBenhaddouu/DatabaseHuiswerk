<?php
$servername = "localhost";
$username = "root";
$password = "Amines";
$dbname = "winkel";
 
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
echo "Connected to database ($dbname)";
?>
