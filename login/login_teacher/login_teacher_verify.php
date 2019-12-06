<?php
include("../config.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = mysqli_real_escape_string($connect, $_POST['teacher_code']);
    $pass = mysqli_real_escape_string($connect, $_POST['Password']);
          echo $myusername;
          $sql =mysqli_query($connect,"SELECT * FROM teacher_profile WHERE teacher_code ='$myusername' and password='$pass'");
    $row = mysqli_fetch_assoc($sql);

     $num=mysqli_num_rows($sql);
 echo $num;
    if ($num>0) {
       // session_register("myusername");
       $_SESSION['teacher_name'] =$row["full_name"];
       $_SESSION['id_teacher']=$row["id"];
        $_SESSION['login_user'] = $myusername;
        header("location:../../teacher/layout_teacher.php?xem=list_request_confirm");
    } else {
    //   header("location: ../login_verify/404.php");
    }
}
?>