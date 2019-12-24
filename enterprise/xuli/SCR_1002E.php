<style>
  #chitiet:hover{
    color:blueviolet;
    transform: scale(1.05);
  }
</style>
<?php
// xem chi tiet phieu yeu cau
$id = $_GET["id"];

include("../login/config.php");

$sql = mysqli_query($connect, "SELECT ab.ablity_name, l.ability_required, l.ability_id
FROM list_of_required_capacity_of_each_request_coupon  l
JOIN ablity_dictionary ab  on ab.id=l.ability_id
WHERE l.organization_request_id=$id ");

// lay list nang luc
$sql_ablity_dictionary = mysqli_query($connect, "SELECT * from ablity_dictionary ");
// lay list sinh vien
$sql_assigned_table = mysqli_query($connect, "SELECT * from assigned_table ab join student_profile sp on ab.student_id=sp.id where organization_request_id=$id ");
?>

<table class="w3-table w3-light-green w3-border" style="margin-left: 30%">
  <tr>
    <th style="margin-left: 30%">Tên năng lực </th>
    <th style="margin-left: 30%">Mức đánh giá</th>
    <th></th>
  </tr>
  <?php while ($row = mysqli_fetch_assoc($sql)) { ?>

    <tr>
      <td> <?php echo $row["ablity_name"] ?></td>

      <td><?php echo $row["ability_required"] ?> </td>
      <td><a href="xuli/xuli_SRC_1002E_xoa.php?id_request=<?php echo $id; ?>&ability_id=<?php echo $row["ability_id"]; ?> ">Xóa</a></td>
    </tr>
  <?php } ?>
</table>

<p style="font-size: 24px; font-weight: bold; margin-left: 30%;">Thêm năng lực</p>

<form action="xuli/xuli_SRC_1002E_add.php?id_REQUEST=<?php echo $id ?>" method="post">

  <select class="w3-select w3-light-gray w3-border" name="ablity_id" style="margin-left: 30%">

    <?php while ($dong = mysqli_fetch_assoc($sql_ablity_dictionary)) {
    ?>
      <option value="<?php echo  $dong["id"] ?>"><?php echo  $dong["ablity_name"] ?></option>
    <?php } ?>
  </select>

  <select class="w3-select w3-light-gray w3-border" name="rate" style="margin-left: 30%">

    <?php for ($x = 1; $x <= 10; $x++) {
    ?>
      <option value="<?php echo $x ?> "><?php echo $x ?> </option>
    <?php } ?>
  </select>
  <input type="text" name="note" value="Ghi Chú..." style="margin-left: 30%" />
  </br>
  <input type="submit" name="submit" style="margin-left: 30%" />
    </form>
    <p style="font-size: 24px; font-weight: bold;margin-left:30%">Danh sách sinh viên được phân công</p>
    <table class="w3-table" style="margin-left:30%">
      <tr>
        <th>Tên sinh viên</th>
        <th>Thông tin</th>

      </tr>
      <?php while ($row1 = mysqli_fetch_assoc($sql_assigned_table)) { ?>
        <tr > 
          <td> <?php echo $row1["name"] ?></td>
          <td id="chitiet"><a href="layout_enterprise.php?xem=See_Student_profile&student_id=<?php echo $row1["id"] ?>&request_id=<?php echo $id ?>">Xem Chi Tiết</a></td>
        </tr>
      <?php } ?>
    </table>
    <p style="font-size: 24px; font-weight: bold;margin-left:30%">In Danh Sách</p>