<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="./signup.css">
   
</head>
<body>
    <div class="navbar">
        <p>Welcome to Class Scheduling Application Interface</p>
    </div>
    <div class="main">
        <div class="design">
            <h1>Class Scheduler</h1>
            <p>This is all new class scheduler of Department of Information And Communication Engineering.
                This project is for the purpose of benefitting the students and teachers of ICE.
            </p>
            <img src="./resources/login.svg">
        </div>
        <div class="box" align="center">
            <form action="phpsignup.php" method="post" class="form-examples">
                <h2>Signup Page</h2></h3>
                <div class="form-example">
                <input type="text" name="username" id="username" placeholder="Enter your Name" required>
                </div>
                <div class="form-example">
                <input type="email" name="email" id="email" placeholder="Enter your Email Address" required>
                </div>
                <div class="form-example">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                </div>
                <div class="form-example">
                    <input type="text" name="course_code" id="course_code" placeholder="Enter Course Code" required>
                </div>
                <div class="form-example">
                    <input type="text" name="color" id="color" placeholder="Enter your color choice" required>
                </div>
                <div type="submit" value="Sign Up">
                    <button>Submit</button>
                </div>
            </form>
        </div>
        
    </div>
</body>
<footer>
    <div class="footer">
        <p>Copyright@Siam_Sharif_Ami</p>
    </div>
</footer>
</html>