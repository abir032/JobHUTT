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
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="css-admin/materialdesignicons.min.css" />

    <link rel="stylesheet" type="text/css" href="css-admin/fontawesome.css" />

    <!-- selectize css -->
    <link rel="stylesheet" type="text/css" href="css-admin/selectize.css" />

    <link rel="stylesheet" type="text/css" href="css-admin/nice-select.css" />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="css-admin/style.css" />

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
                        </i> <?php echo $name ?> </a></li>

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
        
            
        </div>
    </section>
    <!-- end home -->

   

    <!-- JOB LIST START -->
    <section class="section pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        
                    </div>
                </div>
            </div>

            

                <div class="col-lg-9 mt-4 pt-2">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="show-results">
                                <div class="float-left">
                                    <h5 class="text-dark mb-0 pt-2 f-18">Showing results 0-20</h5>
                                </div>
                                <div class="sort-button float-right">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                               require 'job_db_connect.php';
                               if(isset($_SESSION['loggedin1']) && $_SESSION['loggedin1'] == true){
                                  $c_id = $_SESSION['c_id'];
                                  $name = $_SESSION['c_name'];
                               
                                  $sql = "SELECT * FROM `company_job` WHERE company_id = '$c_id' ORDER by dateposted DESC";
                                  $result = mysqli_query($conn,$sql);
                                  while($row = mysqli_fetch_assoc($result)){
                                
                                
                    ?>
                    <div class="row">
                        <div class="col-lg-12 mt-4 pt-2">
                            <div class="job-list-box border rounded">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col-lg-2">
                                            <div class="company-logo-img">
                                                <img src="images/featured-job/img-1.png" alt="" class="img-fluid mx-auto d-block">
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-9">
                                            <div class="job-list-desc">
                                                <h6 class="mb-2"><a href="#" class="text-dark"><?php echo $row['job_title']; ?> </a></h6>
                                                <p class="text-muted mb-0"><i class="mdi mdi-bank mr-2"></i><?php echo $name; ?></p>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item mr-3">
                                                        <p class="text-muted mb-0"><i class="mdi mdi-map-marker mr-2"></i> <?php echo $row['location']; ?></p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <div class="job-list-button-sm text-right">
                                               <a href="edit-job.php?id=<?php echo $row['job_id']?>"class="btn btn-sm btn-primary">Edit Job</a>

                                                <div class="mt-3">
                                                    <a href="delete.php?id=<?php echo $row['job_id'];?>" class="btn btn-sm btn-primary">DELETE</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- dhdfhdf -->
                        
                   
                </div>
                <?php }} ?>
                <div class="col-lg-12 mt-4 pt-2">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination job-pagination mb-0 justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                            <i class="mdi mdi-chevron-double-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">
                                            <i class="mdi mdi-chevron-double-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- JOB LIST START -->

    <!-- subscribe start -->
   
   
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