
<?php
require 'job_db_connect.php';
    //session_start();
   if(isset($_POST['c_Signup']))
   {
     $c_name=$_POST['c_name'];
     $c_email=$_POST['c_email'];
     $c_pass1=($_POST['c_pass1']);
     $len = strlen($c_pass1);
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

            if(($c_pass1[$i]>= $lowA && $c_pass1[$i]<=$lowZ ) || ($c_pass1[$i]>= $uppA && $c_pass1[$i]<=$uppZ ))
            {
                   $strcnt++;
            }
            elseif($c_pass1[$i]>=$number && $c_pass1[$i]<=$number2)
            {
               $numbercnt++;
            }
         }
        if($strcnt>0 && $numbercnt>0)
        {
         $perfect_pass = 1;
         $c_pass1 = md5($c_pass1);
        }

     }

     




     $c_pass2=md5($_POST['c_pass2']);
     $c_address=$_POST['c_address'];
     $c_phone_no=$_POST['c_phone_n'];
     $c_description=$_POST['c_description'];
    
     

     $filename = $_FILES['c_images']['name'];
     $filetempname = $_FILES['c_images']['tmp_name'];
     $filesize = $_FILES['c_images']['size'];
     $fileerror = $_FILES['c_images']['error'];
     $fileType = $_FILES['c_images']['type'];
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
     $email_check = "select company_email from job_company";
     $r = mysqli_query($conn,$email_check);
     $flag = 0;
     if($output=mysqli_num_rows($r) > 0)
     {
      while($row=mysqli_fetch_assoc($r))
      {
         $a_email = $row['company_email'];
         
         if($a_email == $c_email)
         {
            $flag = 1;
         }
          
      }
     }
     $matchpass = 0;
     if($c_pass1 == $c_pass2)
          $matchpass = 1;
      echo $matchpass;
     if($matchpass == 1 && $flag == 0 && $perfect_pass == 1 )
     {

        //$_SESSION['user_name']=$name;
        $sql="insert into job_company values (null,'$c_name','$c_address','$c_email','$c_pass1','$c_description','$filenameNew','$c_phone_no',null)";
        $result=mysqli_query($conn,$sql);
       if($result )
       {
         echo "<script>
         alert('Successfully created');
         window.location.href='company_login_signup.php'
         </script>";
      
       }
       else
       {
        echo "<script>
        alert('Registration failed');
        window.location.href='company_login_signup.php'
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
         window.location.href='company_login_signup.php'
         </script>";
        }
        else if($successimage == 1){
         echo "<script>
         alert('Image file is not valid');
         window.location.href='company_login_signup.php'
         </script>";
        }
        else if($perfect_pass == 0){
         echo "<script>
         alert('Password must grater than 8 charecters and must contain mix off number and alphabet');
         window.location.href='company_login_signup.php'
         </script>";
        }

        else if ($matchpass == 0)
        {
         echo "<script>
         alert('password & retype password not match');
         window.location.href='company_login_signup.php'
         </script>";
        }
     }
   }
?>
