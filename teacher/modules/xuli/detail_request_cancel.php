<?php 
// hien thi thong tin doanh nghiep ----- TA MINH Thao  
include("../login/config.php");
$request_id=$_GET["id"];
$sql=mysqli_query($connect,"SELECT * from enterprise_recruitment_request_form where id=$request_id ");

$row=mysqli_fetch_assoc($sql);

// lay yeu cau nang luc
$sql=mysqli_query($connect,"SELECT ab.ablity_name, l.ability_required 
FROM list_of_required_capacity_of_each_request_coupon  l
JOIN ablity_dictionary ab  on ab.id=l.ability_id
WHERE l.organization_request_id=$request_id ");
?>

         <div class="w3-col s3" style="margin-top: 30px ;margin-left: 10px ;">
         <img src="xuli/uploads/img1.PNG alt=" height="250px" width="200px">
         </div>
          <div class="w3-col s8" style="margin-left: 40px">
            <div class="w3-row">
             <div class=" w3-col w3-center"><h1 class="w3-card"><?php    name_enterprise($row["organization_id"]);?></h1></div> 
            </div>
            <div class="w3-row">
             <div class="w3-col w3-center"> <p><?php echo  $row['request_name']?></p></div>
            </div>     
        
           
          <div class="w3-row">
            <div class="w3-col s2"> 
            <h3> Địa chỉ</h3> 
           </div>
            <div class="w3-col s9">
             <p ><?php  address_enterprise($row["organization_id"]);?></p>

</div>
            

          </div>
         
           <div class="w3-row">
           <div class="w3-col s3">  <h3>Trạng thái :</h3></div>
            <div class="w3-col s8">   <p> <?php check_status($row["statuss"]);?></p></div>
           
            </div>
            <div  class="w3-row">
            <div class="w3-col s2">  <h3> Mô tả :</h3></div>
            <div class="w3-col s9">   <p> <?php echo  $row['short_description']?></p></div>
          
       </div>
     
       </div>
       
      
           <div class="w3-col s6">
          

          <div class="w3-row">
          <div class="w3-col ">

            <div class="w3-row">  <h3 style="margin-left:5px;">Yeu cau tuyen dung</h3></div>
<?php while($row=mysqli_fetch_assoc($sql)) {
?>
             <div class="w3-row">
              <div class="w3-col s4 "><p><?php echo $row['ablity_name']?></p></div>
              <div class="w3-col s8 progres"><progress value="<?php echo $row['ability_required']?>" max="10" >

              </div>
            </div>
<?php }?>

          </div>

        
   
   <?php
   // LAY hình ảnh DOANH NGHIEP
function img_enterprise($organization_id){
  global $connect;
  $sql_name=mysqli_query($connect,"SELECT * from enterprise_profile  where id=$organization_id ");
  $dong=mysqli_fetch_assoc($sql_name);
  echo $dong["img"];
}
// LAY TEN DOANH NGHIEP
function name_enterprise($organization_id){
  global $connect;
  $sql_name=mysqli_query($connect,"SELECT * from enterprise_profile  where id=$organization_id ");
  $dong=mysqli_fetch_assoc($sql_name);
  echo $dong["organization_name"];
}
// LAY dia chi DOANH NGHIEP
function address_enterprise($organization_id){
  global $connect;
  $sql_name=mysqli_query($connect,"SELECT * from enterprise_profile  where id=$organization_id ");
  $dong=mysqli_fetch_assoc($sql_name);
  echo $dong["address"];
}



// kiem tra trang thai
function check_status($status){
  if($status==1000)
  echo "không phê duyệt ";
  
}

   
   ?>
         
           
          
     