<?php
// xu li dang ki phieu yc cho Student ----- TA MINH Thao  
include("../../login/config.php");
$request_id=$_GET["id"];
$student_id=$_GET["student_id"];
$date=$_GET["date"];


$sql = "INSERT INTO student_registration (student_id,request_id,submit_date) VALUES ($student_id,$request_id,$date)";
    if (mysqli_query($connect, $sql)) {
       
        check_amount($request_id);
        header('location: ../layout_student.php?xem=list_enterprise_request');
     //   header('location: ../layout_enterprise.php?xem=chitiet&id='.$id_request);
    } 
    else {
        echo('sai');
    }


// chekc số lượng
function check_amount($request_id){
    global $connect;
    // lay ra sô lương sinh viên đăng kí của phiếu
    $sql_amount=mysqli_query($connect,"SELECT *
    FROM student_registration  l
    WHERE l.request_id=$request_id");  
    $num=mysqli_num_rows($sql_amount);

    // lấy ra số lượng sinh viên mà phiếu yêu cần
    $sql_request_amount=mysqli_query($connect,"SELECT *
    FROM enterprise_recruitment_request_form  l
    WHERE l.id=$request_id");  
    $row=mysqli_fetch_assoc($sql_request_amount);
    $sl=$row["amount"];
    echo $num;
    echo $sl;
   if($num>=$sl){
      
$sql = "UPDATE enterprise_recruitment_request_form SET statuss='4000' WHERE id=$request_id";
if(mysqli_query($connect,$sql))
echo "dhi";
else echo "Error deleting record: " . mysqli_error($conn);

    }

}
?>


