<?php 

$host = "localhost"; 
$username = "root"; 
$password = "Root123!"; 
$database = "tatang_playstation"; 

$conn = new mysqli($host, $username, $password, $database); 

if ($conn->connect_error) { 
    die("Koneksi gagal: " . $conn->connect_error); 
} 

?>