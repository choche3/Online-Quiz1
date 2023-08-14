<?php

    include "connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let me QUIZ-Login Page</title>


    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <link rel="stylesheet" href="css1/font-awesome.min.css">
    <link rel="stylesheet" href="css1/owl.carousel.css">
    <link rel="stylesheet" href="css1/owl.theme.css">
    <link rel="stylesheet" href="css1/owl.transitions.css">
    <link rel="stylesheet" href="css1/animate.css">
    <link rel="stylesheet" href="css1/normalize.css">
    <link rel="stylesheet" href="css1/main.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css1/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header class="header">
        <a href="#" class="logo">QUIZZED</a>

        <div class="menu-toggle">
            <div class="hamburger"></div>
        </div>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <!--got rid of the "scores ref"-->
            <a href="register.php">Register</a>
            <!--<a href="login.php">Login</a>-->
        </nav>
    </header>

    <section class="section">
        <div class="wrapper">
            <div class="logreg-box">
                <div class="form-box login">
                    <div class="logreg-title">
                        <h2>Login</h2>
                        <p>Please login to use the platform</p>
                    </div>

                    <form action="#" name="form1" method="post">
        
                        <div class="input-box">
                        <span class="icon"><i class='bx bxs-user'></i></span>
                        <input type="text" name="username" class="form-control" required>
                        <label>Username</label>
                        </div>

                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                            <input type="password" name="password" class="form-control" required>
                            <label>Password</label>
                        </div>

                        <div class="remember-forgot">
                            <a href="#">Forgot Pasword?</a>
                        </div> <br>

                        <button type="login" name="login" class="btn btn-success btn-block loginbtn">Login</button>

                        <div class="alert alert-danger" id="error" style="margin-top: 10px; display: none; background-color: transparent; border: none; color: white">
                        <strong display: none;>Does Not Match!</strong> Invalid Username or Password.
                        </div>

                        <div class="logreg-link">
                            <p>Don't have an account?
                                <a href="register.php" class="register-link">Register</a>
                                <img src="" alt="">
                            </p>
                        </div>
                        
                    </form>
                </div>
            </div>

        <?php

            if(isset($_POST["login"]))
            {
                $count=0;
                $res=mysqli_query($link,"select * from registration where username='$_POST[username]' && password='$_POST[password]'");

                $count=mysqli_num_rows($res);
                if ($count==0){
                                ?>
                                <script type="text/javascript">
                                    document.getElementById("error").style.display = "block";
                                </script>
                                <?php
                }else{
                    ?>
                    <script type="text/javascript">
                        window.location="home.php";
                    </script>
                    <?php
                }

            }
            
        
        ?>

            <div class="media-options">
                <a href="#">
                    <i class="bx bxl-google"></i>
                    <span>Google</span>
                </a>
                <a href="#">
                    <i class="bx bxl-facebook-circle"></i>
                    <span>Facebook</span>
                </a>
            </div>

        </div>
    </section>

    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery-price-slider.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>

</body>
</html>
