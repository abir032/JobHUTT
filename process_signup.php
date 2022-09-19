
<?php
require 'job_db_connect.php';
    //session_start();
   if(isset($_POST['Signup']))
   {
     $f_name=$_POST['f_name'];
     $L_name=$_POST['l_name'];
     $email=$_POST['a_email'];
     $sex=$_POST['sex'];
     $pass=($_POST['pass1']);
     $len = strlen($pass);
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

            if(($pass[$i]>= $lowA && $pass[$i]<=$lowZ ) || ($pass[$i]>= $uppA && $pass[$i]<=$uppZ ))
            {
                   $strcnt++;
            }
            elseif($pass[$i]>=$number && $pass[$i]<=$number2)
            {
               $numbercnt++;
            }
         }
        if($strcnt>0 && $numbercnt>0)
        {
         $perfect_pass = 1;
         $pass = md5($pass);
        }

     }

     




     $pass1=md5($_POST['pass2']);
     $a_experience=$_POST['experience'];
     $a_city=$_POST['city'];
     $a_nationality = $_POST['nationality'];
     $a_phone_no=$_POST['phone_n'];
     $date = $_POST['date'];
     $a_experience=$_POST['experience'];
     $sector = $_POST['sector'];
     

     $filename = $_FILES['images']['name'];
     $filetempname = $_FILES['images']['tmp_name'];
     $filesize = $_FILES['images']['size'];
     $fileerror = $_FILES['images']['error'];
     $fileType = $_FILES['images']['type'];
     $fileext = explode('.',$filename);
     $fileActualExt = strtolower(end($fileext));
     $allowed = array('jpg','jpeg','png');
     $successimage = 1;
     if(in_array($fileActualExt, $allowed)){
        if($fileerror == 0){
           if($filesize < 1000000){
             $filenameNew = uniqid('',true).".".$fileActualExt;
             $fileDestination = 'pictures/'.$filenameNew;
             move_uploaded_file($filetempname, $fileDestination);   
             $successimage = 0;    
         }
           else{
              echo "your file is too big";
           }
        }
        else{
            echo"There was an error uploading your file";
        }
     }
     else{
        echo "you cannot upload file this type";
     }
     $email_check = "select applicant_email from job_applicant";
     $r = mysqli_query($conn,$email_check);
     $flag = 0;
     if($output=mysqli_num_rows($r) > 0)
     {
      while($row=mysqli_fetch_assoc($r))
      {
         $a_email = $row['applicant_email'];
         
         if($a_email == $email)
         {
            $flag = 1;
         }
          
      }
     }
     $matchpass = 0;
     if($pass == $pass1)
          $matchpass = 1;
      echo $matchpass;
     if($matchpass == 1 && $flag == 0 && $perfect_pass == 1 )
     {

        //$_SESSION['user_name']=$name;
        $sql="insert into job_applicant values (null,'$f_name','$L_name','$email','$sex','$a_city','$a_phone_no','$pass','$a_nationality','$date','$filenameNew','$a_experience','$sector',null)";
        $result=mysqli_query($conn,$sql);
       if($result )
       {
         echo "<script>
         alert('Successfully created');
         window.location.href='login_signup.php'
         </script>";
      
       }
       else
       {
        echo "<script>
        alert('Registration failed');
        window.location.href='login_signup.php'
        </script>
        "; 
       }

     }
     else
     {
        echo $flag;
        if($flag == 1)
        {
         echo "<script>
         alert('email already used');
         window.location.href='login_signup.php'
         </script>";
        }
        else if($successimage == 1){
         echo "<script>
         alert('Image file is not valid');
         window.location.href='login_signup.php'
         </script>";
        }
        else if($perfect_pass == 0){
         echo "<script>
         alert('Password must grater than 8 charecters and must contain mix off number and alphabet');
         window.location.href='login_signup.php'
         </script>";
        }

        else if ($matchpass == 0)
        {
         echo "<script>
         alert('password & retype password not match');
         window.location.href='login_signup.php'
         </script>";
        }
     }
   }
?>
