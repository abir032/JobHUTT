<?php
   require 'job_db_connect.php';
   $id=$_GET['id'];
   
   session_start();
   if(isset($_SESSION['loggedin1']) && $_SESSION['loggedin1'] == true){   

   $sql = "DELETE FROM `company_job` WHERE job_id = '$id'";
   if(mysqli_query($conn,$sql))
  {
    echo "<script>
    alert('Successfully deleted');
    window.location.href='job-list.php'
    </script>
    ";
  }
}
else{
    echo "<script>
    alert('Please login');
    window.location.href='company_login_signup.php'
    </script>
    ";
}
?>