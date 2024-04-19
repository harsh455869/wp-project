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
echo 'connection successfully';
$item_id= $_POST['item_id'];
$int_id = intval($item_id);
    $sql = "DELETE FROM timetable WHERE timetableId = $int_id";

    if($conn->query($sql) === TRUE){
        header("Location: ./facultyHome.php");
    } else{
        echo "ERROR: Could not able to execute";
    }



$conn->close();

?>
