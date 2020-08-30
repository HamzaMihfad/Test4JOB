<?php   
session_start();  
if(!isset($_SESSION["sess_company"])){  
    header("location:login.php");  
}  
else {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, 'test4job');
	$result = mysqli_query($conn,"SELECT * FROM results ");
    }
?>  
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Candidate List</title>
	<link rel="stylesheet" href="../style/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Tomorrow:wght@500&display=swap" rel="stylesheet">
	<style>
		body {
			background: gray;
		}

		.container {
			max-width: 100%;
			height: 200px;
			background: rgb(176, 175, 182);
			border-radius: 25px;
			margin: 0 auto 40px auto;
			box-shadow: 0 2px 5px rgb(79, 78, 99);
			/* border: 2px solid #3c61b9; */
			display: flex;
			align-items: center;
			justify-content: center;
			cursor: pointer;
		}

		.container:hover {
			/* top: -10px; */
			box-shadow: 0 3px 5px rgb(185, 93, 93);
		}

		.card {
			width: 18%;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			height: 100%;
		}

		.line {
			height: 80%;
			width: 1px;
			background: gray;
		}

		.Score {
			font-family: 'Tomorrow', sans-serif;
			font-size: 50px;
			color: white;
			margin: 15px;
			text-shadow: 0px 2px 2px #7c7676;
		}

		h3 {
			text-shadow: 0px 1px 2px #ffffff;
		}
		footer {
    height: 55px;
	bottom:0;
    display: flex;
    align-items: center;
    justify-content: center;
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

	  <?php 

	  while ($row = mysqli_fetch_array($result)) 
	  { 
		$user_result = mysqli_query($conn,"SELECT * FROM user_info WHERE username = '".$row['username']."' ");
		$user_row = mysqli_fetch_array($user_result);
		if( $user_row['profile_img'] == '' ) $img = '../img/avatar.png' ;
		else $img = $user_row['profile_img'];
		if ( $row['htmlresult'] == -1)
    {$htmlscore = '00';}
    else { $htmlscore = $row['htmlresult']*10; };

    if ( $row['sqlresult'] == -1)
    {$sqlscore = '00';}
    else { $sqlscore = $row['sqlresult']*10; };

    if ( $row['javascriptresult'] == -1)
    {$javascriptscore = '00';}
    else { $javascriptscore = $row['javascriptresult']*10; };

    if ( $row['phpresult'] == -1)
    {$phpscore = '00';}
	else { $phpscore = $row['phpresult']*10; };
	
	echo '<main style="display: flex; flex-direction: column;">
		<div class="container">
			<div class="card">
				<img src='."$img".' alt="avatar icon" style="width: 100px; height: 100px;">
				<h2 style="color: white; text-shadow: 0px 2px 2px #615e5e;">'."$row[username]".'</h2>
			</div>
			<div class="line"></div>
			<div class="card">
				<h3>HTML :</h3>
				<p class="Score">'."$htmlscore".'%</p>
			</div>
			<div class="line"></div>
			<div class="card">
				<h3>JavaScript :</h3>
				<p class="Score">'."$javascriptscore".'%</p>
			</div>
			<div class="line"></div>
			<div class="card">
				<h3>PHP :</h3>
				<p class="Score">'."$phpscore".'%</p>
			</div>
			<div class="line"></div>
			<div class="card">
				<h3>MySQL :</h3>
				<p class="Score">'."$sqlscore".'%</p>
			</div>
	</div>
		</div></main> '; } ?>



	<!--------------------- footer --------------------->

	<footer>
		<p>Test4JOB, Copyright &copy; 2020</p>
	</footer>

</body>

</html>