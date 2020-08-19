<?php   
session_start();  
if(!isset($_SESSION["sess_user"])){  
    header("location:login.php");  
}  
?>  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test4Job</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

</head>

<body>
    <!--------------------- Header --------------------->
    <header>
        <h1>
            <a href="../index.php"><span>TEST</span>4JOB</a>
        </h1>
        <div style="display: flex; align-items: center;">
            <nav>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="./profile.php">Test</a></li>
                    <li><a href="./about.php">About Us</a></li>
                </ul>
            </nav>
            <a href="./login.php" id="login">Login</a>
            <a href="./signup.php" id="signup">Sign Up</a>
        </div>
    </header>
    <!--------------------- profile --------------------->
    <div class="profile-container">
        <div class="profile-menu">
            <div class="image-container">
                <img src="../img/me.jpg " alt="zeinab">
                <h4 class="name">Zeinab</h2>
                    <p class="email">zineb.ibnelamyne@gmail.com</p>
                    <p class="username">zeinab.org</p>
            </div>

            <ul class="ul">
                <li class="li" id="active">Informations</li>
                <li class="li" id="active">Tests</li>
                <li class="li" id="description">Description </li>
                <div class="description">My name is zineb ibnelamyn i'm so motivated for the job in your company,
                    i'm
                    serious and funny and talented and i want to work with you in any time you want i'm ready

                </div>
            </ul>
        </div>
        <div class="profile-content">
            <div class="pic">
                <span class="activity">Account ID : </span>
            </div>
            <div style="display: flex; flex-direction: row; justify-content: space-around;">
                <div>
                    <label>Email</label><br>
                    <input placeholder="email">
                </div>
                <div>
                    <label>Username</label><br>
                    <input placeholder="username">
                </div>
            </div>
            <div style="display: flex; flex-direction: row; justify-content: space-around;">
                <div>
                    <label>First Name</label><br>
                    <input placeholder="First Name">
                </div>
                <div>
                    <label>Last Name</label><br>
                    <input placeholder="Last Name">
                </div>
            </div>
            <div class="adress">
                <label>Adress</label><br>
                <input placeholder="Adress" id="adress">
            </div>
            <div style="display: flex; flex-direction: row; margin-left: 20px;">
                <div style=" margin-right: 20px;">
                    <label>City</label><br>
                    <input placeholder="city" id="city">
                </div>
                <div style=" margin-right: 20px;">
                    <label>State</label><br>
                    <select id="state">
                        <option value="" selected>Select your option</option>
                        <option value="hurr">Durr</option>
                    </select>
                </div>
                <div style="justify-content: center; align-self: center;">
                    <label>C.V</label><br>
                    <input id="cv" type="file">
                </div>
            </div>
            <div class="adress">
                <label>Description</label><br>
                <input id="description-input">
            </div>
            <form action="./profileInfo.php">
                <button id="button">Save changes</button>
            </form>
        </div>
    </div>
    <script src="./profile.js"></script>
</body>

</html>
 