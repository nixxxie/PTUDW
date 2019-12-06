<?php
 include("../../login/config.php");
session_start();
// xu li luu  student_registration
$pass=$_POST["pass"];
$new_pass=$_POST["new_pass"];
$password=$_POST["password"];

$organization_id=$_SESSION["organization_id"];

if($new_pass==$password){
$sql = "UPDATE `enterprise_profile` SET `password` = '$password'  WHERE  `password` = $pass AND `id` = $organization_id";
if(mysqli_query($connect,$sql))

//header("location:../../layout_enterprise.php?xem=list_request_enterprise");
header("location: ../../enterprise/layout_enterprise.php?xem=enterprise_profile");
else echo "Error deleting record: " . mysqli_error($connect);
}
mysqli_close($connect);

?>