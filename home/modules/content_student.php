<?php
 // ktra xem co truyen bang phuong thuc get hay khong
 if(isset($_GET['xem']))
 {
     $tam=$_GET['xem'];
 }
 else 
 $tam='';
  // ktra xem bien tam co bang...
 if($tam=='list_enterprise_request'){
  include("xuli/list_enterprise_request.php");
 }
else if($tam=='detail_request_enerprise'){
  include("detail_request_enerprise.php");
 }
 else if($tam=='student_assigned_table'){
  include("student_assigned_table.php");
 }
 else if($tam=='student_profile'){
  include("student_profile.php");
 }
 
 else if($tam=='update_student_profile'){
  include("update_student_profile.php");
 }
 else if($tam=='update_pass_student'){
  include("update_pass_student.php");}
  else if($tam=='add_capacity_student'){
    include("add_capacity_student.php");}
  
         ?>
        