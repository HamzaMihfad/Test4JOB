<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test4Job</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="signup.css">
    <link href="../icons/css/all.css" rel="stylesheet"> <!--load all styles -->
</head>
    <script src="../js/signup.js"></script>

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
   
<div class="dropdown">
  <a href="./login.php" id="signup">Login</a>
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
                <input required placeholder="Email" type="email" name="email" id="field_email" class='input_field'>
            </div>
            <div class="input_container">
            <i class="fas fa-user-circle"></i>
            <input required placeholder="Username" type="username" name="user" id="field_username" class='input_field'>
            </div>
            <div class="input_container">
                <i class="fas fa-lock"></i>
                <input placeholder="Password" type="password" name="pass" id="field_password" class='input_field'
                minlength="8"
                title="Must contain at least t 8 or more characters" required>
            </div>
            <div class="input_container">
                <i class="fas fa-lock"></i>
                <input required placeholder="confirm Password" type="password" name="confirm_password" id="field_password" class='input_field'>
            </div>
            <input type="submit" value="Register" id='input_submit' name='submit' class='input_field'>
            <div id="message">
  <h4>Password must contain the following:</h4>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
            <div>
            <?php  
if(isset($_POST["submit"])){  
if(!empty($_POST['user']) && !empty($_POST['pass']) && !empty($_POST['email'])) {  
    $email=$_POST['email'];  
    $user=$_POST['user']; 
    $pass=$_POST['pass'];  
    $confirm_password=$_POST["confirm_password"];
    $con=mysqli_connect('localhost','root','', 'user-registration') ;  
  
    $query=mysqli_query($con,"SELECT * FROM login WHERE username='".$user."' OR email='".$email."'");  
  
    $numrows=mysqli_num_rows($query);  //numrows=0 : user is not in login table
   
    if($numrows==0 && count($_POST)>0) 
    {  
        
            if($pass != $confirm_password){
                echo "Password did not match.";
            }

        else {
        $hashed = hash('sha512', $pass);
    $sql="INSERT INTO login(email,username,password) VALUES('$email','$user','$hashed')";  
    $sqli="INSERT INTO user_info(email,username) VALUES('$email','$user')";  
  
    $result=mysqli_query($con,$sql); 
    $resulti=mysqli_query($con,$sqli);  
 
        if($result && $resulti){  
            echo ("<script LANGUAGE='JavaScript'>
    alert('Succesfully registred you will be redirected to login');
    window.location.href='./login.php';
    </script>");
    
    } else {  
        $message = "<div style='color: red; font-weight: bold; display: block;
        position: relative; text-align: center'>failure</div>";
        echo  $message;  
    }  
}
}
 else {  
    echo ("<script LANGUAGE='JavaScript'>
    alert('email or username already used')
    </script>");  
    }   
 
} 
else {  
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