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
if (!isset($_SESSION['email'])) {
    echo "Email not found in session.";
    exit;
}

// Retrieve email from session
$email = $_SESSION['email'];

// Fetch student profile from the database based on email
$query = "SELECT * FROM student WHERE email = '$email'";
$result = $conn->query($query);
// $student=''
// Check if student profile exists
if ($result->num_rows > 0) {
    // $student = $result->fetch_assoc();
    // Generate HTML form with student details
    // echo "<h2>Student Profile</h2>";
    // echo "<p><strong>Full Name:</strong> " . $student['full_name'] . "</p>";
    // echo "<p><strong>Password:</strong> " . $student['password'] . "</p>";
    // echo "<p><strong>Email:</strong> " . $student['email'] . "</p>";
    // echo "<p><strong>Batch:</strong> " . $student['batch'] . "</p>";
    // echo "<p><strong>Branch:</strong> " . $student['branch'] . "</p>";
    // echo "<p><strong>Class:</strong> " . $student['class'] . "</p>";
}

// Close database connection
$conn->close();

?>
