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
$class = sanitize_input($_POST['class']);
$batch = sanitize_input($_POST['batch']);
$branch = sanitize_input($_POST['branch']);

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

// Insert data into database
$sql = "INSERT INTO student (fullName, email, password, class, batch, branch) VALUES ('$fullName', '$email', '$password1', '$class', '$batch', '$branch')";

if ($conn->query($sql) === TRUE) {
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['fullName'] = $fullName;
    $_SESSION['branch'] = $branch;
    $_SESSION['class'] = $class;
    $_SESSION['batch'] = $batch;
    $_SESSION['role'] = "student";
    header("Location: ./studentHome.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
