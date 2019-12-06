<?php
 include("../../login/config.php");
session_start();
// xu li luu  student_registration
$request_id=$_GET["request_id"];
$start_date=$_POST["start_date"];
$end_date=$_POST["end_date"];
$status= $_POST["status"];
$create=date("y-m-d");
$student_id=$_SESSION["student_id"];
echo $request_id ."</br>";
echo $start_date ."</br>";
echo $end_date ."</br>";
echo $status ."</br>";
echo $create ."</br>";
echo $student_id;

$sql = "UPDATE `assigned_table` SET `start_date` = '$start_date', `end_date` = '$end_date', `status` = '$status', `create_date` = '$create'  WHERE  `assigned_table`.`organization_request_id` = $request_id AND `assigned_table`.`student_id` = $student_id";

if(mysqli_query($connect,$sql))

//header("location:../../layout_enterprise.php?xem=list_request_enterprise");
header("location: ../../home/layout_student.php?xem=list_enterprise_request");
else echo "Error deleting record: " . mysqli_error($connect);

mysqli_close($connect);
?>