<?php
// Include database connection file
$servername = "localhost"; // Change this to your MySQL server address if needed
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$database = "CollegeWeb"; // Change this to your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
} else {
   
    echo "Connected successfully";
}

// Function to sanitize form inputs
// function sanitize_input($data) {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }

// Validate and sanitize form inputs
// $fullName = sanitize_input($_POST['fullName']);
// $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
// $password1 = sanitize_input($_POST['password']);
// $branch = sanitize_input($_POST['branch']);
// $class = sanitize_input($_POST['class']);
// $batch = sanitize_input($_POST['batch']);

// $fullName = $_POST['fullName'];
// $email = $_POST['email'];
// $password1 = $_POST['password'];
// $branch = $_POST['branch'];
$title = $_POST['title'];
$file_url = $_POST['file_url'];
$branch=$_POST['branch'];
$batch=$_POST['batch'];


// Basic validation
if (empty($title) || empty($file_url) ||empty($branch) || empty($batch)) {
    die("All fields are required");
}

// Additional validation (e.g., email format)


// Insert data into database
$sql = "INSERT INTO assignment (title,file_url,branch,batch) VALUES ('$title','$file_url','$branch','$batch')";

if ($conn->query($sql) === TRUE) {
    header("Location: ./facultyHome.php");
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
