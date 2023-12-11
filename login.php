<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    
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
            <div class="slideshow">
            <img src="./ScreenShots/calendar-svgrepo-com.svg" alt="image3">
                <img src="./ScreenShots/calendar-svgrepo-com (3).svg" alt="image3">
                <img src="./ScreenShots/calendar-svgrepo-com (4).svg" alt="image4">
            </div>
            <script>
                var slideIndex = 0;
                showSlides();

                function showSlides() {
                    var i;
                    var slides = document.getElementsByTagName("img");
                    for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                    }
                    slideIndex++;
                    if (slideIndex > slides.length) {slideIndex = 1}
                    slides[slideIndex-1].style.display = "flex";
                    setTimeout(showSlides, 1500); // Change image every 2 seconds
                }
            </script>
            
        </div>
        
        <div class="box" align="center">
            <form action="phplogin.php" method="post" class="form-examples">
                <h2>Login Page</h2>
                <div class="form-example">
                <input type="text" name="username" id="username" placeholder="Enter User Name" required>
                </div>
                <div class="form-example" id="loginemail">
                    <input type="email" name="email" id="email" placeholder="Enter your Email Address" required>
                </div>
                <div class="form-example" id="loginpass">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                </div>
                <div class="submit" id="loginsubmit">
                    <input type="submit" placeholder="login">
                </div>
                <div class="form-example" id="loginsignup">
                    <a href="./signup.php">New in this page? Go to Signup</a>
                </div>
            </form>
        </div>
    </div>
    <footer>
    <div class="footer">
        <p>Copyright@Siam_Sharif_Ami</p>
    </div>
</footer>
</body>
</html>