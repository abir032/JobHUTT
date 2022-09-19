<?php
     require 'job_db_connect.php';                       
                            
                            $sql2 = "SELECT DISTINCT COUNT(company_id) as total FROM `job_company`";
                            $re=mysqli_query($conn,$sql2);
                            $data = mysqli_fetch_assoc($re);
                            echo $data['total'];
?>