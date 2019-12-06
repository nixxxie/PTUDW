<?php 
// hien thi thong tin doanh nghiep ----- TA MINH Thao  
include("../login/config.php");
$request_id=$_GET["id"];
$sql=mysqli_query($connect,"SELECT * from enterprise_recruitment_request_form where id=$request_id ");

$row=mysqli_fetch_assoc($sql);

// lay danh sách nang luc
$sql_ablity_dictionary=mysqli_query($connect,"SELECT ab.ablity_name, l.ability_required 
FROM list_of_required_capacity_of_each_request_coupon  l
JOIN ablity_dictionary ab  on ab.id=l.ability_id
WHERE l.organization_request_id=$request_id ");
?>

         <div class="w3-col s3" style="margin-top: 30px ;margin-left: 10px ;">
         <img src="modules/xuli/uploads/<?php img_enterprise($row['organization_id'])?> " height="250px" width="200px">
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
             <i class="fa fa-map-marker" style="font-size:30px;color: red;margin-top: 10px"></i> 
           </div>
            <div class="w3-col s9">
             <p style="margin-left: -50px;"><?php  address_enterprise($row["organization_id"]);?></p>

</div>
            

          </div>
          <div class="w3-row">
          <p>số lượng người đăng kí  :<?php number_of_registrations($row["organization_id"]);?> </p>
             
           </div>
           <div class="w3-row">
           <p>số lượng người đã phân công :<?php number_of_assigned($row["organization_id"]);?>  </p>
             
           </div>
           <div class="w3-row">
           <p>Trạng thái : <?php check_status($row["statuss"]);?></p>
              
            </div>
         
       </div>
       
       <div class="w3-col s6">
          

          <div class="w3-row">
          <div class="w3-col ">

            <div class="w3-row">  <h3 style="margin-left:5px;">Yeu cau tuyen dung</h3></div>
<?php while($row=mysqli_fetch_assoc($sql_ablity_dictionary)) {
?>
             <div class="w3-row">
              <div class="w3-col s2 "><p><?php echo $row['ablity_name']?></p></div>
              <div class="w3-col s8 progres"><progress value="<?php echo $row['ability_required']?>" max="10" >

              </div>
            </div>
<?php }?>

          </div>
          <div class="w3-row">  
              <button> <a href="layout_teacher.php?xem=list_assigned&id=<?php echo $request_id?>"  > Xem bang phan cong</a></button>
          </div>
   
   <?php
   // LAY hình ảnh DOANH NGHIEP
function img_enterprise($organization_id){
  global $connect;
  $sql_img=mysqli_query($connect,"SELECT * from enterprise_profile  where id=$organization_id ");
  $dong=mysqli_fetch_assoc($sql_img);
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

// LAY SO LUONG NGUOI DANG KI
function number_of_registrations($organization_id){
  global $connect;
  $dem=0;
  $sql_number=mysqli_query($connect,"SELECT * from student_registration  where request_id=$organization_id ");

  while($sl=mysqli_fetch_assoc($sql_number)){
    
      $dem++;
  }
  echo $dem;
}


// LAY SO LUONG NGUOI Phan cong
function number_of_assigned($organization_id){
  global $connect;
  $dem=0;
  $sql_number=mysqli_query($connect,"SELECT * from assigned_table  where organization_request_id=$organization_id ");

  while($sl=mysqli_fetch_assoc($sql_number)){
    
      $dem++;
  }
  echo $dem;
}

// kiem tra trang thai
function check_status($status){
  if($status==4000)
  echo " ngừng nhận đăng kí  ";
  elseif($status==3000)
  echo " chờ sinh viên đăng kí
  ";
}

   
   ?>
         
           
          
     