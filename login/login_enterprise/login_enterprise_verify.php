<?php
include("../config.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $tax_number=$_POST["tax_number"];
   $password=$_POST["Password"];

   
  $sql =mysqli_query($connect,"SELECT  * FROM enterprise_profile WHERE tax_number = '$tax_number' and password='$password'");
    $row = mysqli_fetch_assoc($sql);
  //  $active = $row['active'];

    $count = mysqli_num_rows($sql);
    
     if ($count==1) {
      
        // session_register("myusername");
        // $_SESSION['login_user'] = $myusername;
         $_SESSION["organization_name"]=$row["organization_name"];
        $_SESSION["organization_id"]=$row["id"];
     
        header("location:../../enterprise/layout_enterprise.php?xem=list_request_enterprise");
        
     } else {
      header("location: ../login_verify/404.php");
     }
}
?>