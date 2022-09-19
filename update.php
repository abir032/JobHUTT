<?php 
   require 'job_db_connect.php';
   $id = $_GET['value'];
  
   session_start();
   $j_id = $_SESSION['j_id'];
?>



<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>JobHutt - Best Job Portal In Bangladesh </title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Themesdesign" />

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css-edit/bootstrap.min.css" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="css-edit/materialdesignicons.min.css" />

    <link rel="stylesheet" type="text/css" href="css-edit/fontawesome.css" />

    <!-- selectize css -->
    <link rel="stylesheet" type="text/css" href="css-edit/selectize.css" />

    <link rel="stylesheet" type="text/css" href="css-edit/nice-select.css" />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="css-edit/style.css" />
	<link rel="stylesheet" href="css-edit/style-edit.css" />
	
    <link rel="stylesheet" href="css-edit/plugins.css" />
	
	
	

</head>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->

    <!-- Navigation Bar-->
    <header id="topnav" class="defaultscroll scroll-active">
        <!-- Tagline STart -->
        <div class="tagline">
            <div class="container">
                <div class="float-left">
                    <div class="phone">
                        <i class="mdi mdi-phone-classic"></i> +880 199 460 60 003
                    </div>
                    <div class="email">
                        <a href="#">
                            <i class="mdi mdi-email"></i> Support@jobhut.com
                        </a>
                    </div>
                </div>
                <?php
                              
                              if(isset($_SESSION['loggedin1']) && $_SESSION['loggedin1'] == true){
                              // $id = $_SESSION['c_id'];
                               $name = $_SESSION['c_name'];
                              
                ?>
                <div class="float-right">
                    <ul class="topbar-list list-unstyled d-flex" style="margin: 11px 0px;">
                        <li class="list-inline-item"><a href="javascript:void(0);"><i class="mdi mdi-account mr-2">
                        </i>
                            <?php echo $name ?>

                          </a>
                        </li>
                        <a href="company_logout.php">
                        <li class="list-inline-item" >    
                               logout  
                        </li>
                        </a>
                    </ul>
                </div>
                <?php
                 }
                ?>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Tagline End -->

        <!-- Menu Start -->
        <div class="container">
            <!-- Logo container-->
            <div>
                <a href="index.html" class="logo">
                    <img src="images/logo-light.png" alt="" class="logo-light" height="18" />
                    <img src="images/logo-dark.png" alt="" class="logo-dark" height="18" />
                </a>
            </div>                 
            <div class="buy-button">
                <a href="post-a-job.html" class="btn btn-primary"><i class="mdi mdi-cloud-upload"></i> Post a Job</a>
            </div><!--end login button-->
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>
    
            <div id="navigation">
                <!-- Navigation Menu-->   
               <ul class="navigation-menu">
                    <li><a href="job-list.php">Home</a></li>
					<li><a href="index.html">Jobs</a></li>
					<li><a href="index.html">Candidates</a></li>
					<li><a href="index.html">Company</a></li>
					<li><a href="index.html">About Us</a></li>
					<li><a href="index.html">Contact Us</a></li>
					
					
                   
                    <li class="has-submenu">
                        <a href="javascript:void(0)">LOGIN</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li><a href="about.html">Candidate Login</a></li>
                            <li><a href="services.html">Company Login</a></li>
                              
                            </li>
                          
                          
                        </ul>
                    </li>
                    
                </ul><!--end navigation menu-->
            </div><!--end navigation-->
        </div><!--end container-->
        <!--end end-->
    </header><!--end header-->
    <!-- Navbar End -->
    
    <!-- Start home -->
    <section class="bg-half page-next-level"> 
        <div class="bg-overlay"></div>
       
    </section>
    <!-- end home -->

    <!-- POST A JOB START -->
    <?php
                              
                              if(isset($_SESSION['loggedin1']) && $_SESSION['loggedin1'] == true){
                                
                               // $id=$_GET['value'];
                                //$_SESSION['j_id']= $id; 
                               
                                
                               
                              
                              
    ?>
    <?php 
     
    if($id ==1){
    ?>
       <form method="post" action="" name="contact-form" id="contact-form3">
                                <h4 class="text-dark mb-3">EDIT JOB :</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Job Title</label>
                                            <input id="company-name" type="text" class="form-control resume" name="j_t" placeholder="">
										     </div>
                                 </div>
                                </div>
                                <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="update" name = "update">
            </div>
      </form>


      <?php
      if(isset($_POST['update']))
      {
         $j_t = $_POST['j_t']; 
         $sql = "UPDATE `company_job` SET `job_title`='$j_t' where job_id= '$j_id'";
         mysqli_query($conn,$sql);

      }
   
   }
else if($id==2){?>
<form method="post" action="" name="contact-form" id="contact-form3">
<div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Job Type</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded" name = "j_type">
                                                    <option data-display="Job Type">Job Type</option>
                                                    <option >Full Time</option>
                                                    <option >Part Time</option>
                                                </select>
                                            </div>
											
                                        </div>
                                    </div>
              <input type="submit" value="update" name = "update">
            </div>
      </form>


      <?php
      if(isset($_POST['update']))
      {
         $j_t = $_POST['j_type']; 
         $sql = "UPDATE `company_job` SET `job_type`='$j_t' where job_id= '$j_id'";
         mysqli_query($conn,$sql);

      }


}

else if($id==3){?>
<form method="post" action="" name="contact-form" id="contact-form3">
                         <div class="form-button">
                         <select class="nice-select rounded" name="cat">
                                               
                                               <option >IT</option>
                                                   <option>Software engineer</option>
                                                   <option >Civil engineer</option>
                                                   <option >HR</option>
                                                   <option>Banking</option>
                                                   <option >Garments</option>
                                                   <option >Digital Marketing</option>
                                           </select>
                           </div>
                                   <input type="submit" value="update" name = "update">
                           </div>
      </form>
                                        
<?php
      if(isset($_POST['update']))
      {
         $j_t = $_POST['cat']; 
         $sql = "UPDATE `company_job` SET `category`='$j_t' where job_id= '$j_id'";
         mysqli_query($conn,$sql);

      }
}
else if($id==4){?>
       <form method="post" action="" name="contact-form" id="contact-form3">
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Office Address</label>
                                            <input id="company-name" type="text" class="form-control resume" name="o_a" placeholder="">
										     </div>
                                 </div>
                                </div>
                                <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="update" name = "update">
            </div>
      </form>

  

<?php
      if(isset($_POST['update']))
      {
         $j_t = $_POST['o_a']; 
         $sql = "UPDATE `company_job` SET `office_address`='$j_t' where job_id= '$j_id'";
         mysqli_query($conn,$sql);

      }
}
elseif($id==5){
?>   
 <form method="post" action="" name="contact-form" id="contact-form3">
 <div class="form-group app-label mt-2">
                                            <label class="text-muted">Location</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded" name="loc">
                                                 
                                                  
                                                     
                                                        <option value="DK">Dhaka</option>
                                                        <option value="CTG">Chittagong</option>
                                                        <option value="KL">Khulna</option>
                                                        <option value="RJ">Rajshahi</option>
                                                        <option value="SL">Sylhet</option>
                                                        <option value="BR">Barisal</option>
                                                        <option value="RG">Rangpur</option>
                                                        <option value="MG">Mymensingh</option>
                                                </select>
                                            </div>
											<a href="update.php?value=5" class="detail-edit" title="edit" ><i class="fa fa-pencil"></i></a>
                                        </div>               
                               
              <input type="submit" value="update" name = "update">
            </div>
      </form>
      <?php
      if(isset($_POST['update']))
      {
         $j_t = $_POST['loc']; 
         $sql = "UPDATE `company_job` SET `location`='$j_t' where job_id= '$j_id'";
         mysqli_query($conn,$sql);

      }
}
else if($id == 6){?>
<form method="post" action="" name="contact-form" id="contact-form3">
                             <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Minimum Salary</label>
                                            <input id="minimum-salary" type="text" name="min_sal" class="form-control resume" placeholder="8000">
                                        </div>
										
                                    </div>
                           
            <div>                   
              <input type="submit" value="update" name = "update">
            </div>
</form>
<?php
      if(isset($_POST['update']))
      {
         $j_t = $_POST['min_sal']; 
         $sql = "UPDATE `company_job` SET `minimum_salaries`='$j_t' where job_id= '$j_id'";
         mysqli_query($conn,$sql);

      }
   }
else if($id == 7){?>

<form method="post" action="" name="contact-form" id="contact-form3">
                             <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Maximum Salary</label>
                                            <input id="minimum-salary" type="text" name="max_sal" class="form-control resume" placeholder="8000">
                                        </div>
										
                                    </div>
                           
            <div>                   
              <input type="submit" value="update" name = "update">
            </div>
</form>
<?php
      if(isset($_POST['update']))
      {
         $j_t = $_POST['max_sal']; 
         $sql = "UPDATE `company_job` SET `maximum_salaries`='$j_t' where job_id= '$j_id'";
         mysqli_query($conn,$sql);

      }
   }
?>                        
    <?php }?>
    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="float-left position-relative notification-icon mr-2">
                     
                    
                    </div>
              
                </div>
                <div class="col-lg-8 col-md-7 mt-4 mt-sm-0">
                    <form>
                        <div class="form-group mb-0">
                            <div class="input-group mb-0">
                                
                                <div class="input-group-append">
                                   
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe end -->

    <!-- footer start -->
   
    <!-- footer end -->
    <hr>
    <footer class="footer footer-bar">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="">
                      
                    </div>
                </div>
            </div>
        </div><!--end container-->
    </footer><!--end footer-->
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" class="back-to-top rounded text-center" id="back-to-top"> 
        <i class="mdi mdi-chevron-up d-block"> </i> 
    </a>
    <!-- Back to top -->

    <!-- javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/plugins.js"></script>

    <!-- selectize js -->
    <script src="js/selectize.min.js"></script>

    <script src="js/jquery.nice-select.min.js"></script>

    <script src="js/app.js"></script>

</body>
</html>