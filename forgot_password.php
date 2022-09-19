<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

	<link rel="stylesheet" href="css\style.css">
	<link rel="stylesheet" href="css\style-header.css">
    <title>Forgot password | CSE 411 PROJECT </title>
<div class="form-inner">
    
          <form action=" " method="POST" class="login">
           
            <div class="field">
              <input type="text" placeholder="Email Address" name = "a_email" required>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Submit" name = "Submit">
            </div>
          </from>
<?php
require 'job_db_connect.php';
if(isset($_POST['Submit']))
   {
       $email = $_POST['a_email'];
       $sql="select * from job_applicant where applicant_email='$email'";
       $result=mysqli_query($conn,$sql);
       if($output=mysqli_num_rows($result) > 0)
       {     
           $key = (uniqid(rand(1,10)));
           session_start();
           $_SESSION['email']= $email;
           mysqli_query($conn,"insert into job_reset_password values('$email','$key')");
           echo "<script>
           window.location.href='applicant_key.php'
           </script>";
       }
       else
       {
        echo "<script>
        alert('No account on this email!');
        window.location.href='forgot_password.php'
        </script>";
       }
   }


?>
</div>
</html>