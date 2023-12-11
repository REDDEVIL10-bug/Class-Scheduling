<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "class scheduling";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$email=$_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email' and password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // start the session here
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['color']=$row["color"];
        $_SESSION['course_code']=$row["course_code"];
        header("Location: dashboard.php");
    }
} else {
    echo "Invalid username or password";
}

$conn->close();

