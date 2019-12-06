<?php
include("../config.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($connect, $_POST['student_code']);
    $pass = mysqli_real_escape_string($connect, $_POST['Password']);
  //  echo $pass;
    $sql = "SELECT * FROM student_profile WHERE student_code = '$username' and password='$pass'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    //$active = $row['active'];
    
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $_SESSION['username'] =$row["name"];
        $id = $row['id'];
        $_SESSION["student_id"]=$id;
        $sqlSelectStatus = "SELECT status FROM assigned_table WHERE student_id = $id";
        $resultSatusCode = mysqli_query($connect, $sqlSelectStatus);
        $statusRegister = mysqli_fetch_array($resultSatusCode, MYSQLI_ASSOC);
        if($statusRegister['status'] == '0' || $statusRegister['status'] == '1'|| $statusRegister['status'] == '2'){
         
           
         
        
          header("location: ../../home/layout_student.php?xem=student_assigned_table");
        }else{
            header("location: ../../home/layout_student.php?xem=list_enterprise_request");
        }
    } else {
      
        header("location: ../login_verify/404.php");
    }
}
?>
