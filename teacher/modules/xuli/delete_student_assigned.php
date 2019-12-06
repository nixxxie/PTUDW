<?php
$student_id=$_GET["student_id"];
 $request_id=$_GET["request_id"];
 include("../../../login/config.php");


 $sql="DELETE FROM assigned_table WHERE  organization_request_id=$request_id and student_id=$student_id";
 if(mysqli_query($connect,$sql)){
   $submit_date=date("y-m-d");
  // sau khi xoa sv tu bang phan cong 
  // them sv do vao bang dang ki
  $sql_student_registration = "INSERT INTO student_registration (student_id,request_id,submit_date) VALUES ($student_id,$request_id,$submit_date)";
      if (mysqli_query($connect, $sql_student_registration)) {
         
        
          header('location: ../../layout_teacher.php?xem=list_assigned&id='.$request_id);
       //   header('location: ../layout_enterprise.php?xem=chitiet&id='.$id_request);
      } 
      else {
          echo('sai');
      }
  
   // header('location: ../layout_enterprise.php?xem=chitiet&id='.$request_id);
  //header('location:../../xuli/SCR_1002E.php?id=<?php echo $id_request;);
 }
 else {
echo "Error deleting record: " ;
 
 }



// them nang luc


 ?>