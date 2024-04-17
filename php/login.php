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
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$password1 = sanitize_input($_POST['password']);
$role = sanitize_input($_POST['role']);

// Basic validation
if (empty($email) || empty($password1) || empty($role)) {
    die("All fields are required");
}
$sql="";
switch ($role) {
    case 'student':
        $sql = "SELECT * FROM student WHERE email='$email' AND password='$password1'";
        break;
    case 'faculty':
        $sql = "SELECT * FROM faculty WHERE email='$email' AND password='$password1'";
        break;
    case 'admin':
        $sql = "SELECT * FROM admin WHERE email='$email' AND password='$password1'";
        break;
    default:
        die("Invalid role");
}
// Query database to check if user exists

$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // User authentication successful
    // $student = $result->fetch_assoc();
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['role'] = $role;
    // $_SESSION['branch'] = $student['branch'];
    // $_SESSION['batch'] = $student['batch'];
    // $_SESSION['class'] = $student['class'];
    $_SESSION['role'] = $role;
    
    // Redirect based on user role
    switch ($role) {
        case 'student':
            header("Location: ./studentHome.php");
            break;
        case 'faculty':
            header("Location: ./facultyHome.php");
            break;
        case 'admin':
            header("Location: ../components/adminView.html");
            break;
        default:
            die("Invalid role");
    }
} else {
    // User authentication failed
    echo "Invalid email, password, or role";
}

$conn->close();
?>
