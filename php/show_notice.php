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

// SQL query to select all notices
$sql = "SELECT * FROM college_notice";
$notice = $conn->query($sql);

// Check if there are any notices
if ($notice->num_rows > 0) {
    // Output data of each row
    // while($row = $notice->fetch_assoc()) {
    //     echo "Notice ID: " . $row["noticeId"]. " - Title: " . $row["title"]. " - Content: " . $row["file_url"]. "<br>";
    // }
} else {
    echo "No notices found";
}

// Close database connection
$conn->close();
?>
