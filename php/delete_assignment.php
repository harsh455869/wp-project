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
    $sql = "DELETE FROM assignment WHERE assignmentId = $int_id";
    // if ($conn->query($sql) === TRUE) {
    //     header("Location: ./facultyHome.php");
       
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }
    if($conn->query($sql) === TRUE){
        header("Location: ./facultyHome.php");
    } else{
        echo "ERROR: Could not able to execute";
    }


// /

// Retrieve email from session

// Fetch student profile from the database based on email

    // Assuming you have some unique identifier for the item you want to delete, like an ID
    // $item_id = $_POST['item_id'];
    // echo $item_id;
// 

// $student=''
// Check if student profile exists
// if ($result->num_rows > 0) {
//     // $student = $result->fetch_assoc();
//     // Generate HTML form with student details
//     // echo "<h2>Student Profile</h2>";
//     // echo "<p><strong>Full Name:</strong> " . $student['full_name'] . "</p>";
//     // echo "<p><strong>Password:</strong> " . $student['password'] . "</p>";
//     // echo "<p><strong>Email:</strong> " . $student['email'] . "</p>";
//     // echo "<p><strong>Batch:</strong> " . $student['batch'] . "</p>";
//     // echo "<p><strong>Branch:</strong> " . $student['branch'] . "</p>";
//     // echo "<p><strong>Class:</strong> " . $student['class'] . "</p>";
// }

// Close database connection
$conn->close();

?>
