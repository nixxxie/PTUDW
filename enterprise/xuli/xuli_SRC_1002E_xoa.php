<?php
$request_id=$_GET["id_request"];
 $ability_id=$_GET["ability_id"];
 include("../../login/config.php");


 $sql="DELETE FROM list_of_required_capacity_of_each_request_coupon WHERE  organization_request_id=$request_id and ability_id=$ability_id";
 if(mysqli_query($connect,$sql)){
    header('location: ../layout_enterprise.php?xem=chitiet&id='.$request_id);
  //header('location:../../xuli/SCR_1002E.php?id=<?php echo $id_request;);
 }
 else {
echo "Error deleting record: " ;
 header('location:../../xuli/SCR_1002E.php?id=<?php echo $id_request;');
 }



// them nang luc


 ?>