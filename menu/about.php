<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test4Job</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="about.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link href="../icons/css/all.css" rel="stylesheet"> <!--load all styles -->
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
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
          <li class="active"><a href="">About Us</a></li>
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
    <div class="descrip">
        <p>

            When friends encourage each other and make a goal to reach, great things happen.<br>
            Our daily mission is to help people find the right job and companies find the right candidates, in the
            shortest timeframe. <br>
            we are giving you the possibility to take tests to improve your skills, and the recruters to select the best
            of you
        </p>
    </div>
    <div class="team">
        <div class="team-section">

            <h1 class="titre2">
                who are we ?
            </h1>
            <span class="border"></span>

            <div class="ps">
                <a href="#p1"><img src="../img/me.jpg " alt="zeinab"></a>
                <a href="#p2"><img src="../img/hamza.jpg " alt="hamza"></a>
                <a href="#p3"><img src="../img/zineb.jpg" alt="zineb"></a>
            </div>


            <div class="section" id="p1">

                <span class="name">ZINEB Ibnelamyn</span>
                <span class="border"></span>

            </div>


            <div class="section" id="p2">

                <span class="name">Hamza Mihdaf</span>
                <span class="border"></span>
            </div>


            <div class="section" id="p3">

                <span class="name">ZINEB Nidali</span>
                <span class="border"></span>

            </div>
        </div>
    </div>

    <!--------------------- footer --------------------->

    <footer>
        <p>Test4JOB, Copyright &copy; 2020</p>
    </footer>

</body>

</html>