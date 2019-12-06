<?php
include("../login/config.php");
// lay list nang luc
$sql_ablity_dictionary=mysqli_query($connect,"SELECT * from ablity_dictionary ");
?>
<h3> Them nang luc</h3>

<form action="xuli/add_capacity_student.php " method="post">

<select class="w3-select" name="ablity_id">

<?php while ($dong=mysqli_fetch_assoc($sql_ablity_dictionary)) {
 ?>
<option   value="<?php echo  $dong["id"]?>"><?php echo  $dong["ablity_name"]?></option>
<?php }?>
</select>

<select class="w3-select" name="rate">

<?php for($x=1;$x<=10;$x++) {
 ?>
<option value="<?php echo $x?> "><?php echo $x?> </option>
<?php }?>
</select>

</br>
<input type="submit" name="them" />
<form>

