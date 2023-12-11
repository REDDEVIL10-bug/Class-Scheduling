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

$sql = "select * from value where val='1'";
$result= $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $merge=$row["days_id"].$row["time_id"];
        $email=$row["email"];
        $stmt="select color,course_code from users where email='$email'";
        $secresult= $conn->query($stmt);
        if($secresult->num_rows >0){
            while($secrow = $secresult->fetch_assoc())
            {
                echo "<script>
                    var color='".$secrow["color"]."';
                    var course_code='".$secrow["course_code"]."';
                    var merge='".$merge."';
                    document.getElementById('merge').addEventListener('click', function() {
                        this.style.backgroundColor = 'color';
                        document.getElementById('p11').innerHTML='course_code';
                    });
                </script>";
            }
        }
    }
} else {
    echo "No results found";
}
$conn->close();
?>