<?php
 // ktra xem co truyen bang phuong thuc get hay khong
 if(isset($_GET['xem']))
 {
     $tam=$_GET['xem'];
 }
 else 
 $tam='';
  // ktra xem bien tam co bang...
 if($tam=='list_request_enterprise'){
  include("xuli/list_request_enterprise.php");
 }
else if($tam=='detail_request_enerprise'){
  include("detail_request_enerprise.php");
 }
 else if($tam=='chitiet'){
    include("xuli/SCR_1002E.php");
   }
 else if($tam=='New_request'){
  include("New_request.php");
 }
 else if($tam=='enterprise_profile'){
  include("enterprise_profile.php");
 }
    
 else if($tam=='update_enterprise_profile'){
  include("update_enterprise_profile.php");
 }
 else if($tam=='update_pass_enterprise'){
  include("update_pass_enterprise.php");
 }
 
 else if($tam=='See_Student_profile'){
  include("See_Student_profile.php");
 }
 
 
  
  
         ?>
        