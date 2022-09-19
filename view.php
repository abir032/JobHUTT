<?php
  require 'job_db_connect.php';
  $id = $_GET['id'];
  $result = mysqli_query($conn,"SELECT * FROM `attachment` where file_id = '$id'");
  $row = mysqli_fetch_assoc($result);
  $type = $row['filetype'];
  $name = $row['filename'];
 

  header('Content-Type:'.$row['filetype']) ;
  
  header('Content-Transfer-Encoding: binary');
  header('Accept-Ranges: bytes');
  
  echo $row['file'];

?>