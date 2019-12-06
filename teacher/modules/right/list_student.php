
<?php
include("../login/config.php");

// lay list sinh vien 
$sql_student=mysqli_query($connect,"SELECT * from student_profile ");
?>
  <h1> danh sach sv </h1>
          <table class="w3-table">
<tr>
  <th>Ten Sinh vien </th>
  <th>thong tin</th>
 
</tr>
<?php while($row1=mysqli_fetch_assoc($sql_student)){?>
<tr>
  <td> <?php echo $row1["name"] ?></td>
  <td> <a href="layout_teacher.php?xem=See_Student_profile&student_id=<?php echo $row1["id"] ?>">Xem  </a></td> <?php// lam sau href="<?php echo $row1["id"] ?> "
  
</tr>
<?php } ?>
</table>