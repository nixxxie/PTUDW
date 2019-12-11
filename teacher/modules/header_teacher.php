<?php session_start(); ?>
<style>
  #signout:hover {
    color: red;
  }
</style>
<div class="w3-light-green w3-container w3-twothird">
  <h2></h2>
</div>
<div class="w3-container w3-third">
  <div class="w3-row">
    <div class="w3-half w3-container w3-light-green">
      <h3> <a href="layout_teacher.php?xem=teacher_profile" style="text-decoration: none"><?php echo $_SESSION['teacher_name'] ?></a></h3>
    </div>
    <div class="w3-half w3-container">
      <h3><a href="../login/login_verify/logout.php" style="text-decoration: none" id=signout>Sign Out</a></h3>
    </div>
  </div>

</div>