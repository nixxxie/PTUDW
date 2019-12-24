<?php
include("../../../login/config.php");
$name=$_POST["name"];
$code=$_POST["code"];
$gioitinh=$_POST["gioitinh"];
$password=$_POST["Password"];

$hinhanh = $_FILES['img']['name']; // them form
$hinhanh_tmp = $_FILES['img']['tmp_name'];

move_uploaded_file($hinhanh_tmp,"uploads/".$hinhanh);


 
    $sql = "INSERT INTO teacher_profile(full_name,teacher_code,sex,img,password ) VALUES('$name','$code','$gioitinh','$hinhanh','$password')";
    if (mysqli_query($connect, $sql)) {
        echo "New record created successfully";
     //   header('location: ../layout_enterprise.php?xem=chitiet&id='.$id_request);
    } 
    else {
        echo('sai');
    }

?>