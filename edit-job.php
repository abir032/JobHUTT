


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
                    <li><a href="index.html">Home</a></li>
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
                                
                                $id=$_GET['id'];
                                $_SESSION['j_id']= $id; 
                               
                                
                               
                              
                              
    ?>
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="rounded shadow bg-white p-4">
                        <div class="custom-form">
                            <div id="message3"></div>
                            <form method="post" action="update.php" name="contact-form" id="contact-form3">
                                <h4 class="text-dark mb-3">EDIT JOB :</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Job Title</label>
                                            <input id="company-name" type="text" class="form-control resume" name="j_t" placeholder="">
                                        <a href="update.php?value=1" class="detail-edit" title="edit" ><i class="fa fa-pencil"></i></a>
										</div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Job Type</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded" name = "j_type">
                                                    <option data-display="Job Type">Job Type</option>
                                                    <option value="1">Full Time</option>
                                                    <option value="2">Part Time</option>
                                                </select>
                                            </div>
											<a href="update.php?value=2" class="detail-edit" title="edit" ><i class="fa fa-pencil"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Job Category</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded" name="cat">
                                               
                                                    <option value="1">IT</option>
                                                        <option value="2">Software engineer</option>
                                                        <option value="3">Civil engineer</option>
                                                        <option value="4">HR</option>
														 <option value="5">Banking</option>
                                                        <option value="6">Garments</option>
                                                        <option value="7">Digital Marketing</option>
                                                </select>
                                            </div>
											<a href="update.php?value=3" class="detail-edit" title="edit" ><i class="fa fa-pencil"></i></a>
                                        </div>
                                      </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Office Address</label>
                                            <input id="address" type="text" name="o_a" class="form-control resume" placeholder="">
                                        </div>
										<a href="update.php?value=4" class="detail-edit" title="edit" ><i class="fa fa-pencil"></i></a>
                                    </div>
                                    <div class="col-md-6">
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
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Minimum Salary</label>
                                            <input id="minimum-salary" type="text" name="min_sal" class="form-control resume" placeholder="8000">
                                        </div>
										<a href="update.php?value=6" class="detail-edit" title="edit" ><i class="fa fa-pencil"></i></a>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Maximum Salary</label>
                                            <input id="maximum-salary" type="text" name="max_sal" class="form-control resume" placeholder="20000">
                                        </div>
										<a href="update.php?value=7" class="detail-edit" title="edit" ><i class="fa fa-pencil"></i></a>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Education Level</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded" name="level">
                                                    <option data-display="Level">Level</option>
                                                    <option >SSC</option>
                                                    <option >HSC</option>
                                                    <option >HONOURS</option>
                                                    <option >MASTERS</option>
                                                </select>
                                            </div>
											<a href="update.php?value=8" class="detail-edit" title="edit" ><i class="fa fa-pencil"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Year of Experience</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded" name="exp">
                                                    <option data-display="Experience">Experience</option>
                                                    <option value="1">1 Year</option>
                                                    <option value="2">2 Year</option>
                                                    <option value="3">3 Year</option>
                                                </select>
                                            </div>
                                        </div>
										<a href="update.php?value=9" class="detail-edit" title="edit" ><i class="fa fa-pencil"></i></a>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Website</label>
                                            <input id="url" type="url" name="web" class="form-control resume" placeholder="">
                                        </div>
										<a href="update.php?value=10" class="detail-edit" title="edit" ><i class="fa fa-pencil"></i></a>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Email Address</label>
                                            <input id="email-address" type="text"  name= "e_a"class="form-control resume" placeholder="">
                                        </div>
										<a href="update.php?value=11" class="detail-edit" title="edit" ><i class="fa fa-pencil"></i></a>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Phone Number</label>
                                            <input id="number" type="text" name="p_n" class="form-control resume" placeholder="">
											<a href="update.php?value=12" class="detail-edit" title="edit" ><i class="fa fa-pencil"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Gender</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded" name = "gender">
                                                    <option data-display="Gender">Gender</option>
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                </select>
                                            </div>
											<a href="update.php?value=13" class="detail-edit" title="edit" ><i class="fa fa-pencil"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Shift</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded" name="shift">
                                                    <option data-display="Shift">Shift</option>
                                                    <option value="1">Morning</option>
                                                    <option value="2">Evening</option>
                                                </select>
                                            </div>
											<a href="update.php?value=14" class="detail-edit" title="edit" ><i class="fa fa-pencil"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Job Description</label>
                                            <textarea id="description" rows="6" class="form-control resume" name="des" placeholder=""></textarea>
                                        </div>
										<a href="update.php?value=15" class="detail-edit" title="edit" ><i class="fa fa-pencil"></i></a>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                
                                            </li>

                                            <li class="list-inline-item">
                                               
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 mt-2">
                                        <a href="#" class="btn btn-primary">UPDATE POST</a>
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
<?php  }?>
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