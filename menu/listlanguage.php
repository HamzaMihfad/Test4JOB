<?php   
session_start();  
if(!isset($_SESSION["sess_user"])){  
    header("location:login.php");  
}  
else {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, 'test4job');
    $result = mysqli_query($conn,"SELECT * FROM user_info WHERE username = '".$_SESSION['sess_user']."'");
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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="listlanguage.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="../icons/css/all.css" rel="stylesheet"> <!--load all styles -->

    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"> -->
 
</head>

<body onload="setup()">
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
    <!--------------------- list --------------------->
    <div class="title">
            <h2>How Test4Job works</h2>
        </div>


<div class="container_features">
    <div class="row">
        <div class="col-md-3 col-xs-12 text-center">
            <div>
            <img src="https://img.icons8.com/color/96/000000/test-passed.png"/>
                <h5>
                    1. Choose a test from the list
                </h5>
                    <p>
                        Pick from 4 pre-built tests, mix and match skills, tweak and add questions.
                    </p>
            </div>
        </div>
        <div class="col-md-3 col-xs-12 text-center">
            <div>
            <img src="https://img.icons8.com/color/96/000000/leaderboard.png"/>
                  <h5>2. Review overall results and pass/fail grouping</h5>
                    <p>
                        Check out the test results and see the overall breakdown of the pass/fail .
                    </p>
            </div>
        </div>
        <div class="col-md-3 col-xs-12 text-center">
            <div>
            <img src="https://img.icons8.com/color/96/000000/ratings.png"/>
                            <h5>3. Dive deeper into individual results</h5>
                    <p>
                        Get a detailed report for each individual candidate and it's skills.
                    </p>
            </div>
        </div>
    </div>
</div>
<div class='underline'></div>

<?php  
if(isset($_SESSION["sess_user"])){  
  echo "<div class='title'>start your test</div>";  
}?>
<?php  
if(isset($_SESSION["sess_company"])){  
  echo "<div class='title'>choose a test to see the candidats</div>";  
}?>
  <div class='main'>
    <div class="cont">
    
    <div  class='lang_cont' >
      <div class="language">
      <a href="./tests/html.php">
      <img src="../img/html.png" alt="html5" />
      </a>
      </div>
      <span class="name">HTML</span>
    </div>
      
    <div  class='lang_cont'>
      <div class="language">
      <a href="./tests/javascript.php">
        <img src="../img/js.png" alt="js" style="height:216px" />
        </a>
      </div>
      <span class="name">JAVASCRIPT</span>
      </div>

      <div class='lang_cont'>
      <div class="language">
      <a href="./tests/php.php">
        <img src="../img/php.png" alt='php' style="width: 85%; margin: 35px 0;height: 150px;" />
        </a>
      </div>
      
      <span class="name">PHP</span>
    
</div>


<div  class='lang_cont' >
      <div class="language">
      <a href="./tests/mysql.php">
        <img src="../img/sql.png" alt="sql" style="height:190px" />
        </a>
      </div>
      <span class="name">SQL</span>
      </div>
    </div>
</div>

   <!--------------------- footer --------------------->

   <footer>
    <p>Test4JOB, Copyright &copy; 2020</p>
  </footer>
</body>

</html>