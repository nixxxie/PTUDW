<?php session_start();?>
<div class="w3-green w3-container w3-twothird">
          <h2></h2>
        </div>

        <div class="w3-container w3-third">
        <div class="w3-row">
  <div class="w3-third w3-container w3-green">
    <h2> <a href="layout_enterprise.php?xem=enterprise_profile"><?php echo $_SESSION['organization_name']?><a></h2>
  </div>
  <div class="w3-third w3-container">
    <h2> <a href="layout_enterprise.php?xem=New_request">Tạo</a></h2>
  </div>
  <div class="w3-third w3-container">
    <h2><a href = "../login/login_verify/logout.php"> Logout</a></h2>
  </div>
</div>


        </div>