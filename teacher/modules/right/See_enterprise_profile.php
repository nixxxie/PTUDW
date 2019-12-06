<?php 
// hien thi thong tin doanh nghiep ----- TA MINH Thao  
include("../login/config.php");
$id=$_GET["enterprise_id"] ;
$sql=mysqli_query($connect,"SELECT * from enterprise_profile where id=$id ");

$row=mysqli_fetch_assoc($sql);

?>

         <div class="w3-col s3" style="margin-top: 30px ;margin-left: 10px ;">
         <img src="modules/xuli/uploads/img1.PNG " height="250px" width="200px">
         </div>
          <div class="w3-col s8" style="margin-left: 40px">
            <div class="w3-row">
             <div class=" w3-col w3-center"><h1 class="w3-card"><?php   echo $row["organization_name"];?></h1></div> 
            </div>
                
        
           
          <div class="w3-row">
           
         
             <p > Dịa Chỉ: <?php  echo $row["address"];?></p>


            

          </div>
       
          <div class="w3-row">
             <div class="w3-col "> <p> Doanh Thu<?php echo  $row['gross_revenue'];?></p></div>
            </div>    
          <div class="w3-row">
          <p>Số lượng nhân viên : <?php echo  $row['employee_count'];?></p>
             
           </div>
           <div class="w3-row">
           <p>Mô tả:  <?php echo  $row['Description'];?></p>
             
           </div>
          
          
       </div>
         <div class="w3-row">  
              <button> <a href="layout_teacher.php?xem=list_enterprise"  >Tro ve</a></button>
          </div>     
          

   
  
     