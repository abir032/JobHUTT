<?php
    require 'job_db_connect.php';
   session_start();
   session_destroy();
   //window.location.href='login.php'";
   header("location: index.php");
   
?>