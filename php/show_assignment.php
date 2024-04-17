<?php

// Database configuration
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$database = "CollegeWeb"; // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Start or resume session
session_start();

// Check if email is stored in session


// Retrieve email from session
// $email = $_SESSION['email'];
// $batch=$_SESSION['batch'];
// $branch=$_SESSION['branch']

// Fetch student profile from the database based on email
$query = "SELECT * FROM assignment";
$ass = $conn->query($query);
// $ass = $result->fetch_assoc();
// $student=''
// Check if student profile exists

// Close database connection
$conn->close();

?>
