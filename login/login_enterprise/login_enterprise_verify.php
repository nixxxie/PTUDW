<?php
include("../config.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = mysqli_real_escape_string($db, $_POST['organization_name']);

    $sql = "SELECT organization_name FROM ho_so_doanh_nghiep WHERE organization_name = '$myusername'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  //  $active = $row['active'];

    $count = mysqli_num_rows($result);
    if ($count == 1) {
       // session_register("myusername");
        $_SESSION['login_user'] = $myusername;
        header("location: login_enterprise_welcome.php");
    } else {
        header("location: ../login_verify/404.php");
    }
}
?>