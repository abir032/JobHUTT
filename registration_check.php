<?php
require 'job_db_connect.php';
session_start();
    $j_id = $_SESSION['j_id'];
    $a_id = $_SESSION['id'];
     $regitration_check = "select job_id,applicant_id from job_registration where job_id = '$j_id' && applicant_id = '$a_id'";
     $r2 = mysqli_query($conn,$regitration_check);
     $flag = 0;
     if($output=mysqli_num_rows($r2) > 0)
     {
      while($row=mysqli_fetch_assoc($r2))
      {
         $jobb_id = $row['job_id'];
         
         if($j_id == $jobb_id)
         {
            $flag = 1;
         }
          
      }
     }
     if($flag == 0)
     {
      echo "<script>
    
      window.location.href='file.php?x=1'
      </script>
      ";   
     }
     else
     {
        echo "<script>
        alert('You are already register this job');
        window.location.href='jobshow.php'
        </script>
        ";   
     }
    ?>