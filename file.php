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
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Upload CV</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="index.html" class="text-uppercase font-weight-bold">Home</a></li>
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">Upload CV</span> 
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
                                <h4 class="text-dark mb-3">Upload file :</h4>
                                

                       

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
                                       
                                        <input type="submit" class="btn btn-primary" value="Upload" name = "post">
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
                              
   if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
   {
   $c_id=$_SESSION['c_id'];
   
   $j_id = $_SESSION['j_id'];
   $a_id = $_SESSION['id'];
   
   
   if($_GET['x'] == 1){
   if(isset($_POST['post'])){
    
    $file = $_FILES['file']['name'];
    
    
     
     $filesize = $_FILES['file']['size'];
     $fileerror = $_FILES['file']['error'];
     $fileType = $_FILES['file']['type'];

     $data = addslashes(file_get_contents($_FILES['file']['tmp_name']));
    
     $sql = "insert into attachment values (null,'$a_id','$j_id','$file','$fileType','$data')";
     $result= mysqli_query($conn,$sql);
      
    if($result)
    {
            $r = mysqli_query($conn,"SELECT * FROM attachment WHERE job_id ='$j_id' && applicant_id='$a_id'");
            while($row = mysqli_fetch_assoc($r)){
                $file_id = $row['file_id'];
            }
            
            $s = "insert into job_registration VALUES(null,'$c_id','$a_id','$j_id','$file_id',null)";
            $result1 = mysqli_query($conn,$s);
            if($result1)
            {
                echo "<script>
              alert('registeration complete');
              window.location.href='jobshow.php'
              </script>";
            }
       
    }
   }
   }
   else
   {
    echo "<script>
    alert('Error');
    window.location.href='jobshow.php'
    </script>";
   }
}
   else {
    echo "<script>
    alert('Login first');
    window.location.href='job_registration.php'
    </script>
    ";  

   }
   
   
?>