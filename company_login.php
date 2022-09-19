<?php   
    require 'job_db_connect.php';
   if(isset($_POST['c_login']))
   {
   $email=NULL;
   $pass=NULL;
   $result=NULL;
    //echo 'submit';
    $email=$_POST['c_email'];
    $pass=md5($_POST['c_pass']);
    $sql="select company_id,Company_name,company_password,company_email from job_company where company_email='$email'&& company_password='$pass'";
    $result=mysqli_query($conn,$sql);
   // $output=mysqli_num_rows($result)
    if($output=mysqli_num_rows($result) > 0)
    {
       //echo "sign in";
       
    while($row=mysqli_fetch_assoc($result))
    {
        $id=$row['company_id'];
        $name = $row['Company_name'];
        
    }
       //echo  $f_name;
       session_start();
       $_SESSION['c_id']=$id;
       $_SESSION['loggedin1'] = true;
       $_SESSION['c_name'] = $name;
       
      // echo $_SESSION['id'];
       echo "<script>
    alert('successfull !');
    window.location.href='post-a-job.php'
    </script>";
    
    } 
    else{
    echo "<script>
    alert('wrong password or user name !');
    window.location.href='company_login_signup.php'
    </script>";
    }
}
?>