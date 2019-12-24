<?php
include("../../../login/config.php");
$name=$_POST["name"];
$sl=$_POST["sl"];
$doanhthu=$_POST["doanhthu"];
$address=$_POST["address"];
$home=$_POST["home"];
$code=$_POST["code"];
$hinhanh = $_FILES['img']['name']; // them form
$hinhanh_tmp = $_FILES['img']['tmp_name'];
$password=$_POST["Password"];



move_uploaded_file($hinhanh_tmp,"uploads/".$hinhanh);


 
    $sql = "INSERT INTO enterprise_profile(organization_name,employee_count,gross_revenue,address,home_page,tax_number,img,password) VALUES('$name','$sl','$doanhthu','$address','$home','$code','$hinhanh','$password')";
    if (mysqli_query($connect, $sql)) {
        echo "New record created successfully";
     //   header('location: ../layout_enterprise.php?xem=chitiet&id='.$id_request);
    } 
    else {
        echo('sai');
    }

?>