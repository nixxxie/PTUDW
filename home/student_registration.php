<?php
   include_once('../login/config.php');
   session_start();
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
      <title>Welcome</title>
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   </head>
   
   <body>
      <div class='container'>
         <div class="w3-panel w3-card"  style="width: 400px; display: block; height: 30%; margin-left: 300px">
            <p>Subject: <?php echo $followingdataEnterPriseRequest['subject'] ?></p>
            <p>Description: <?php echo $followingdataEnterPriseRequest['short_description'] ?></p>
            <label for='uname'><b>Start date: </b></label>
            <input type='date' name='uname' value="<?php echo $followingdataDate['start_date'] ?>" required />
            <br>
            <b><span>End date: </span></b>
            <input type='date' name='psw1' value="<?php echo $followingdataDate['end_date'] ?>" required /> </br>
            <span></b>Status:   </b> </span>
            <select>
               <?php
                  if($followingdataDate['status'] == 1){
                  echo "<option> Chờ thực hiện </option> <option> Đang thực hiện </option>";
                  }else{
                     echo "<option> Đang thực hiện </option> <option> Đã thực hiện xong </option>";
                  } 
               ?>
            </select>
            <button type='submit'> Submit </button>
         </div>
      </div>
      <h2><a href = "../login/login_verify/logout.php">Sign Out</a></h2>
   </body>
   
</html>