<?php
   include_once('../login/config.php');
 
   $sql = "SELECT * FROM enterprise_recruitment_request_form";
   $resultEnterPriseRequest = mysqli_query($connect, $sql);
   $followingdataEnterPriseRequest = $resultEnterPriseRequest->fetch_array(MYSQLI_ASSOC);

   $value = $_SESSION['username'];
   $sqlGetStartAndEndDate = "SELECT start_date, end_date, status FROM assigned_table, student_registration
    WHERE student_registration.student_id =
     (SELECT id from student_profile WHERE
      student_profile.student_code = '$value')";
   $result = mysqli_query($connect, $sqlGetStartAndEndDate);
   $followingdataDate = $result->fetch_array(MYSQLI_ASSOC);
?>
<html>
   <head>
      <title>Welcome </title>
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   </head>
   
   <body>
  
      <div class="container">
      <form  action="xuli/student_assigned_table.php?request_id=<?php echo $followingdataEnterPriseRequest["id"] ?>" method="post" >
         <div class="w3-panel w3-card"  style="width: 350px; height: 150px;padding-top:10px; margin-left: 35%; margin-top: 20%; border-radius: 10px;background-color: #9fa8a3; box-shadow: 2px 2px 2px gray;">
            <p>Yêu cầu: <?php echo $followingdataEnterPriseRequest['request_name'] ?></p>
            <p>Mô tả: <?php echo $followingdataEnterPriseRequest['short_description'] ?></p>
            <label for='uname'><b>Ngày bắt đầu: </b></label>
            <input type='date' name='start_date' value="<?php echo $followingdataDate['start_date'] ?>" required />
            <br>
            <b><span>Ngày kết thúc: </span></b>
            <input type='date' name='end_date' value="<?php echo $followingdataDate['end_date'] ?>" required /> </br>
            <span></b>Trạng thái:   </b> </span>
            <select name="status">
               <?php
                  if($followingdataDate['status'] == '0'){?>
                 <option value="<?php echo "0"?>"> Chờ thực hiện </option>
                   <option value="<?php echo "1"?>"> Đang thực hiện </option>";
                <?php  } else{?>
                     <option value="<?php echo "1"?>"> Đang thực hiện </option> 
                     <option value="<?php echo "2"?>"> Đã thực hiện xong </option>";
               <?php   } 
               ?>
            </select>
            <button type='submit'> Lưu </button>
            </form>
         </div>
      </div>
   
   </body>
   
</html>