
<?php 

// hien thi ten phieu ..... ----- TA MINH Thao  
$student_id=$_SESSION["student_id"];
//include("../../login/config.php");
$sql=mysqli_query($connect,"SELECT ab.ablity_name, l.ability_required 
FROM list_of_required_capacity_of_each_request_coupon  l
JOIN ablity_dictionary ab  on ab.id=l.ability_id
WHERE l.organization_request_id=$request_id ");

  // kiem tra trag thai bang phan cong
  $sql_status_assigned_table=mysqli_query($connect,"SELECT * from assigned_table WHERE student_id=$student_id");
  $status_assigned_table=mysqli_fetch_assoc($sql_status_assigned_table);
  // kiem tra trag thai phieu
  $sql_status_request=mysqli_query($connect,"SELECT * from enterprise_recruitment_request_form WHERE id=$request_id");
  $status_enterprise_recruitment_request_form=mysqli_fetch_assoc($sql_status_request);
?>

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

            <div class="w3-row">
             <button> <a href="layout_student.php?xem=list_enterprise_request">Tro ve</a></button>
             <?php 
           
             if($status_assigned_table["status"] =='0' || $status_assigned_table["status"]== '1' || $status_enterprise_recruitment_request_form["statuss"]== '4000' ){?>
             <button type="button" disabled>Dang Ki!</button>
<?php  }else { ?>
<button><a href="xuli/request_registration_enterprise.php?id=<?php echo $request_id;?>&student_id=<?php echo $_SESSION["student_id"]?>& date=<?php   echo date("Y/m/d");?>">Dang ki</a></button>
<?php  }?>
         </div>