<?php
$servername ="localhost";
$username="root";
$password="";
$dbname="class scheduling";

//create connection
$conn=new mysqli($servername,$username,$password,$dbname);

//check connection
if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

$username= $_POST['username'];
$email= $_POST['email'];
$password = $_POST['password'];
$color=$_POST['color'];
$course_code=$_POST['course_code'];

$sql = "INSERT INTO users (username, email, password,course_code,color)
VALUES ('$username', '$email', '$password','$course_code','$color')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: login.php");
} else {
    echo "Error: Email already exists" . $sql . "<br>" . $conn->error;
}

$conn->close();