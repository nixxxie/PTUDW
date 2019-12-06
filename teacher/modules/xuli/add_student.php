<?php
include("../../../login/config.php");
$name=$_POST["namesv"];
$code=$_POST["code"];
$class=$_POST["class"];
$date=$_POST["date"];
$join_date=date("y-m-d");
$hinhanh = $_FILES['uploadedFile']['name']; // them form
$hinhanh_tmp = $_FILES['uploadedFile']['tmp_name'];
$password=$_POST["Password"];
move_uploaded_file($hinhanh_tmp,"uploads/".$hinhanh);


 
    $sql = "INSERT INTO student_profile(student_code,name,date_of_birth,join_date,class_name,img,'password') VALUES('$code','$name','$date','$join_date','$class','$hinhanh','$password')";
    if (mysqli_query($connect, $sql)) {
        echo "New record created successfully";
     //   header('location: ../layout_enterprise.php?xem=chitiet&id='.$id_request);
    } 
    else {
        echo('sai');
    }

?>