<?php
// hien thi thong tin doanh nghiep ----- TA MINH Thao  
include("../login/config.php");
$student_id = $_SESSION["student_id"];
$sql = mysqli_query($connect, "SELECT * from student_profile where id=$student_id ");

$row = mysqli_fetch_assoc($sql);

// lay danh sách nang luc


$sql_student_skill_profile = mysqli_query($connect, "SELECT ab.ablity_name, l.ability_rate 
FROM student_skill_profile  l
JOIN ablity_dictionary ab  on ab.id=l.ability_id
WHERE l.student_id=$student_id ");
?>

<div class="w3-col s3" style="margin-top: 30px;">
  <img src="teacher/modules/xuli/uploads/<?php echo $row['img'] ?> " height="250px" width="200px">
</div>
<div class="w3-col s9">
  <div class="w3-row">
    <div class=" w3-col w3-center">
      <h1 class="w3-card w3-pale-yellow" style="border-radius: 10px"><?php echo $row["name"]; ?></h1>
    </div>
  </div>



  <!-- <div class="w3-row"> -->
  <div class="w3-col s6 m6">
    <i class="fa fa-map-marker" style="font-size:30px;color: red;margin-top: 10px"></i>
  </div>
  <div class="w3-col s9">
    <p>Lớp :<?php echo $row["class_name"]; ?> </p>

    <!-- </div> -->


  </div>
  <div class="w3-row">
    <p>Ngày Sinh :<?php echo $row["date_of_birth"]; ?> </p>

  </div>


</div>

<div class="w3-col s6">


  <div class="w3-row">
    <div class="w3-col ">

      <div class="w3-row">
        <h3 style="margin-left:5px;">Năng lực</h3>
      </div>
      <?php while ($row1 = mysqli_fetch_assoc($sql_student_skill_profile)) {
        ?>
        <div class="w3-row">
          <div class="w3-col s2 ">
            <p><?php echo $row1['ablity_name'] ?></p>
          </div>
          <div class="w3-col s8 progres"><progress value="<?php echo $row1['ability_rate'] ?>" max="10">

          </div>
        </div>
      <?php } ?>

    </div>
    <div class="w3-row">
      <a class="w3-button w3-sand" style="margin-bottom: 5px;border-radius: 10px;box-shadow:2px 2px 1px gray;" href="layout_student.php?xem=update_student_profile">Cập nhât thông tin</a>
    </div>
    <div class="w3-row">
      <a class="w3-button w3-sand" style="margin-bottom: 5px;border-radius: 10px;box-shadow:2px 2px 1px gray;" href="layout_student.php?xem=update_pass_student">Cập nhât mật khẩu</a>
    </div>
    <div class="w3-row">
      <a class="w3-button w3-sand" style="margin-bottom: 5px;border-radius: 10px;box-shadow:2px 2px 1px gray;" href="layout_student.php?xem=add_capacity_student">Thêm năng lực</a>
    </div>

    <?php



    ?>

    <div class="w3-row">
      <a class="w3-button w3-deep-orange" style="margin-bottom: 5px;border-radius: 10px;box-shadow:1px 1px 1px gray;" href="layout_student.php?xem=list_enterprise_request">Trở về</a></a>
    </div>