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
              <input type="text" placeholder="Key" name = "a_key" required>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Submit" name = "Submit">
            </div>
          </from>
          </div>
</html>

<?php
require 'job_db_connect.php';
session_start();
$email = $_SESSION['email'];
if(isset($_POST['Submit'])){
 $key = $_POST['a_key'];
 $sql = "select email,uniqe_key from job_reset_password where email = '$email'&& uniqe_key='$key'";
 $result = mysqli_query($conn,$sql);
 if($output=mysqli_num_rows($result)>0){
  echo "<script>
  window.location.href='reset_password.php';
  </script>";
 }
 else
 {
  echo "<script>
  alert('Wrong keyy!!!');
  window.location.href='applicant_key.php'
  </script>";
 }

}


?> 