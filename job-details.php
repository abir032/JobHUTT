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
    <link rel="stylesheet" href="css-job-details/bootstrap.min.css" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="css-job-details/materialdesignicons.min.css" />

    <link rel="stylesheet" type="text/css" href="css-job-details/fontawesome.css" />

    <!-- selectize css -->
    <link rel="stylesheet" type="text/css" href="css-job-details/selectize.css" />

    <link rel="stylesheet" type="text/css" href="css-job-details/nice-select.css" />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="css-job-details/style.css" />
	<link rel="stylesheet" href="css-job-details/style.css" />
	
    <link rel="stylesheet" href="css-job-details/plugins.css" />
	
	
	

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
                              session_start();
                              if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                               $id = $_SESSION['id'];
                               $name = $_SESSION['f_name'];
                              
                ?>
                <div class="float-right">
                    <ul class="topbar-list list-unstyled d-flex" style="margin: 11px 0px;">
                        <li class="list-inline-item"><a href="javascript:void(0);"><i class="mdi mdi-account mr-2">
                        </i>
                            <?php echo $name ?>
                          </a>
                        </li>
                        <a href="job_candidate_logout.php">
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
                    <li><a href="index.php">Home</a></li>
					<li><a href="index.html">Jobs</a></li>
					<li><a href="index.html">Candidates</a></li>
					<li><a href="index.html">Company</a></li>
					<li><a href="index.html">About Us</a></li>
					<li><a href="index.html">Contact Us</a></li>
					
					
                    <?php
                             
                              if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == TRUE){
                               $id = $_SESSION['id'];
                               $name = $_SESSION['f_name'];
                              
                   ?>
                    <?php } else{?>
                    <li class="has-submenu">
                        <a href="javascript:void(0)">LOGIN</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li><a href="login_signup.php">Candidate Login</a></li>    
                            </li>
                          
                          
                        </ul>
                    </li>
                   <?php }?>

                    
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

    <!-- JOB SINGLE START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                                <?php
                                 require 'job_db_connect.php';
                                 $id=$_GET['id'];
                                 $sql = "SELECT * from company_job where job_id = '$id'";
                                 $result = mysqli_query($conn,$sql);
                                 while($row = mysqli_fetch_assoc($result)){
                                ?>
                    <div class="job-detail text-center job-single border rounded p-4">
                        <div class="job-single-img mb-2">
                            <img src="images/featured-job/img-1.png" alt="" class="img-fluid mx-auto d-block">
                        </div>
                        <h4 class=""><a href="#" class="text-dark"><?php echo $row['job_title']; ?></a></h4>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item mr-3">
                                <p class="text-muted mb-2"><i class="mdi mdi-bank mr-1"></i><?php echo $row['location']; ?></p>
                            </li>

                            <li class="list-inline-item">
                                <p class="text-muted mb-2"><i class="mdi mdi-map-marker mr-1"></i><?php echo $row['office_address']; ?></p>
                            </li>

                            <li class="list-inline-item">
                                <p class="text-muted mb-2"><i class="mdi mdi-arrange-send-to-back"></i> <?php echo $row['job_type']; ?></p>
								

                            </li>
                        </ul>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-dark mt-4">Job Description :</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail border rounded mt-2 p-4">
                                <div class="job-detail-desc">
                                    <p class="text-muted mb-3"><?php echo $row['job_description'] ?></p>

                                </div>

                                
                            </div>
                        </div>
                    </div>

                    <?php
                     }?>
                </div>
              
                <div class="col-lg-4 col-md-5 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <?php
                             // session_start();
                              if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                              
                              
                ?>
                     <a href="registration_check.php" class="btn btn-primary btn-block">Apply This Job</a>
                <?php } ?>

                                 <?php
                                 require 'job_db_connect.php';
                                 $id=$_GET['id'];
                                 $sql = "SELECT * from company_job where job_id = '$id'";
                                 $result = mysqli_query($conn,$sql);
                                 while($row = mysqli_fetch_assoc($result)){
                                 $_SESSION['j_id'] = $row['job_id'];
                                 $_SESSION['c_id'] = $row['company_id'];
                                    
                                ?>
               
                    <div class="job-detail rounded border job-overview mt-4 mb-4">
                        <div class="single-post-item mb-4">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-security text-muted mdi-24px"></i>
                            </div>
                            <div class="overview-details">
                                <h6 class="text-muted mb-0">Experience</h6>
                                <h6 class="text-black-50 pt-2 mb-0"><?php echo $row['experience'] ?></h6>
                            </div>
                        </div>

                        <div class="single-post-item mb-4">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-currency-usd text-muted mdi-24px"></i>
                            </div>
                            <div class="overview-details">
                                <h6 class="text-muted mb-0">Salary</h6>
                                <h6 class="text-black-50 pt-2 mb-0"><?php echo $row['minimum_salaries']; ?>-<?php echo $row['maximum_salaries']; ?>/month</h6>
                            </div>
						
                        </div>

                        <div class="single-post-item mb-4">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-apps text-muted mdi-24px"></i>
                            </div>
                            <div class="overview-details">
                                <h6 class="text-muted mb-0">Category</h6>
                                <h6 class="text-black-50 pt-2 mb-0"><?php echo $row['category']; ?></h6>
                            </div>
                        </div>

                        <div class="single-post-item mb-4">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-human-male-female text-muted mdi-24px"></i>
                            </div>
                            <div class="overview-details">
                                <h6 class="text-muted mb-0">Gender</h6>
                                <h6 class="text-black-50 pt-2 mb-0"><?php echo $row['gender']; ?> </h6>
                            </div>
                        </div>

                        <div class="single-post-item mb-4">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-calendar-today text-muted mdi-24px"></i>
                            </div>
                            <div class="overview-details">
                                <h6 class="text-muted mb-0">Education Level</h6>
                                <h6 class="text-black-50 pt-2 mb-0"><?php echo $row['education_level']; ?></h6>
                            </div>
                        </div>

                        <div class="single-post-item mb-4">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-email text-muted mdi-24px"></i>
                            </div>
                            <div class="overview-details">
                                <h6 class="text-muted mb-0">Email</h6>
                                <h6 class="text-black-50 pt-2 mb-0"><?php echo $row['email_address']; ?></h6>
                            </div>
                        </div>

						<div class="single-post-item mb-4">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-email text-muted mdi-24px"></i>
                            </div>
                            <div class="overview-details">
                                <h6 class="text-muted mb-0">Website</h6>
                                <h6 class="text-black-50 pt-2 mb-0"><?php echo $row['website']; ?></h6>
                            </div>
                        </div>
                        <div class="single-post-item">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-phone-classic text-muted mdi-24px"></i>
                            </div>
                            <div class="overview-details">
                                <h6 class="text-muted mb-0">Contact No</h6>
                                <h6 class="text-black-50 pt-2 mb-0"><?php echo $row['phone_number']; ?></h6>
                            </div>
                        </div>
                    </div>
                    
                <?php }?>  

                    

                    <div class="mt-4">
                    <?php
                              //session_start();
                              if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                                 
                              
                              
                     ?>
                      
                        <a href="registration_check.php" class="btn btn-primary btn-block">Apply This Job</a>
                        <?php }?>
                    </div>

                   

                    <div class="row">
                        <div class="col-6">
                            <div class="job-single-social-icon text-center mt-4">
                                <a href="" class="text-white"><i class="mdi mdi-facebook facebook"></i></a>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="job-single-social-icon text-center mt-4">
                                <a href="" class="text-white"><i class="mdi mdi-google-plus google"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- JOB SINGLE END -->
    <!-- subscribe start -->
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