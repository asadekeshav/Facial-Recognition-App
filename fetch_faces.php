
<?php
// fetch_faces.php

// Database configuration
$servername = "localhost";
$username = "realcampaign_root"; // Your MySQL username
$password = "NewSoft@2013"; // Your MySQL password
$dbname = "dbrealcampaign"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username, descriptor FROM tblfaces";
$result = $conn->query($sql);

$faces = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $faces[] = [
            'username' => $row['username'],
            'descriptor' => json_decode($row['descriptor'])  // Ensure the descriptor is a valid JSON array
        ];
    }
}

$conn->close();

// Return the data as JSON
header('Content-Type: application/json');
echo json_encode($faces);
?>