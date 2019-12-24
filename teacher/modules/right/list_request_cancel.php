<style>
    #click:hover{
        color: red;
        transform: scale(1.2);
    }
</style>
<?php
// list request ----- TA MINH Thao  
include("../login/config.php");


// phan trang
if(isset($_GET['trang'])){
    $get_trang=$_GET['trang'];

}
else $get_trang=1;

$trang1=($get_trang-1)*6;
// Vitrichay=(tranghientai-1)*sobanghitrenmoitrang
// limit(vtrichay,soluonghangcanlay)



$sql=mysqli_query($connect,"SELECT * from enterprise_recruitment_request_form where   statuss='1000' limit $trang1,6");
?>
<?php while($row=mysqli_fetch_assoc($sql))
 
{  ?>

<div class="enterprise">

<p><?php    name_enterprise($row["organization_id"]);?></p>
          <p><?php echo  $row['request_name']?></p>
          <p> số lương người cần tuyển: <?php echo $row["amount"];?></p>
          <p>Trạng thái : <?php check_status($row["statuss"]);?></p>
          <a id="click" href="layout_teacher.php?xem=detail_request_cancel&id=<?php echo $row["id"];?>&organization_id=<?php echo $row["organization_id"];?>">Xem Chi Tiết</a>
    </div>
    <?php 
}
?>
<div  class=" w3-row">
<?php
// phan trang
$sql_trang=mysqli_query($connect,"SELECT * from enterprise_recruitment_request_form where   statuss='1000' ");

$count=mysqli_num_rows($sql_trang);
$trang=ceil($count/6);
  echo "Trang:";
  for($b=1;$b<=$trang;$b++){
      echo '<a href="?xem=list_request_cancel&trang='.$b.'" > '.$b . '</a>';
  }
  ?>
  </div>
  <?php

// LAY TEN DOANH NGHIEP
function name_enterprise($organization_id){
    global $connect;
    $sql_name=mysqli_query($connect,"SELECT * from enterprise_profile  where id=$organization_id ");
    $dong=mysqli_fetch_assoc($sql_name);
    echo $dong["organization_name"];
}

    
// kiem tra trang thai
function check_status($status){
    if($status==1000)
    echo " bị hủy     ";
    
 }
 


?>
    
