<?php
include("../../login/config.php");
session_start();
$name=$_POST["namesv"];

$class=$_POST["class"];
$date=$_POST["date"];

$hinhanh = $_FILES['uploadedFile']['name']; // them form
$hinhanh_tmp = $_FILES['uploadedFile']['tmp_name'];

move_uploaded_file($hinhanh_tmp,"../../teacher/modules/xuli/uploads/".$hinhanh);
$student_id=$_SESSION["student_id"];

 
$sql = "UPDATE `enterprise_profile` SET   `name` = '$name' , `date_of_birth` = '$date' , `class_name` = '$class' , `img` = '$hinhanh'  WHERE  `id` = $student_id";
    if (mysqli_query($connect, $sql)) {
        header("location: ../../home/layout_student.php?xem=student_profile");
     //   header('location: ../layout_enterprise.php?xem=chitiet&id='.$id_request);
    } 
    else {
        echo('sai');
    }

?>