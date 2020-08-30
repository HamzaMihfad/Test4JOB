<?php   
session_start();  
if(isset($_SESSION["sess_user"]) || (isset($_SESSION["sess_company"])))
{  
    header("location:../index.php");  
}  

?>  
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Company Sign Up</title>
	<link rel="stylesheet" href="../style/style.css">
	<link rel="stylesheet" href="./company.css">

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
			  <li class="active"><a href="">Home</a></li>
			  <li><a href="./profile.php">Test</a></li>
			  <li><a href="./about.php">About Us</a></li>
			</ul>
		  </nav>
		  </div>
		  <div>
		  <?php  
		  if(!isset($_SESSION["sess_company"])): ?>
	<div class="dropdown">
	  <p class='dropbtn' id='login'>connect</p>
	  <div class="dropdown-content">
	  <a href="./login.php" id="signup">Login</a>
	  <a href="./signup.php" id="signup">Sign Up</a>
			  </div>
	 <?php else: ?>
			<div class="dropdown">
	  <i class="fas fa-user fa-lg" class='dropbtn'></i>
	  <div class="dropdown-content">
			  <a href="./profileInfo.php" id="signup">profile</a>
			  <a href="./logout.php" id='signup'>Logout</a>
			  </div>
		  <?php endif; ?>
		  </div>
		</div>
	  </header>
	  <!-------->
	<div class="container">
		<h1 style="color: #3c61b9; margin: 10px;">Company info: </h1>
		<form method="POST" action="">
		<div class="flex">

			<div class="input_container">
				<input placeholder="Company name" name="company_name" class='input_field' required>
			</div>
			<div class="input_container">
				<input placeholder="Company id" name="company_id" class='input_field' required>
			</div>
			<input type="submit" name='submit' value="Continue" id='input_submit' class='input_field' style="cursor: pointer;">
		</div>

		<div>

		<?php
if(isset($_POST["submit"]))
{ 
if(!empty($_POST['company_name']) && !empty($_POST['company_id'])) 
{  
    $name=$_POST['company_name'];  
    $id=$_POST['company_id']; 
    
    $conn=mysqli_connect('localhost','root','', 'test4job') ;  
  
    $query=mysqli_query($conn,"SELECT * FROM company_registration WHERE company_name='".$name."' AND company_id='".$id."'");  
    $queryOR=mysqli_query($conn,"SELECT * FROM company_registration WHERE company_name='".$name."' OR company_id='".$id."'");  
	$numrows=mysqli_num_rows($query);  
	$numrowsOR=mysqli_num_rows($queryOR);  

	if($numrows==0 && $numrowsOR==0 && count($_POST)>0) 
	{
		$sqli="INSERT INTO company_registration(company_id,company_name) VALUES('$id','$name')"; 
		$result=mysqli_query($conn,$sqli);  
		if($result){  
			session_start();  
			$_SESSION['sess_company']=$id; 
            echo ("<script LANGUAGE='JavaScript'>
    alert('Succesfully registred');
    window.location.href='../index.php';
	</script>");
	}
	else {  
        $message = "<div style='color: red; font-weight: bold; display: block;
        position: relative; text-align: center'>failure</div>";
        echo  $message;  
	}  
}

elseif ( $numrows==0 && $numrowsOR!==0) 
{
	$message = "<div style='color: red; display: block;
        position: relative; text-align: center'>company name or companyID already exist</div>";
        echo  $message; 
}

else {
	session_start();  
$_SESSION['sess_company']=$id;  
header("Location: ../index.php");  

}
}
}
	?>
		</div>
		</form>
	</div>

	<!--------------------- footer --------------------->

	<footer style="position: absolute; width: 100%;">
		<p>Test4JOB, Copyright &copy; 2020</p>
	</footer>

</body>

</html>