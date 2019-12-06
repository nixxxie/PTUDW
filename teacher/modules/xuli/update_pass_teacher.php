<?php
 include("../../../login/config.php");
session_start();
// xu li luu  student_registration
$pass=$_POST["pass"];
$new_pass=$_POST["new_pass"];
$password=$_POST["password"];

$teacher_id=$_SESSION['id_teacher'];

if($new_pass==$password){
$sql = "UPDATE `teacher_profile` SET `password` = '$password'  WHERE  `password` = $pass AND `id` = $teacher_id";
if(mysqli_query($connect,$sql))

//header("location:../../layout_enterprise.php?xem=list_request_enterprise");
header("location:../../layout_teacher.php?xem=list_request_confirm");
else echo "Error deleting record: " . mysqli_error($connect);
}
mysqli_close($connect);

?>