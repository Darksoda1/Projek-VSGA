<?php
$servername = "localhost"; // Change this if your database server is different
$username = "root";        // Your database username
$password = "";            // Your database password
$dbname = "kamarhotel"; // Your database name

// Create connection
$koneksi = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}
?>
