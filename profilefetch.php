<?php
    session_start();
    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
        echo "<h2>Name: " . $username."</h2><br>";
    }else{
        echo "You are not logged in";
    }
    $conn = new mysqli("localhost", "root", "", "class scheduling");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $query = "select email,course_code,color from users where username='$username'";
    $result= $conn->query($query);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<h2>Email: " . $row["email"]."</h2><br>";
            echo "<h2>Course code: ".$row["course_code"]."</h2><br>";
            echo "<h3>Color: ".$row["color"]."</h3><br>";
        }
    } else {
        echo "No results found";
    }
    $conn->close();
?>