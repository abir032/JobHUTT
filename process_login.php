<?php   
    require 'job_db_connect.php';
   if(isset($_POST['login']))
   {
   $email=NULL;
   $pass=NULL;
   $result=NULL;
    //echo 'submit';
    $email=$_POST['a_email'];
    $pass=md5($_POST['a_pass']);
    $sql="select applicant_id,applicant_f_name,applicant_password,applicant_email from job_applicant where applicant_email='$email'&& applicant_password='$pass'";
    $result=mysqli_query($conn,$sql);
   // $output=mysqli_num_rows($result)
    if($output=mysqli_num_rows($result) > 0)
    {
       //echo "sign in";
       
    while($row=mysqli_fetch_assoc($result))
    {
        $id=$row['applicant_id'];
        $name=$row['applicant_f_name'];
    }
       //echo  $f_name;
       session_start();
       $_SESSION['id']=$id;
       $_SESSION['loggedin'] = true;
       $_SESSION['f_name'] = $name;
       
       
      // echo $_SESSION['id'];
       echo "<script>
    alert('successfull !');
    window.location.href='index.php'
    </script>";
    
    } 
    else{
    echo "<script>
    alert('wrong password or user name !');
    window.location.href='login_signup.php'
    </script>";
    }
}
?>