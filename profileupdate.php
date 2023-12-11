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

$available= $_POST["yesno"];
session_start();
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    echo "<h2>Name: " . $username."</h2><br>";
}else{
    echo "You are not logged in";
}

$sql = "INSERT INTO users (available)
VALUES ('$available') where username='$username.';";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: Email already exists" . $sql . "<br>" . $conn->error;
}

$conn->close();