<?php   
session_start();  
if(!isset($_SESSION["sess_user"])){  
    header("location:login.php");  
}  

else {
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, 'user-registration');
$result = mysqli_query($conn,"SELECT * FROM user_info WHERE username = '".$_SESSION['sess_user']."' OR email = '".$_SESSION['sess_user']."'");
$row = mysqli_fetch_array($result);
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
    <link rel="stylesheet" href="profileinfo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="../icons/css/all.css" rel="stylesheet"> <!--load all styles -->

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
              <li><a href="../index.php">Home</a></li>
              <li><a href="./profile.php">Test</a></li>
              <li><a href="./about.php">About Us</a></li>
            </ul>
          </nav>
          </div>
          <div>
          
            <div class="dropdown">
      <i class="fas fa-user fa-lg" class='dropbtn'></i>
      <div class="dropdown-content">
              <a href="./profileInfo.php" id="signup">profile</a>
              <a href="./logout.php" id='signup'>Logout</a>
              </div>
        </div>
      </header>
    <!--------------------- profile --------------------->
    <div class="profile-container">
        <div class="profile-menu">
            <div class="image-container">
                <img src="../img/me.jpg " alt="zeinab">
                    <p class="email">zineb.ibnelamyne@gmail.com</p>
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
            <div>
                <div>
                <?php
                $user = $row['username'];
               echo "<label>".'username : '.$user."</label>" ?>
                </div>
                <div>
                <?php
                $user = $row['email'];
               echo "<label>".'email : '.$user."</label>" ?>
              
            </div>
            </div>
            <div>
                <div>
                    <label>First Name : zineb</label><br>
                </div>
                <div>
                    <label>Last Name : ibnelamyn</label><br>
                </div>
            </div>
            <div>
                <label>Adress : </label><br>
            </div>
            <div">
                <div>
                    <label>City : Birjdid</label><br>
                </div>
                <div>
                    <label>State : Morroco</label><br>

                </div>
                <div>
                    <label>C.V</label><br>
                </div>
                <button id="button"><a href="./profile.php">Update profile</a></button>

        </div>
    </div>
    </div>


    <script src="./profile.js"></script>
</body>

</html>