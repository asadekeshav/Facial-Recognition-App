<?php
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

header('Content-Type: application/json');

// Get the data sent from the frontend
$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['username']) && isset($data['descriptor'])) {
    $username = $data['username'];
    $descriptor = json_encode($data['descriptor']); // Convert the descriptor array to a JSON string

    // Check if the face already exists for the given username
    $checkQuery = $conn->prepare("SELECT * FROM tblfaces WHERE username = ?");
    $checkQuery->bind_param("s", $username);
    $checkQuery->execute();
    $result = $checkQuery->get_result();

    if ($result->num_rows > 0) {
        // If face data already exists, return an error
        echo json_encode(['status' => 'error', 'message' => 'This face is already stored.']);
    } else {
        // Insert the new face data into the database
        $insertQuery = $conn->prepare("INSERT INTO tblfaces (username, descriptor) VALUES (?, ?)");
        $insertQuery->bind_param("ss", $username, $descriptor);

        if ($insertQuery->execute()) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Error saving face data.']);
        }
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid input data.']);
}

// Close the connection
$conn->close();
?>