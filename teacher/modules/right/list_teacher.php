<?php
include("../login/config.php");

// lay list sinh vien 
$sql_student = mysqli_query($connect, "SELECT * from teacher_profile ");
?>
<style>
  #chitiet:hover {
    color: orangered;
    transform: scale(1.2)
  }
</style>
<h1>Danh sách Giáo Viên </h1>
<table class="w3-table">
  <tr>
    <th>Ten Giáo Viên</th>
    <th>Thông tin</th>

  </tr>
  <?php while ($row1 = mysqli_fetch_assoc($sql_student)) { ?>
    <tr>
      <td> <?php echo $row1["full_name"] ?></td>
      <td> <a href="modules/xuli/add_student_request.php?request_id=<?php echo $request_id ?>&student_id=<?php echo $row1["student_id"] ?>" id="chitiet"> Chi Tiết </a></td> <?php // lam sau href="<?php echo $row1["id"] 
                                                                                                                                                                                ?>

    </tr>
  <?php } ?>
</table>