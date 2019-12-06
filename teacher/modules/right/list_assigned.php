
<?php
include("../login/config.php");
$request_id=$_GET["id"];

// lay list sinh vien
$sql_assigned_table=mysqli_query($connect,"SELECT * from assigned_table ab join student_profile sp on ab.student_id=sp.id where organization_request_id=$request_id ");
?>

<h1> danh sach phan cong</h1>
 <table class="w3-table">
<tr>
  <th>Ten Sinh vien </th>
  <th>thong tin</th>
  <th> </th>
</tr>
<?php while($row1=mysqli_fetch_assoc($sql_assigned_table)){?>
<tr>
  <td> <?php echo $row1["name"] ?></td>
  <td><a href="layout_teacher.php?xem=See_Student_profile&student_id=<?php echo $row1["id"] ?>"> xem chi tiet  </a></td> 
  <td><a href="modules/xuli/delete_student_assigned.php?student_id=<?php echo $row1["id"] ?>&request_id=<?php echo $request_id?>"> Xoa</a></td> <?php// lam sau href="<?php echo $row1["id"] ?> 
</tr>
<?php } ?>
</table>
<h1> Thêm sinh viên </h1>
<button> <a href="layout_teacher.php?xem=list_student_regster&id=<?php echo $request_id?>"  > Danh sách đăng kí</a></button>
<button> <a href="layout_teacher.php?xem=list_student_not_assigned&id=<?php echo $request_id?>"  >Chưa được phân công</a></button>