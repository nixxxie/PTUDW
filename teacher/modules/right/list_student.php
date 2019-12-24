<?php
include("../login/config.php");

// lay list sinh vien 
$sql_student = mysqli_query($connect, "SELECT * from student_profile ");
?>
<style>
  #chitiet:hover {
    color: orangered;
    transform: scale(1.2)
  }
</style>
<h1>Danh sách sinh viên</h1>
<table class="w3-table">
  <tr>
    <th>Tên sinh viên</th>
    <th>Thông tin</th>

  </tr>
  <?php while ($row1 = mysqli_fetch_assoc($sql_student)) { ?>
    <tr>
      <td> <?php echo $row1["name"] ?></td>
      <td> <a href="layout_teacher.php?xem=See_Student_profile&student_id=<?php echo $row1["id"] ?>" id="chitiet">Chi tiết </a></td> <?php // lam sau href="<?php echo $row1["id"] 
                                                                                                                                        ?>
    </tr>
  <?php } ?>
</table>