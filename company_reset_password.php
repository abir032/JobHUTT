<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

	<link rel="stylesheet" href="css\style.css">
	<link rel="stylesheet" href="css\style-header.css">
    <title>Forgot password | CSE 411 PROJECT </title>
<div class="form-inner">
    
          <form action="" method="POST" class="login">
           
            <div class="field">
              <input type="password" placeholder="Password" name = "pass1" required>
            </div>
            <div class="field">
              <input type="password" placeholder="Retype Password" name = "pass" required>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Update" name = "Submit">
            </div>
          </from>
<?php
require 'job_db_connect.php';
if(isset($_POST['Submit'])){
    $pass1 = $_POST['pass1'];
    $len = strlen($pass1);
     $lowA = "a";
     $lowZ = "z";
     $uppA = "A";
     $uppZ = "Z";
     $number = 0;
     $number2 = 9;
     $strcnt = 0;
     $numbercnt = 0;
     $perfect_pass = 0;
     if($len>=8 && $len <18)
     {
         for($i = 0; $i<$len;$i++){

            if(($pass1[$i]>= $lowA && $pass1[$i]<=$lowZ ) || ($pass1[$i]>= $uppA && $pass1[$i]<=$uppZ ))
            {
                   $strcnt++;
            }
            elseif($pass1[$i]>=$number && $pass1[$i]<=$number2)
            {
               $numbercnt++;
            }
         }
        if($strcnt>0 && $numbercnt>0)
        {
         $perfect_pass = 1;
         $pass1 = md5($pass1);
        }

     }


    $pass2 = md5($_POST['pass']);
    session_start();
    $email=$_SESSION['email'];
    if($pass1 == $pass2 && $perfect_pass==1){
      $sql = "UPDATE job_company SET  company_password='$pass1' where company_email = '$email'"; 
       $result=mysqli_query($conn,$sql);
    if($result){
       mysqli_query($conn,"delete from job_reset_password where email='$email'");
        echo "<script>
  alert('Succesfully changed!!!');
  window.location.href='login_signup.php'
  </script>";
    }
   
    }

   else{
    if($perfect_pass==0)
    {
        echo "<script>
        alert('Password must grater than 8 charecters and must contain mix off number and alphabet');
         
        window.location.href='reset_password.php'
        </script>";
    }
    else{
    echo "<script>
  alert('Password and retype password don't match');
  window.location.href='reset_password.php'
  </script>";
    }
}
}
?>