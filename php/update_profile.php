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

// Function to sanitize form inputs
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Validate and sanitize form inputs
$fullName = sanitize_input($_POST['fullName']);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$password1 = sanitize_input($_POST['password']);
$branch = sanitize_input($_POST['branch']);
$class = sanitize_input($_POST['class']);
$batch = sanitize_input($_POST['batch']);
$id=$_POST['studentId'];
// $fullName = $_POST['fullName'];
// $email = $_POST['email'];
// $password1 = $_POST['password'];
// $branch = $_POST['branch'];
// $class = $_POST['class'];
// $batch = $_POST['batch'];

// Basic validation
if (empty($fullName) || empty($email) || empty($password1) || empty($class) || empty($batch) || empty($branch)) {
    die("All fields are required");
}

// Additional validation (e.g., email format)
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format");
}

// Validate email domain
if (strpos($email, '@gecg28.ac.in') === false) {
    die("Email must belong to @gecg28.ac.in domain");
}

$int_id = intval($id);
    $sql = "UPDATE student SET fullName = '$fullName',email = '$email',password = '$password1',batch = '$batch',class = '$class',branch = '$branch' WHERE studentId = $int_id";
    // if ($conn->query($sql) === TRUE) {
    //     header("Location: ./facultyHome.php");
       
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }
    if($conn->query($sql) === TRUE){
        header("Location: ./studentHome.php");
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
