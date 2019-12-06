
<?php
include("../login/config.php");
$request_id=$_GET["id"];
// lay list sinh vien tu ds dang ki
$sql_student_registration=mysqli_query($connect,"SELECT * from student_registration ab join student_profile sp on ab.student_id=sp.id where request_id=$request_id ");
?>
  <h1> danh sach sv dang ki</h1>
          <table class="w3-table">
<tr>
  <th>Ten Sinh vien </th>
  <th>thong tin</th>
  <th></th>
 
</tr>
<?php while($row1=mysqli_fetch_assoc($sql_student_registration)){?>
<tr>
  <td> <?php echo $row1["name"] ?></td>
  <td><a href="layout_teacher.php?xem=See_Student_profile&student_id=<?php echo $row1["id"] ?>"> xem chi tiet  </a></td> 
  <td> <a href="modules/xuli/add_student_request.php?request_id=<?php echo $request_id?>&student_id=<?php echo $row1["student_id"]?>">chon  </a></td> <?php// lam sau href="<?php echo $row1["id"] ?> "
  
</tr>
<?php } ?>
</table>