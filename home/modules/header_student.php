<?php session_start(); ?>
<div class="w3-khaki w3-container w3-twothird">
  <h2></h2>
</div>
<div class="w3-container w3-third w3-khaki">
  <div class="w3-row">
    <div class="w3-half w3-container">
      <h3><a href="layout_student.php?xem=student_profile"> <?php echo $_SESSION['username'] ?></a></h3>
    </div>
    <div class="w3-half w3-container">
      <h3><a href="../login/login_verify/logout.php">Sign Out</a></h3>
    </div>
  </div>

</div>