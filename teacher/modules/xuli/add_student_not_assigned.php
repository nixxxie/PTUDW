<p>Them Sinh Vien từ dánh sach đăng kí</p>
<?php

include("../../../login/config.php");

$request_id=$_GET["request_id"];
$student_id=$_GET["id"];

$sql = "INSERT INTO assigned_table(organization_request_id,student_id,start_date,end_date,status,create_date) VALUES('$request_id','$student_id','4-4-1012','5-5-1022','1','3-3-3101')";
    if (mysqli_query($connect, $sql)) {
        echo "New record created successfully";
        delete_student_register($student_id);
        
    } 
    else {
        echo('sai');
    }

function delete_student_register($student_id){
    global $connect;
    global $student_id;
    global $request_id;
 $sql="DELETE FROM student_registration WHERE  student_id=$student_id";
 if(mysqli_query($connect,$sql)){
    header('location: ../../layout_teacher.php?xem=list_assigned&id='.$request_id);
 
 }
 else {
echo "Error deleting record: " ;
 //header('location:../../xuli/SCR_1002E.php?id=<?php echo $id_request;');
 }
}


?>