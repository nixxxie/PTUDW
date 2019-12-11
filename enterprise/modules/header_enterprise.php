<?php session_start(); ?>
<style>
  a {
    text-decoration: none;
  }
</style>
<div class="w3-light-green w3-container w3-twothird">
  <h2></h2>
</div>

<div class="w3-container w3-third">
  <div class="w3-row">
    <div class="w3-third w3-container w3-light-green">
      <h3> <a href="layout_enterprise.php?xem=enterprise_profile"><?php echo $_SESSION['organization_name'] ?><a></h3>
    </div>
    <div class="w3-third w3-container">
      <h3> <a href="layout_enterprise.php?xem=New_request">Tạo</a></h3>
    </div>
    <div class="w3-third w3-container">
      <h3><a href="../login/login_verify/logout.php"> Logout</a></h3>
    </div>
  </div>


</div>