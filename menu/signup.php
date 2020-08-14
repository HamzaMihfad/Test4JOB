<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test4Job</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="signup.css">
</head>

<body>
    <!--------------------- Header --------------------->
    <header>
        <h1><a href="../index.html"><span>TEST</span>4JOB</a></h1>
        <div style="display: flex; align-items: center;">
            <nav>
                <ul>
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="./test.html">Test</a></li>
                    <li><a href="./about.html">About Us</a></li>
                </ul>
            </nav>
            <a href="./login.php" id="login">Login</a>
        </div>
    </header>



    <!--------------------- section --------------------->
    <div id="form_wrapper">
        <div id="form_left">
            <img src="../img/signup.png" alt="test">
        </div>
       
        <form id="form_right" method="POST" action="">
            <h1 style="color: #fa5914">Sign Up</h1>
            <div class="input_container">
                <i class="fas fa-envelope"></i>
                <input placeholder="Email" type="email" name="user" id="field_email" class='input_field'>
            </div>
            <div class="input_container">
                <i class="fas fa-lock"></i>
                <input placeholder="Password" type="password" name="pass" id="field_password" class='input_field'>
            </div>
            <div class="input_container">
                <i class="fas fa-lock"></i>
                <input placeholder="confirm Password" type="password" name="confirmpass" id="field_password" class='input_field'>
            </div>
            <input type="submit" value="Register" id='input_submit' name='submit' class='input_field'>
            <div>
    <?php  
if(isset($_POST["submit"]))
{  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
  
    $con=mysql_connect('localhost','root','') or die(mysql_error());  
    mysql_select_db('user_registration') or die("cannot select DB");  
  
    $query=mysql_query("SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");  
    $numrows=mysql_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysql_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    header("Location: profile.html");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    $error = "<div style='color: red; font-weight: bold; display: block;
    position: relative; text-align: center'>All fields are required</div>";
    echo  $error;  
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