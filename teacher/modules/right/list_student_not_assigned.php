
<?php
include("../login/config.php");
$request_id=$_GET["id"];
// lay list sinh vien tu ds dang ki
$sql_list_student=mysqli_query($connect,"SELECT * from student_profile WHERE id NOT IN (SELECT student_id FROM assigned_table WHERE status=0 or status=1  )");
?>
  <h1> danh sach sv dang ki</h1>
          <table class="w3-table">
<tr>
  <th>Ten Sinh vien </th>
  <th>thong tin</th>
 
</tr>
<?php while($row1=mysqli_fetch_assoc($sql_list_student)){?>
<tr>
  <td> <?php echo $row1["name"] ?></td>
  <td> <a href="modules/xuli/add_student_not_assigned.php?request_id=<?php echo $request_id?>&id=<?php echo $row1["id"]?>">chon  </a></td> <?php// lam sau href="<?php echo $row1["id"] ?> "
  
</tr>
<?php } ?>
</table>