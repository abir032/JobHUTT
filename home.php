<?php
   require 'job_db_connect.php';                           
   if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
   {
   $c_id=$_SESSION['c_id'];
   $j_id = $_SESSION['j_id'];
   $a_id = $_SESSION['id'];
    if($_GET['x'] == 1){
    if(isset($_POST['post'])){
    $file = $_FILES['file']['name'];
     $filesize = $_FILES['file']['size'];
     $fileerror = $_FILES['file']['error'];
     $fileType = $_FILES['file']['type'];
     $data = addslashes(file_get_contents($_FILES['file']['tmp_name']));
      $sql = "insert into attachment values (null,'$a_id','$j_id','$file','$fileType','$data')";
      $result= mysqli_query($conn,$sql);
      if($result){  
            $r = mysqli_query($conn,"SELECT * FROM attachment WHERE job_id ='$j_id' && applicant_id='$a_id'");
            while($row = mysqli_fetch_assoc($r)){
                $file_id = $row['file_id'];
            }
            $s = "insert into job_registration VALUES(null,'$c_id','$a_id','$j_id','$file_id',null)";
            $result1 = mysqli_query($conn,$s);
            if($result1){echo "<script>alert('registeration complete');
              window.location.href='jobshow.php'</script>";}}}}
   else{echo "<script>alert('Error');
    window.location.href='jobshow.php'
    </script>";
   }
}
   else {
    echo "<script>
    alert('Login first');
    window.location.href='job_registration.php'
    </script>
    ";  

   }
   
   
?>