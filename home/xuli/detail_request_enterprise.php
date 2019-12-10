<?php
// hien thi thong tin doanh nghiep ----- TA MINH Thao  
//include("../login/config.php");
$sql = mysqli_query($connect, "SELECT * from enterprise_recruitment_request_form where id=$request_id ");

$row = mysqli_fetch_assoc($sql);

?>

<div class="w3-col s3" style="margin-top: 30px ;margin-left: 10px ;">
  <img src="teacher/modules/uploads/<?php echo $row['img'] ?> alt=" height="100px" width="80px">
</div>
<div class="w3-col s8" style="margin-left: 40px">
  <div class="w3-row">
    <div class=" w3-col w3-center">
      <h1 class="w3-card"><?php name_enterprise($row["organization_id"]); ?></h1>
    </div>
  </div>
  <div class="w3-row">
    <div class="w3-col w3-center">
      <p><?php echo  $row['request_name'] ?></p>
    </div>
  </div>


  <div class="w3-row">


    <p><?php address_enterprise($row["organization_id"]); ?></p>




  </div>
  <div class="w3-row">
    <p>Số lượng người đăng kí :<?php number_of_registrations($row["organization_id"]); ?> </p>

  </div>
  <div class="w3-row">
    <p>Số lượng người đã phân công :<?php number_of_assigned($row["organization_id"]); ?> </p>

  </div>
  <div class="w3-row">
    <p>Trạng thái : <?php check_status($row["statuss"]); ?></p>

  </div>

</div>




<?php

// LAY TEN DOANH NGHIEP
function name_enterprise($organization_id)
{
  global $connect;
  $sql_name = mysqli_query($connect, "SELECT * from enterprise_profile  where id=$organization_id ");
  $dong = mysqli_fetch_assoc($sql_name);
  echo $dong["organization_name"];
}
// LAY dia chi DOANH NGHIEP
function address_enterprise($organization_id)
{
  global $connect;
  $sql_name = mysqli_query($connect, "SELECT * from enterprise_profile  where id=$organization_id ");
  $dong = mysqli_fetch_assoc($sql_name);
  echo $dong["address"];
}

// LAY SO LUONG NGUOI DANG KI
function number_of_registrations($organization_id)
{
  global $connect;
  $dem = 0;
  $sql_number = mysqli_query($connect, "SELECT * from student_registration  where request_id=$organization_id ");

  while ($sl = mysqli_fetch_assoc($sql_number)) {

    $dem++;
  }
  echo $dem;
}


// LAY SO LUONG NGUOI Phan cong
function number_of_assigned($organization_id)
{
  global $connect;
  $dem = 0;
  $sql_number = mysqli_query($connect, "SELECT * from assigned_table  where organization_request_id=$organization_id ");

  while ($sl = mysqli_fetch_assoc($sql_number)) {

    $dem++;
  }
  echo $dem;
}

// kiem tra trang thai
function check_status($status)
{
  if ($status == 4000)
    echo " Ngừng nhận đăng ký";
  elseif ($status == 3000)
    echo " Chờ sinh viên đăng ký";
}


?>