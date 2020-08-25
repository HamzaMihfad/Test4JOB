<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Test4Job</title>
  <link rel="stylesheet" href="./style/style.css" />
  <link href="./icons/css/all.css" rel="stylesheet"> <!--load all styles -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet" />
</head>

<body>
  <!--------------------- Header --------------------->
  <header>
    <h1>
      <a href="./index.php"><span>TEST</span>4JOB</a>
    </h1>
    <div style="display: flex; align-items: center;">
      <nav>
        <ul>
          <li class="active"><a href="">Home</a></li>
          <li><a href="./menu/profile.php">Test</a></li>
          <li><a href="./menu/about.php">About Us</a></li>
        </ul>
      </nav>
      </div>
      <div>
      <?php session_start();  
      if(isset($_SESSION["sess_user"])): ?>
<div class="dropdown">
  <i class="fas fa-user fa-lg" class='dropbtn'></i>
  <div class="dropdown-content">
          <a href="./menu/profile.php" id="signup">profile</a>
          <a href="./menu/logout.php" id='signup'>Logout</a>
          </div>
 <?php elseif (isset($_SESSION["sess_company"])): ?>
  <div class="dropdown">
  <i class="fas fa-user-tie" class='dropbtn'></i>
  <div class="dropdown-content">
          <a href="./menu/logout.php" id='signup'>Logout</a>
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

  
  <!--------------------- section --------------------->
  <section>
    <img src="./img/bg.png" alt="" id="bglanding" />
    <div id="landing">
      <h2 id="text">
        VALUE YOUR SKILLS <br />
        THE SMART WAY
      </h2>
      <div>

      <?php if(!isset($_SESSION["sess_company"])): ?>
        <a href="./menu/test.php" class="candidate button"><span>Test Your Skills!</span></a>
        <?php endif; ?>

        <?php if(!isset($_SESSION["sess_user"]) && !isset($_SESSION["sess_company"])): ?>
        <a href="./menu/companySignUp.php" class="company button"><span>Are you a Company?</span></a>
        <?php endif; ?>

        <?php if(isset($_SESSION["sess_company"])): ?>
        <a href="./menu/test.php" class="company button"><span>View Test Results?</span></a>
        <?php endif; ?>

      </div>
    </div>
  </section>
  <main id="test">
    <h1>Supported languages:</h1>
    <div style="width: 100px; height: 8px; background: #3c61b9; margin: 20px;"></div>
    <div class="container">
      <div class="lang"><img src="./img/html.png" alt="html5" /></div>
      <div class="lang">
        <img src="./img/css.png" alt="css3" style="width: 80%;" />
      </div>
      <div class="lang">
        <img src="./img/js.png" alt="js" style="height:216px" />
      </div>
      <div class="lang">
        <img src="./img/php.png" alt="js" style="width: 85%; margin: 35px 0;
                height: 150px;" />
      </div>

      <div class="lang">
        <img src="./img/sql.png" alt="js" style="height:190px" />
      </div>
      <div class="lang"><img src="./img/java.png" alt="html5" /></div>
      <div class="lang">
        <img src="./img/terminal.png" alt="html5" style="width: 163px; height: 180px; margin: 25px 0;" />
      </div>

      <div class="lang">
        <img src="./img/python.png" alt="" style="width: 155px; height: 155px; margin: 25px 0;" />
      </div>
    </div>
  </main>

  <!--------------------- footer --------------------->

  <footer>
    <p>Test4JOB, Copyright &copy; 2020</p>
  </footer>
</body>

</html>