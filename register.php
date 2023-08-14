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
    
    <link rel="stylesheet" href="style.css">
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
            <!-- removed scores-->
           <!-- <a href="register.php">Register</a>-->
            <a href="login.php">Login</a>
        </nav>

    </header>

<section class="section">
    <div class="wrapper">
        
        <div class="logreg-box">
            <div class="form-box login">
                <div class="logreg-title">
                    <h2>Registration</h2>
                    <p>Please login to use the platform</p>
                </div>

                <form action="" name="form1" method="post">
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user'></i></span>
                        <input type="text" name="firstname" class="form-control" required>
                        <label>FirstName</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user'></i></span>
                        <input type="text" name="lastname" class="form-control" required>
                        <label>LastName</label>
                    </div>

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

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" name="email" class="form-control" required>
                        <label>Email</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-phone'></i></span>
                        <input type="tel" name="contact" class="form-control" required>
                        <label>Phone</label>
                    </div>

                    <button type="submit" name="submit" class="btn btn-success loginbtn">Create</button>

                    <div class="logreg-link">
                            <p>Already have an account?
                                <a href="login.php" class="register-link">Login</a>
                                <img src="" alt="">
                            </p>
                        </div>
                    <div class="alert alert-success" id="success" style="margin-top: 10px; background-color: transparent; border: none; display: none; color: white">
                    <strong>Success!</strong> Account Registered Successfully.
                    </div>

                    <div class="alert alert-danger" id="error" style="margin-top: 10px; display: none; background-color: transparent; border: none; color: white">
                    <strong display: none;>Error!</strong> Username Already Exists.
                    </div>


                    <?php
                            if(isset($_POST["submit"])){
                            $res = mysqli_query($link, "select * from registration where username='$_POST[username]'") or die(mysqli_error($link));
                            $count = mysqli_num_rows($res);

                            if($count > 0){
                                ?>
                                <script type="text/javascript">
                                    document.getElementById("success").style.display = "none";
                                    document.getElementById("error").style.display = "block";
                                </script>
                                <?php
                            } else {
                                mysqli_query($link, "insert into registration values(NULL, '$_POST[firstname]', '$_POST[lastname]', '$_POST[username]', '$_POST[password]', '$_POST[email]', '$_POST[contact]')");
                                ?>
                                <script type="text/javascript">
                                    document.getElementById("success").style.display = "block";
                                    document.getElementById("error").style.display = "none";
                                </script>
                                <?php
                            }

                        }
                    ?>

                    <div class="logreg-link">
                        <p> Continue with
            
                        </p>
                    </div>
                    
                </form>
            </div>
        </div>

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
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script src="script.js"></script>
</body>
</html>
