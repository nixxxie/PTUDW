<?php
include("../../login/config.php");
session_start();
$organization_id= $_SESSION["organization_id"];
$name=$_POST["name"];
$sl=$_POST["sl"];
$doanhthu=$_POST["doanhthu"];
$address=$_POST["address"];
$home=$_POST["home"];

$hinhanh = $_FILES['img']['name']; // them form
$hinhanh_tmp = $_FILES['img']['tmp_name'];

move_uploaded_file($hinhanh_tmp,"../../teacher/modules/xuli/uploads/".$hinhanh);


$sql = "UPDATE `enterprise_profile` SET   `organization_name` = '$name' , `employee_count` = '$sl' , `gross_revenue` = '$doanhthu' , `address` = '$address',home_page='$home' ,img='$hinhanh'  WHERE  `id` = $organization_id";
if (mysqli_query($connect, $sql)) {
    header("location: ../layout_enterprise.php?xem=enterprise_profile");
 //   header('location: ../layout_enterprise.php?xem=chitiet&id='.$id_request);
} 
else {
    echo('sai');
}

?>