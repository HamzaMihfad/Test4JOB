<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Company Sign Up</title>
	<link rel="stylesheet" href="../style/style.css">
	<link href="../icons/css/all.css" rel="stylesheet"> <!--load all styles -->

	<style>
		.container {
			font-size: 20px;
			font-family: Helvetica, sans-serif;
			width: 50%;
			height: 300px;
			background: rgb(214, 209, 209);
			border-radius: 25px;
			padding: 20px;
			margin: 70px auto 0px auto;
		}

		.flex {
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			width: 100%;
		}

		.input_container {
			background-color: white;
			/* vertically align icon and text inside the div*/
			display: flex;
			align-items: center;
			padding-left: 20px;
			border: 1px solid gray;
			margin: 10px;
		}

		.input_container,
		#input_submit {
			/* make the (email password login )box radius */
			height: 60px;
			border-radius: 30px;
			width: 50%;
		}

		.input_field {
			/* customize the email /password tag with lighter font and some padding*/
			color: #081816;
			background-color: inherit;
			width: 85%;
			border: none;
			font-size: 1.3rem;
			font-weight: 400;
			padding-left: 30px;

		}

		#input_submit {
			/* submit button has a different color and different padding */
			background-color: rgb(10, 10, 190);
			padding-left: 0;
			font-weight: bold;
			width: 53%;
			color: white;
			text-transform: uppercase;
		}
	</style>
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
		  <?php session_start();  
		  if(!isset($_SESSION["sess_user"])): ?>
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
	<div class="container">
		<h1 style="color: #3c61b9; margin: 10px;">Company info: </h1>
		<div class="flex">

			<div class="input_container">
				<input placeholder="Company name" name="Email" class='input_field'>
			</div>
			<div class="input_container">
				<input placeholder="Company id" name="Email" class='input_field'>
			</div>
			<input type="submit" value="Continue" id='input_submit' class='input_field' style="cursor: pointer;">
		</div>
	</div>

	<!--------------------- footer --------------------->

	<footer style="position: absolute; width: 100%;">
		<p>Test4JOB, Copyright &copy; 2020</p>
	</footer>

</body>

</html>