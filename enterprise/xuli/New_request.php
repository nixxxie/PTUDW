<?php
include("../../login/config.php");
session_start();
$request_name=$_POST["firstname"];
$short_description=$_POST["subject"];
$amount=$_POST["amount"];
$date_submit=date("y-m-d");
$status=3000;
$organization_id=$_SESSION["organization_id"];

// lay list nang luc
$sql_ablity_dictionary=mysqli_query($connect,"SELECT * from ablity_dictionary ");

$sql = "INSERT INTO enterprise_recruitment_request_form(request_name,organization_id,short_description,amount,date_submitted,statuss) VALUES('$request_name','$organization_id','$short_description','$amount','$date_submit','$status')";
    if (mysqli_query($connect, $sql)) {
   //   $row=mysqli_fetch_assoc($sql);
     // echo $row["id"];
      header("location:../../enterprise/layout_enterprise.php?xem=list_request_enterprise");
    } 
    else {
        echo('sai');
    }
?>