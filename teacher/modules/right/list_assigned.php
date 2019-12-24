<style>
  #chitiet:hover{
    color: red;
    transform: scale(1.2)
  }
  #xoa:hover{
    color:brown;
    transform: scale(1.2)
  }
</style>
<?php
include("../login/config.php");
$request_id = $_GET["id"];

// lay list sinh vien
$sql_assigned_table = mysqli_query($connect, "SELECT * from assigned_table ab join student_profile sp on ab.student_id=sp.id where organization_request_id=$request_id ");
?>

<h1>Danh sách phân công</h1>
<table class="w3-table">
  <tr>
    <th>Tên sinh viên</th>
    <th>Thông tin</th>
    <th> </th>
  </tr>
  <?php while ($row1 = mysqli_fetch_assoc($sql_assigned_table)) { ?>
    <tr>
      <td> <?php echo $row1["name"] ?></td>
      <td><a id="chitiet" href="layout_teacher.php?xem=See_Student_profile&student_id=<?php echo $row1["id"] ?>"> Chi tiết </a></td>
      <td><a id="xoa" href="modules/xuli/delete_student_assigned.php?student_id=<?php echo $row1["id"] ?>&request_id=<?php echo $request_id ?>"> Xóa</a></td> <?php // lam sau href="<?php echo $row1["id"] 
                                                                                                                                                      ?>
    </tr>
  <?php } ?>
</table>
<h1> Thêm sinh viên </h1>
<a class="w3-button w3-light-green" href="layout_teacher.php?xem=list_student_regster&id=<?php echo $request_id ?>"> Danh sách đăng kí</a>
<a class="w3-button w3-light-green" href="layout_teacher.php?xem=list_student_not_assigned&id=<?php echo $request_id ?>">Chưa được phân công</a>