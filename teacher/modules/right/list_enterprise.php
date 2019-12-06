
<?php
include("../login/config.php");

// lay list sinh vien 
$sql_enterprise=mysqli_query($connect,"SELECT * from enterprise_profile ");
?>
  <h1> danh sach Doanh Nghiệp </h1>
          <table class="w3-table">
<tr>
  <th>Ten Doanh Nghiệp </th>
  <th>thong tin</th>
 
</tr>
<?php while($row1=mysqli_fetch_assoc($sql_enterprise)){?>
<tr>
  <td> <?php echo $row1["organization_name"] ?> </td>
  <td> <a href="layout_teacher.php?xem=See_enterprise_profile&enterprise_id=<?php echo $row1["id"] ?>"> Xem  </a></td> 
  
</tr>
<?php } ?>
</table>