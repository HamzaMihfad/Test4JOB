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
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

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
                        <?php
                        $getimg = mysqli_query($conn,"SELECT profile_img FROM user_info 
                        WHERE username = '".$_SESSION['sess_user']."'");
                        $rows=mysqli_fetch_array($getimg);
                        $img = $rows['profile_img'];
                        if($img != '') :
                        ?>
                        <img src="<?php echo $img?>"  alt="<?php echo $img ?>">
                        <?php else : ?>
                            <img src="../img/avatar.png"  alt="avatar">
                            <?php endif?>
                <h4 class="name"><?php
                $user = $row['first_name'];
               echo "$user" ?></h2>
                    <p class="email"> <?php
                $user = $row['email'];
               echo "$user" ?></p>
                    <p class="username"><?php
                $user = $row['username'];
               echo "$user" ?></p>
            </div>

            <ul class="ul">
                <li class="li" id="active">Informations</li>
                <li class="li" id="active">Tests</li>
                <li class="li" id="description">Description </li>
                <div class="description">
                <?php
                $user = $row['description'];
               echo "$user" ?>
                </div>
            </ul>
        </div>

        <div class="profile-content">
        <form  method="POST" enctype="multipart/form-data">
            
                <div class="input">
                    <label>First Name</label><br>
                    <?php
                    $user = $row['first_name'] ;
                    if ( $user == '' )
                     {
               echo "<input placeholder='First Name'  name='first_name'>";}
               else {
                echo '<input value='.$user.' name="first_name">'; 
               } ?>        
                </div>
                <div class="input">
                    <label>Last Name</label><br>
                    <?php
                    $user = $row['last_name'] ;
                    if ( $user == '' )
                     {
               echo "<input placeholder='Last Name' name='last_name'>";}
               else {
                echo '<input value='.$user.' name="last_name">'; 
               } 
            
               ?>
                </div>
           
            <div class="input">
                <label>Adress</label><br>
                <?php
                    $user = $row['adress'] ;
                    if ( $user == '' )
                     {
               echo "<input placeholder='Adress' id='adress' name='adress'>";}
               else {
                echo '<input value='.$user.' id="adress" name="adress">'; 
               } 
            
               ?>
            </div>
            <div style="display: flex; flex-direction: row; margin-left: 20px;">
                <div style=" margin-right: 20px;">
                    <label>City</label><br>
                    <?php
                    $user = $row['city'] ;
                    if ( $user == '' )
                     {
               echo "<input placeholder='City' id='city' name='city'>";}
               else {
                echo '<input value='.$user.' id="city" name="city">'; 
               } 
            
               ?>
                </div>
                <div style=" margin-right: 20px;">
                    <label>State</label><br>
                    <select id="state" name='state'>
                    <?php
                    $user = $row['state'] ;
                    if ( $user == '' )
                     {
               echo "<option value='' selected> Select your option</option>";}
               else {
                echo "<option value=".$user." selected>".$user."</option>"; 
               } 
               ?>
                        <option value="hurr">Durr</option>
                        <option value="opt2">opt2</option>
                        <option value="opt3">opt3</option>
                        <option value="opt4">opt4</option>

                    </select>
                </div>
                <div style="justify-content: center; align-self: center;">
                    <label>upload your CV (.pdf)</label><br>
                    <input id="cv" type="file" name='file' accept="application/pdf">
                </div>
               
            </div>
            <div class="desc">
                <label>Description</label><br>
                <?php
                    $user = $row['description'] ;
                    if ( $user == '' )
                     {
               echo "<textarea rows='10'  cols='35' id='description-input' name='description'></textarea>";}
               else {
                echo '<textarea rows="10"  cols="35" value='.$user.' id="description-input" name="description"></textarea>'; 
               } ?>

            </div>
           <div style="display: flex;
    flex-direction: row;  
    justify-content: space-evenly" >
                <input type="submit" id="button" name="submit" value ="Save changes">
                <a id="cancel" name="cancel" style="text-align:center;justify-content:center" href='./profileInfo.php'>Cancel</a>
                </div>
            </form>
        </div>
    
    </div>
    <div>
    <?php  
if(isset($_POST["submit"]))
{    
    
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $adress=$_POST['adress'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $description=$_POST['description'];
   

    $sql="UPDATE user_info
    SET 
        first_name = '$first_name',
        last_name = '$last_name',
        adress = '$adress',
        city = '$city',
        state = '$state',
        description = '$description'

    WHERE (username = '".$_SESSION['sess_user']."')";  
    $result = mysqli_query($conn,$sql);

                    if($_FILES['file']['size'] > 0)
                    {
                        $file=$_FILES['file'];
                        $fileName=$_FILES['file']['name'];
                        $tmpName=$_FILES['file']['tmp_name'];
                        $tmp = explode('.', $fileName);
                        $file_ext = end($tmp);
                        // target directory 
                        $target_dir = "../CVs/"; 
                        $extensions= array("pdf");
                        
                        if(in_array($file_ext,$extensions)=== false && $file_ext!= ''){
                            $errors[]="extension not allowed, please choose a pdf file.";
                        }
                        if(empty($errors)) 
                        { 
                        $cv = "../CVs/".$row['username'].'.'.$file_ext;
                        move_uploaded_file($tmpName,$cv);
                
                        $sqli="UPDATE user_info SET  
                         cv_name = '$fileName',
                         cv_content = '$cv'
                         WHERE (username = '".$_SESSION['sess_user']."')";  
                         $resulti = mysqli_query($conn,$sqli);
                            if(!$resulti)
                            echo "<div style='color: red; font-weight: bold; display: block;
                            position: relative; text-align: center'>okey</div>";
                        }
                    }

    if($result)
    echo ("<script LANGUAGE='JavaScript'>
    alert('Succesfully updates profile');
    window.location.href='./profileInfo.php';
    </script>");
    else {  
        $message = "<div style='color: red; font-weight: bold; display: block;
        position: relative; text-align: center'>failure</div>";
        echo  $message;  
    }  
}
    ?>
    </div>
    <footer>
        <p>Test4JOB, Copyright &copy; 2020</p>
    </footer>
</body>

</html>
 