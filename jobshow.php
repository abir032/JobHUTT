<?php
require 'job_db_connect.php';
?>


<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JobHutt - Best Job Portal In Bangladesh </title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="411 Project" />

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />

    <link rel="stylesheet" type="text/css" href="css/fontawesome.css" />

    <!-- selectize css -->
    <link rel="stylesheet" type="text/css" href="css/selectize.css" />

    <!--Slider-->
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/owl.theme.css" />
    <link rel="stylesheet" href="css/owl.transitions.css" />

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
					<li><a href="jobshow.php">Jobs</a></li>
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
                           <li><a href="login_signup.php">Company Login</a></li>    
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

    <!-- Start Home -->
    <section class="bg-home" style="background: url('') center center;">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="title-heading text-center text-white">
                                <h6 class="small-title text-uppercase text-light mb-3"></h6>
                                <h1 class="heading font-weight-bold mb-4">The Easiest Way to Find Your New Job</h1>
                            </div>
                        </div>
                    </div>
                    <div class="home-form-position">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="home-registration-form p-4 mb-3">
                                    <form action="job_search_result.php" method="post" class="registration-form">
                                        <div class="row">
                                           
                                            <div class="col-lg-3 col-md-6">
                                                <div class="registration-form-box">
                                                    <i class="fa fa-location-arrow"></i>
                                                    <select id="select-country" class="demo-default" name = "location">
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
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="registration-form-box">
                                                    <i class="fa fa-list-alt"></i>
                                                    <select id="select-category" class="demo-default" name="cat">
                                                    <?php

                                                     $sql = "select category from job_category";
                                                     $result = mysqli_query($conn,$sql);
                                                     while($row=mysqli_fetch_assoc($result))
                                                     {
                                                     ?>
                                                        
                                                        <option><?php echo $row['category'] ?></option>
                                                    <?php }	?>	
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="registration-form-box">
                                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary btn-block" value="Submit">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- end home -->

    <!-- all jobs start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title title-line pb-5">Find Your Jobs</h4>
                        <p class="text-muted para-desc mx-auto mb-1"></p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9 text-center mt-4 pt-2">
                    <ul class="nav nav-pills nav nav-pills bg-white rounded nav-justified flex-column flex-sm-row" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link rounded active" id="recent-job-tab" data-toggle="pill" href="#recent-job" role="tab" aria-controls="recent-job" aria-selected="true">Recent Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded" id="featured-job-tab" data-toggle="pill" href="#featured-job" role="tab" aria-controls="featured-job" aria-selected="false">All Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded" id="part-job-tab" data-toggle="pill" href="#part-job" role="tab" aria-controls="part-job" aria-selected="false">Part Time</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded" id="full-job-tab" data-toggle="pill" href="#full-job" role="tab" aria-controls="full-job" aria-selected="false">Full Time</a>
                        </li>
                    </ul>
                </div>
            </div>
			
            <div class="row">
                <div class="col-12">
                    <div class="tab-content mt-2" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="recent-job" role="tabpanel" aria-labelledby="recent-job-tab">
                            <div class="row">
                                 <?php
                                 require 'job_db_connect.php';
                                $sql = "SELECT company_job.job_id,job_company.Company_name,company_job.job_title,company_job.job_type,company_job.job_type,company_job.location,company_job.minimum_salaries,company_job.maximum_salaries,company_job.experience,company_job.job_description FROM `job_company`,company_job WHERE company_job.company_id = job_company.company_id ORDER by company_job.dateposted DESC LIMIT 0,3";
                                $result = mysqli_query($conn,$sql);
                                while($row = mysqli_fetch_assoc($result)){
                                ?>
                                <div class="col-lg-12">

                                    <div class="job-box bg-white overflow-hidden border rounded mt-4 position-relative overflow-hidden">
                                        <div class="lable text-center pt-2 pb-2">
                                            <ul class="list-unstyled best text-white mb-0 text-uppercase">
                                                <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                            </ul>
                                    </div>
                                    
                                        <div class="p-4">

                                            <div class="row align-items-center">
                                                <div class="col-md-2">
                                                    <div class="mo-mb-2">
                                                        <img src="images/featured-job/img-1.png" alt="" class="img-fluid mx-auto d-block">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div>
                                                        <h5 class="f-18"><a href="#" class="text-dark"><?php echo $row['job_title']; ?></a></h5>
                                                        <p class="text-muted mb-0">
                                                        <?php
                                                           echo $row['Company_name'];
                                                        ?> 
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div>
                                                        <p class="text-muted mb-0"><i class="mdi mdi-map-marker text-primary mr-2"></i><?php echo $row['location']; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div>
                                                        <p class="text-muted mb-0 mo-mb-2"><span class="text-primary"></span><?php echo $row['minimum_salaries']; ?>-<?php echo $row['maximum_salaries']; ?>/m</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div>
                                                        <p class="text-muted mb-0"><?php echo $row['job_type']; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-3 bg-light">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div>
                                                        <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Experience :</span><?php echo $row['experience']; ?> years</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div>
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div>
                                                        <a href="job-details.php?id=<?php echo $row['job_id']?>" class="text-primary">View Job <i class="mdi mdi-chevron-double-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- recent_job -->
                                   <!-- recent_job -->
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                       <!-- recent_job -->
                        <div class="tab-pane fade" id="featured-job" role="tabpanel" aria-labelledby="featured-job-tab">
                            <div class="row">
                            <?php
                                 require 'job_db_connect.php';
                                $sql = "SELECT company_job.job_id,job_company.Company_name,company_job.job_title,company_job.job_type,company_job.job_type,company_job.location,company_job.minimum_salaries,company_job.maximum_salaries,company_job.experience,company_job.job_description FROM `job_company`,company_job WHERE company_job.company_id = job_company.company_id ORDER by company_job.dateposted DESC";
                                $result = mysqli_query($conn,$sql);
                                while($row = mysqli_fetch_assoc($result)){
                                ?>
                                <div class="col-lg-12">

                                    <div class="job-box bg-white overflow-hidden border rounded mt-4 position-relative overflow-hidden">
                                        <div class="lable text-center pt-2 pb-2">
                                            <ul class="list-unstyled best text-white mb-0 text-uppercase">
                                                <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="p-4">
                                            <div class="row align-items-center">
                                                <div class="col-md-2">
                                                    <div class="mo-mb-2">
                                                        <img src="images/featured-job/img-2.png" alt="" class="img-fluid mx-auto d-block">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div>
                                                        <h5 class="f-18"><a href="#" class="text-dark"><?php echo $row['job_title']; ?></a></h5>
                                                        <p class="text-muted mb-0">
                                                        <?php
                                                           echo $row['Company_name'];
                                                        ?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div>
                                                        <p class="text-muted mb-0"><i class="mdi mdi-map-marker text-primary mr-2"></i><?php echo $row['location']; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div>
                                                        <p class="text-muted mb-0 mo-mb-2"><span class="text-primary"></span><?php echo $row['minimum_salaries']; ?>-<?php echo $row['maximum_salaries']; ?>/m</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div>
                                                        <p class="text-muted mb-0"><?php echo $row['job_type']; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-3 bg-light">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="mo-mb-2">
                                                        <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Experience :</span><?php echo $row['experience']; ?> years</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div>
                                                        <a href="job-details.php?id=<?php echo $row['job_id']?>" class="text-primary">View Job<i class="mdi mdi-chevron-double-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  <!--all-->
                                    
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                         <!-- all -->
                        <div class="tab-pane fade" id="part-job" role="tabpanel" aria-labelledby="part-job-tab">
                            <div class="row">
                                <?php
                              require 'job_db_connect.php';
                                $sql = "SELECT company_job.job_id,job_company.Company_name,company_job.job_title,company_job.job_type,company_job.job_type,company_job.location,company_job.minimum_salaries,company_job.maximum_salaries,company_job.experience,company_job.job_description FROM `job_company`,company_job WHERE company_job.company_id = job_company.company_id && company_job.job_type='Part Time' ORDER by company_job.dateposted DESC";
                                $result = mysqli_query($conn,$sql);
                                while($row = mysqli_fetch_assoc($result)){
                                ?>

                                <div class="col-lg-12">

                                    <div class="job-box bg-white overflow-hidden border rounded mt-4 position-relative overflow-hidden">
                                        <div class="lable text-center pt-2 pb-2">
                                            <ul class="list-unstyled best text-white mb-0 text-uppercase">
                                                <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="p-4">
                                            <div class="row align-items-center">
                                                <div class="col-md-2">
                                                    <div class="mo-mb-2">
                                                        <img src="images/featured-job/img-1.png" alt="" class="img-fluid mx-auto d-block">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div>
                                                        <h5 class="f-18"><a href="#" class="text-dark"><?php echo $row['job_title']; ?></a></h5>
                                                        <p class="text-muted mb-0">
                                                        <?php
                                                           echo $row['Company_name'];
                                                        ?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div>
                                                        <p class="text-muted mb-0"><i class="mdi mdi-map-marker text-primary mr-2"></i><?php echo $row['location']; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div>
                                                        <p class="text-muted mb-0 mo-mb-2"><span class="text-primary"></span><?php echo $row['minimum_salaries']; ?>-<?php echo $row['maximum_salaries']; ?>/m</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div>
                                                        <p class="text-muted mb-0"><?php echo $row['job_type']; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-3 bg-light">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div>
                                                        <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Experience :</span><?php echo $row['experience']; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div>
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div>
                                                        <a href="job-details.php?id=<?php echo $row['job_id']?>" class="text-primary">View Job<i class="mdi mdi-chevron-double-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--part-->
                                    
                                   <!-- part time job end--> 
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                         <!-- part time job end-->
                        <div class="tab-pane fade" id="full-job" role="tabpanel" aria-labelledby="full-job-tab">
                            <div class="row">
                                <?php
                               require 'job_db_connect.php';
                                $sql = "SELECT company_job.job_id,job_company.Company_name,company_job.job_title,company_job.job_type,company_job.job_type,company_job.location,company_job.minimum_salaries,company_job.maximum_salaries,company_job.experience,company_job.job_description FROM `job_company`,company_job WHERE company_job.company_id = job_company.company_id && company_job.job_type='Full Time' ORDER by company_job.dateposted DESC";
                                $result = mysqli_query($conn,$sql);
                                while($row = mysqli_fetch_assoc($result)){
                                ?>
                                <div class="col-lg-12">

                                    <div class="job-box bg-white overflow-hidden border rounded mt-4 position-relative overflow-hidden">
                                        <div class="lable text-center pt-2 pb-2">
                                            <ul class="list-unstyled best text-white mb-0 text-uppercase">
                                                <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="p-4">
                                            <div class="row align-items-center">
                                                <div class="col-md-2">
                                                    <div class="mo-mb-2">
                                                        <img src="images/featured-job/img-2.png" alt="" class="img-fluid mx-auto d-block">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div>
                                                        <h5 class="f-18"><a href="#" class="text-dark"><?php echo $row['job_title']; ?></a></h5>
                                                        <p class="text-muted mb-0"><?php
                                                           echo $row['Company_name'];
                                                        ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div>
                                                        <p class="text-muted mb-0"><i class="mdi mdi-map-marker text-primary mr-2"></i><?php echo $row['location']; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div>
                                                        <p class="text-muted mb-0 mo-mb-2"><span class="text-primary"></span><?php echo $row['minimum_salaries']; ?>-<?php echo $row['maximum_salaries']; ?>/m</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div>
                                                        <p class="text-muted mb-0"><?php echo $row['job_type']; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-3 bg-light">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div>
                                                        <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Experience :</span> <?php echo $row['experience']; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div>
                                                        <a href="job-details.php?id=<?php echo $row['job_id']?>"class="text-primary">View Job <i class="mdi mdi-chevron-double-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  
                                  <!--end fultime-->
                        </div>
                        <?php
                                }
                                ?>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <!-- end row -->
            <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination job-pagination mb-0 justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                    <i class="mdi mdi-chevron-double-left f-15"></i>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="mdi mdi-chevron-double-right f-15"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- end containar -->
    </section>
    <!-- all jobs end -->
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

    <script src="js/owl.carousel.min.js"></script>
    <script src="js/counter.int.js"></script>

    <script src="js/app.js"></script>
    <script src="js/home.js"></script>

</body>
</html>