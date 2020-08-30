<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact V15</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../img/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="./contactUs.css">
    <link rel="stylesheet" href="../style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link href="../icons/css/all.css" rel="stylesheet"> <!--load all styles -->
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">

    <!--===============================================================================================-->
</head>

<body>
    <header>
        <h1>
            <a href="../index.php"><span>TEST</span>4JOB</a>
        </h1>
        <div style="display: flex; align-items: center;">
            <nav>
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="./profile.php">Test</a></li>
                    <li class=""><a href="">About Us</a></li>
                </ul>
            </nav>
        </div>
        <div>
            <?php session_start();  
          if(isset($_SESSION["sess_user"])): ?>
            <div class="dropdown">
                <i class="fas fa-user fa-lg" class='dropbtn'></i>
                <div class="dropdown-content">
                    <a href="./profileInfo.php" id="signup">profile</a>
                    <a href="./logout.php" id='signup'>Logout</a>
                </div>
                <?php elseif (isset($_SESSION["sess_company"])): ?>
                <div class="dropdown">
                    <i class="fas fa-user-tie" class='dropbtn'></i>
                    <div class="dropdown-content">
                        <a href="./logout.php" id='signup'>Logout</a>
                    </div>
                    <?php else : ?>
                    <div class="dropdown">
                        <p class='dropbtn' id='login'>connect</p>
                        <div class="dropdown-content">
                            <a href="./menu/login.php" id="signup">Login</a>
                            <a href="./menu/signup.php" id="signup">Sign Up</a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
    </header>

    <div class="container-contact100">
        <div class="contact100-map" style="background-image: url(../img/contactus-background.jpg); position: absolute;
    width: 100%;"></div>

        <div class="wrap-contact100">
            <div class="contact100-form-title" style="background-image: url(../img/bg-01.jpg);">
                <span class="contact100-form-title-1">
                    Contact Us
                </span>

                <span class="contact100-form-title-2">
                    Feel free to drop us a line below!
                </span>
            </div>

            <form class="contact100-form validate-form">
                <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <span class="label-input100">Full Name:</span>
                    <input class="input100" type="text" name="name" placeholder="Enter full name">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <span class="label-input100">Email:</span>
                    <input class="input100" type="text" name="email" placeholder="Enter email addess">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Phone is required">
                    <span class="label-input100">Phone:</span>
                    <input class="input100" type="text" name="phone" placeholder="Enter phone number">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Message is required">
                    <span class="label-input100">Message:</span>
                    <textarea class="input100" name="message" placeholder="Your Comment..."></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
                        <span>
                            Submit
                            <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="js/main.js"></script>


</body>

</html>