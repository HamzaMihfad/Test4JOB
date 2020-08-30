<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test4Job</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="./login.css">
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
          <li><a href="./profileInfo.php">Test</a></li>
          <li><a href="./about.php">About Us</a></li>
        </ul>
      </nav>
      </div>
      <div class="dropdown">
  <a href="./signup.php" id="signup">Signup</a>
</div>
  </header>
    <!--------------------- section --------------------->
    <div id="form_wrapper">
        <div id="form_left">
            <img src="../img/login.png" alt="test">
        </div>
       
        <form id="form_right" method="POST" action="">
            <h1 style="color: #fa5914">Sign In / Sign Up</h1>
            <div class="input_container">
                <i class="fas fa-envelope" id='icon'></i>
                <input placeholder="Email / Username" required name="email" id="field_email" class='input_field'>
            </div>
            <div class="input_container">
                <i class="fas fa-lock" id='icon'></i>
                <input placeholder="Password" required type="password" name="pass" id="field_password" class='input_field'>
            </div>
            <input type="submit" value="Login" id='input_submit' name='submit' class='input_field'>
            <span>Forgot <a href="#"> Username / Passwrd ?</a></span><br>
            <span id='create_account'>
                <a href="./signup.php">Create your account ➡ </a>
            </span>

<div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, 'test4job');

$message="";
if(count($_POST)>0) {
    $email=$_POST['email'];  
    $pass=$_POST['pass'];  
    $hashed = hash('sha512', $pass);
	$result = mysqli_query($conn,"SELECT username FROM login WHERE (username='$email' OR email='$email') and password = '$hashed' ");
    $count  = mysqli_num_rows($result);
	if($count==0) {
		 echo "Invalid Username or Password!";
	} else {
    session_start(); 
    $row = mysqli_fetch_array($result); 
    $_SESSION['sess_user']= $row['username'];;  
    /* Redirect browser */  
    header("Location: profileInfo.php");  
	}
}
?>


 </div>
 </form>
    </div>
    
    <!--------------------- footer --------------------->

    <footer>
        <p>Test4JOB, Copyright &copy; 2020</p>
    </footer>
      
</body>

</html>