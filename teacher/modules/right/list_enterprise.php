<?php
include("../login/config.php");

// lay list sinh vien 
$sql_enterprise = mysqli_query($connect, "SELECT * from enterprise_profile ");
?>
<style>
  #chitiet:hover {
    color: orangered;
    transform: scale(1.2)
  }
</style>
<h1>Danh sách Doanh Nghiệp </h1>
<table class="w3-table">
  <tr>
    <th>Tên Doanh Nghiệp </th>
    <th>Thông tin</th>

  </tr>
  <?php while ($row1 = mysqli_fetch_assoc($sql_enterprise)) { ?>
    <tr>
      <td> <?php echo $row1["organization_name"] ?> </td>
      <td> <a href="layout_teacher.php?xem=See_enterprise_profile&enterprise_id=<?php echo $row1["id"] ?>" id=chitiet> Chi Tiết </a></td>

    </tr>
  <?php } ?>
</table>