<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JobHutt - post a job</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Themesdesign"/>

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />

    <link rel="stylesheet" type="text/css" href="css/fontawesome.css" />

    <!-- selectize css -->
    <link rel="stylesheet" type="text/css" href="css/selectize.css" />

    <link rel="stylesheet" type="text/css" href="css/nice-select.css" />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="css/style1.css" />

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
                              if(isset($_SESSION['loggedin1']) && $_SESSION['loggedin1'] == true){
                               $id = $_SESSION['c_id'];
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
                    <li><a href="post-a-job.php">Home</a></li>
					<li><a href="job-list.php">Jobs</a></li>
					<li><a href="applicant-cv-view.php">Applications</a></li>
					<li><a href="index.html">Company</a></li>
					<li><a href="index.html">About Us</a></li>
					<li><a href="index.html">Contact Us</a></li>
					
					
                   
                    <li class="has-submenu">
                        <a href="javascript:void(0)">LOGIN</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li><a href="about.html">Candidate Login</a></li>
                            <li><a href="company_login_signup.php">Company Login</a></li>
                              
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
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Create A new Job</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="index.html" class="text-uppercase font-weight-bold">Home</a></li>
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">Post A Job</span> 
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- POST A JOB START -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="rounded shadow bg-white p-4">
                        <div class="custom-form">
                            <div id="message3"></div>
                            <form method="post" action="" name="contact-form" enctype = "multipart/form-data" id="contact-form3">
                                <h4 class="text-dark mb-3">Post a New Job :</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Job Title</label>
                                            <input id="company-name" type="text" class="form-control resume" name="j_t" placeholder="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Job Type</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded" name="j_type">
                                                    <option data-display="Job Type">Job Type</option>
                                                    <option>Full Time</option>
                                                    <option>Part Time</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    

                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Job Category</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded" name="category">
                                                <?php
                                                 require 'job_db_connect.php';
                                                 $re=mysqli_query($conn,"select * from job_category");
                                                  while($r=mysqli_fetch_assoc($re)){?>
                                                      <option> <?php echo $r['category'];?></option>
                                                <?php  }
                                                ?>

                                                
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Office Address</label>
                                            <input id="address" type="text" name="o_add" class="form-control resume" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Location</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded" name="location">
                                                 
                                                  
                                                     
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
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Minimum Salary</label>
                                            <input id="minimum-salary" type="text" name="min_sal" class="form-control resume" placeholder="8000">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Maximum Salary</label>
                                            <input id="maximum-salary" type="text" class="form-control resume" name="max_sal" placeholder="20000">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Education Level</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded" name="education_level">
                                                    <option data-display="Level">Level</option>
                                                    <option >SSC</option>
                                                    <option >HSC</option>
                                                    <option >HONOURS</option>
                                                    <option >MASTERS</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Year of Experience</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded" name="Exp">
                                                    <option data-display="Experience">Experience</option>
                                                    <option value="1">1 Year</option>
                                                    <option value="2">2 Year</option>
                                                    <option value="3">3 Year</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Website</label>
                                            <input id="url" type="url" class="form-control resume" name="website" placeholder="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Email Address</label>
                                            <input id="email-address" type="text" class="form-control resume" name="email" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Phone Number</label>
                                            <input id="number" type="text" class="form-control resume" name="phone_no" placeholder="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Gender</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded" name="gender">
                                                    <option data-display="Gender">Gender</option>
                                                    <option >Male</option>
                                                    <option >Female</option>
                                                    <option >Male/Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Shift</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded" name="shift">
                                                    <option data-display="Shift">Shift</option>
                                                    <option >Morning</option>
                                                    <option >Evening</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Job Description</label>
                                            <textarea id="description" rows="6" class="form-control resume" placeholder="" name="des"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <div class="input-group mt-2 mb-2">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="file">
                                                        <label class="custom-file-label rounded"><i class="mdi mdi-cloud-upload mr-1"></i> Upload Files</label>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="list-inline-item">
                                                <h6 class="text-muted mb-0">Upload Images Or Documents.</h6>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 mt-2">
                                       
                                        <input type="submit" class="btn btn-primary" value="Post a Job" name = "post">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- POST A JOB END -->

    <!-- subscribe start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="float-left position-relative notification-icon mr-2">
                        <i class="mdi mdi-bell-outline text-primary"></i>
                        <span class="badge badge-pill badge-danger">1</span>
                    </div>
                    <h5 class="mt-2 mb-0">Your Job Notification</h5>
                </div>
                <div class="col-lg-8 col-md-7 mt-4 mt-sm-0">
                    <form>
                        <div class="form-group mb-0">
                            <div class="input-group mb-0">
                                <input name="email" id="email" type="email" class="form-control" placeholder="Your email :" required="" aria-describedby="newssubscribebtn">
                                <div class="input-group-append">
                                    <button class="btn btn-primary submitBnt" type="submit" id="newssubscribebtn">Subscribe</button>
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
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                    <a href="javascript:void(0)"><img src="images/logo-light.png" height="20" alt=""></a>
                    <p class="mt-4">JobHutt is one of the Biggest online Job portal is Bangladesh. We are making bridge between Candidates and Company owner. </p>
                    <ul class="social-icon social list-inline mb-0">
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-google"></i></a></li>
                    </ul>
                </div>
				
			
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title">Pages </p>
                    <ul class="list-unstyled footer-list">
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Home</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Jobs</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Candidates</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Company</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> About Us</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Contact us</a></li>
                      
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title">Quick Access</p>
                    <ul class="list-unstyled footer-list">
                       <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Home</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Jobs</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Candidates</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Company</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> About Us</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Contact us</a></li>
                    </ul>
                </div>
            
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title f-17">Business Hours</p>
                    <ul class="list-unstyled text-foot mt-4 mb-0">
                        <li>Saturday - Wednesday : 9:00 to 17:00</li>
                        <li class="mt-2">Thirsday : 10:00 to 15:00</li>
                        <li class="mt-2">Friday : Day Off (Holiday)</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
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

<?php
require 'job_db_connect.php';
    //session_start();
   if(isset($_POST['post']))
   {
      
     $category=$_POST['category'];
     $j_t=$_POST['j_t'];
	 $j_type=$_POST['j_type'];
     $o_add=$_POST['o_add'];
     $location=$_POST['location'];
     $max_salaries=$_POST['max_sal'];
	 $min_salaries=$_POST['min_sal'];
     $eduacation_level=$_POST['eduacation_level'];
     $exp=$_POST['Exp'];
     $website = $_POST['website'];
     $email=$_POST['email'];
     $phone = $_POST['phone_no'];
     $gender=$_POST['gender'];
     $shift = $_POST['shift'];
     $des = $_POST['des'];
	 $file = $_POST['file'];
     session_start();
     $c_id = $_SESSION['c_id'];

        //$_SESSION['user_name']=$name;
        $sql="insert into company_job values (null,'$c_id','$category','$j_t','$j_type','$o_add','$location','$min_salaries','$max_salaries','$education_level','$exp','$website','$email','$phone','$gender','$shift','$des','$file',null)";
        $result=mysqli_query($conn,$sql);
       if($result )
       {
         echo "<script>
         alert('Successfully inserted');
         window.location.href='post-a-job.php'
         </script>";
      
       }
       else
       {
        echo "<script>
        alert('Not inserted');
        window.location.href='post-a-job.php'
        </script>
        "; 
       }
    }
     
   
?>

