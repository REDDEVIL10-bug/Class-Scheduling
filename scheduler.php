<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./scheduler.css">
    <div class="navigationbar">
        <p class="right"><a href="./profile.php" style='color:white';>Profile</a></p>
        <a href="./dashboard.php"><p class="center">Dashboard</p></a>
    </div>
</head>
<main class="m">
    <br>
    <?php session_start() ?>
    <script>
        window.username = "<?php echo $_SESSION['username']; ?>";
        window.color ="<?php echo $_SESSION['color']; ?>";
        window.course_code ="<?php echo $_SESSION['course_code'];?>";
    </script>

    <!-- <form action="phpscheduler.php" method="post">
        <input type="submit" value="Submit">
    </form> -->

    <div class="box">
        <table>
            <tr class="time">
                <td>TIME</td>
                <td><p>9:00-10:00</p></td>
                <td><p>10:00-11:00</p></td>
                <td><p>12:00-1:00</p></td>
                <td><p>1:00-2:00</p></td>
                <td><p>2:00-3:00</p></td>
            </tr>
            <tr class="container">
                <td><p class="day">Sunday</p></td>
                <td><button id="11" class="b"><p id="p11">Select slot</p></button></td>
                <td><button id="12" class="b"><p id="p12">Select slot</p></button></td>
                <td><button id="13" class="b"><p id="p13">Select slot</p></button></td>
                <td></td>
                <td><button id="14" class="b"><p id="p14">Select slot</p></button></td>
            </tr>
            <tr class="container">
                <td><p class="day">Monday</p></td>
                <td><button id="21" class="b"><p id="p21">Select slot</p></button></td>
                <td><button id="22" class="b"><p id="p22">Select slot</p></button></td>
                <td><button id="23" class="b"><p id="p23">Select slot</p></button></td>
                <td></td>
                <td><button id="24" class="b"><p id="p24">Select slot</p></button></td>
            </tr>
            <tr class="container">
                <td><p class="day">Tuesday</p></td>
                <td><button id="31" class="b"><p id="p31">Select slot</p></button></td>
                <td><button id="32" class="b"><p id="p32">Select slot</p></button></td>
                <td><button id="33" class="b"><p id="p33">Select slot</p></button></td>
                <td><p>Lunch Break</p></td>
                <td><button id="34" class="b"><p id="p34">Select slot</p></button></td>
            </tr>
            <tr class="container">
                <td><p class="day">Wednesday</p></td>
                <td><button id="41" class="b"><p id="p41">Select slot</p></button></td>
                <td><button id="42" class="b"><p id="p42">Select slot</p></button></td>
                <td><button id="43" class="b"><p id="p43">Select slot</p></button></td>
                <td></td>
                <td><button id="44" class="b"><p id="p44">Select slot</p></button></td>
            </tr>
            <tr class="container">
                <td><p class="day">Thursday</p></td>
                <td><button id="51" class="b"><p id="p51">Select slot</p></button></td>
                <td><button id="52" class="b"><p id="p52">Select slot</p></button></td>
                <td><button id="53" class="b"><p id="p53">Select slot</p></button></td>
                <td></td>
                <td><button id="54" class="b"><p id="p54">Select slot</p></button></td>
            </tr>
        </table>
    </div>
    <script src="./scheduler.js"></script>
</main>
<footer>
    <div class="footer">
        <p>Copyright@Siam_Sharif_Ami</p>
    </div>
</footer>
</html>