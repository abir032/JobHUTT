<?php require 'job_db_connect.php'?> 
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

	<link rel="stylesheet" href="css\style.css">
	<link rel="stylesheet" href="css\style-header.css">
    <title> JobHutt | Job Seeker </title>
    <link rel="shortcut icon" href="images/favicon.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
  <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">JobHutt  </label>
      <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="#">About</a></li>
        
        <li><a href="#">Contact</a></li>
        
      </ul>
    </nav>
    
    <div class="wrapper">
      <div class="title-text">
        <div class="title login">Job Seeker</div>
        <div class="title signup">Job Seeker</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form action="process_login.php" method="POST" class="login">
            <div class="field">
              <input type="text" placeholder="Email Address" name = "a_email" required>
            </div>
            <div class="field">
              <input type="password" placeholder="Password" name = "a_pass"required>
            </div>
            <div class="pass-link"><a href="forgot_password.php">Forgot password?</a></div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Login" name = "login">
            </div>
            <div class="signup-link">Not a member? <a href="">Signup now</a></div>
          </form>
          <form action="process_signup.php" method="POST" enctype = "multipart/form-data" class="signup">
		  <div class="field">
              <input type="text" placeholder="First Name" name="f_name" required>
            </div>
			<div class="field">
              <input type="text" placeholder="Last Name" name="l_name" required>
            </div>
            <div class="field">
              <input type="text" placeholder="Email Address" name="a_email" required>
            </div>
            <select class="select-css" name = "sex">
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>

             </select>
				
            <div class="field">
              <input type="password" placeholder="Password" name="pass1" required>
            </div>
            <div class="field">
              <input type="password" placeholder="Confirm password" name="pass2" required>
            </div>
			<div class="field">
              <input type="number" placeholder="Year of Experiences" name="experience" required>
            </div>
            <div class="field">
              <input type="text" placeholder="City" required name="city">
            </div>
			<div class="field">
              <input type="text" placeholder="Nationality" name = "nationality"required>
            </div>
			<div class="field">
              <input type="tel" placeholder="Phone Number" name="phone_n" required>
            </div>
			
            <div class="flex-child magenta">
  

             Date Of Birth:
              <input type="Date" name = "date" required>
               </div>
			
			<!--This is  Upload image -->

			    <div class="Neon Neon-theme-dragdropbox">
        <input style="z-index: 999; opacity: 0; width: 320px; height: 200px; position: absolute; right: 0px; left: 0px; margin-right: auto; margin-left: auto;" name="images" id="filer_input2" multiple="multiple" type="file">
        <div class="Neon-input-dragDrop"><div class="Neon-input-inner"><div class="Neon-input-icon"><i class="fa fa-file-image-o"></i></div><div class="Neon-input-text"><h3>Upload Your Photo here</h3> <span style="display:inline-block; margin: 15px 0">or</span></div><a class="Neon-input-choose-btn blue">Browse Files</a></div></div>
        </div>
		
		
<!--This is select sector  -->
 <select class="select-css" name="sector">		
		 <?php
        $sql = "select * from job_category";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result)){
     ?>
  <option><?php echo $row['category'] ?></option>
<?php
        }
?>
</select>
				
						
			
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Signup" name = "Signup">
            </div>
          </form>
        </div>
      </div>
    </div>

    <script>
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
      });
    </script>



  </body>
</html>
