<?php require 'job_db_connect.php'?> 
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

	<link rel="stylesheet" href="css\style.css">
	<link rel="stylesheet" href="css\style-header.css">
    <title>Login & Signup Form | CSE 411 PROJECT </title>
 

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
  <div class="form-inner">
 <form action="" method="POST" class="signup">
          <select class="select-css" name="category">		
		 <?php
        require 'job_db_connect.php';
        $sql = "select * from job_category";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result)){
     ?>
  <option><?php echo $row['category'] ?></option>
    <?php
        }
?>
</select>
            <br>
			<div class="field">
              <input type="text" placeholder="Job Title" name="jt" required>
            </div>
            <br>
            <select id="select-country" class="select-css" name = "area">
                                                        <option value="">Location</option>
                                                        <option value="DK">Dhaka</option>
                                                        <option value="CTG">Chittagong</option>
                                                        <option value="KL">Khulna</option>
                                                        <option value="RJ">Rajshahi</option>
                                                        <option value="SL">Sylhet</option>
                                                        <option value="BR">Barisal</option>
                                                        <option value="RG">Rangpur</option>
                                                        <option value="MG">Mymensingh</option>                                     
            </select>
		     <br>
            <div class="field">
              <input type="text" placeholder="Employee Need" name="employee_no" required>
            </div>
            <br>
            <div class="field">
              <input type="text" placeholder="Salaries" name="salaries" required>
            </div>
            <br>
			<div class="field">
              <input type="text" placeholder="Year of Experiences" name="experience" required>
            </div>
            <br>
            <div class="field">
              <input type="text" placeholder="Duration" required name="duration">
            </div>
            <br>
			<div class="field">
              <input type="text" placeholder="Qualification" name = "qualification"required>
            </div>
            <br>
			<div class="field">
              <input type="text" placeholder="Experience" name="Exp" required>
            </div>
		   <br>
           <div class="field">
              <input type="text" placeholder="Description" name="des" required>
            </div>
		   <br>
           <select id="preferd sex" class="select-css" name= "sex">
                 <option>Male</option>
                 <option>Female</option>
                 <option>Male/Female</option>
           </select>
<!--This is select sector  -->
 
			<br>	
		    <div class="field">
              <input type="text" placeholder="Job Vacancy" name="jv" required>
            </div>
            <br>
            <div class="field">
              <input type="text" placeholder="Status" name="Status" required>
            </div>	
			<br>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Post" name = "post">
            </div>
          </form>
        </div>
      </div>
    </div>


  </body>
</html>

<?php
require 'job_db_connect.php';
    //session_start();
   if(isset($_POST['post']))
   {
       echo "dsdkf";
     $category=$_POST['category'];
     $j_t=$_POST['jt'];
     $area=$_POST['area'];
     $employee_no=$_POST['employee_no'];
     $salaries=$_POST['salaries'];
     $experience=$_POST['experience'];
     $duration=$_POST['duration'];
     $qualification = $_POST['qualification'];
     $Exp=$_POST['Exp'];
     $des = $_POST['des'];
     $sex=$_POST['sex'];
     $jv = $_POST['jv'];
     $status = $_POST['status'];
     session_start();
     $c_id = $_SESSION['c_id'];

        //$_SESSION['user_name']=$name;
        $sql="insert into company_job values (null,'$c_id','$category','$j_t','$area','$employee_no','$salaries','$duration','$qualification','$Exp','$des','$sex','$jv','$status',null)";
        $result=mysqli_query($conn,$sql);
       if($result )
       {
         echo "<script>
         alert('Successfully inserted');
         window.location.href='job_post.php'
         </script>";
      
       }
       else
       {
        echo "<script>
        alert('Not inserted');
        window.location.href='job_post.php'
        </script>
        "; 
       }
    }
     
   
?>
