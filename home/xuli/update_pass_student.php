<?php
 include("../../login/config.php");
session_start();
// xu li luu  student_registration
$pass=$_POST["pass"];
$new_pass=$_POST["new_pass"];
$password=$_POST["password"];

$student_id=$_SESSION["student_id"];

if($new_pass==$password){
$sql = "UPDATE `student_profile` SET `password` = '$password'  WHERE  `password` = $pass AND `id` = $student_id";
if(mysqli_query($connect,$sql))

//header("location:../../layout_enterprise.php?xem=list_request_enterprise");
header("location: ../../home/layout_student.php?xem=student_profile");
else echo "Error deleting record: " . mysqli_error($connect);
}
mysqli_close($connect);

?>