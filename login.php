<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

  <div class="w3-container w3-khaki w3-center " style="height:250px ;width:500px;margin-top:200px; margin-left: 30%; border-radius: 20px;">
    <div class="w3-row w3-center">
      <P>LOGIN</P>
    </div>

    <div class="w3-row">
      <a href="javascript:void(0)" onclick="openCity(event, 'SV');">
        <div class="w3-third tablink w3-bottombar w3-hover-blue-grey w3-padding">Sinh Viên</div>
      </a>
      <a href="javascript:void(0)" onclick="openCity(event, 'DN');">
        <div class="w3-third tablink w3-bottombar w3-hover-blue-grey w3-padding">Doanh Nghiệp</div>
      </a>
      <a href="javascript:void(0)" onclick="openCity(event, 'GV');">
        <div class="w3-third tablink w3-bottombar w3-hover-blue-grey w3-padding">Giáo Viên</div>
      </a>
      <!-- <p class="w3-center" style="padding-top: 2cm"> Chọn mục đăng nhập </p> -->
    </div>

    <div id="SV" class="w3-container city w3-center" style="display:none;margin-top:25px">
      <?php
      include "login/login_student/login_student.php";
      ?>
    </div>

    <div id="GV" class="w3-container city  w3-center" style="display:none;margin-top:25px">
      <?php
      include "login/login_teacher/login_teacher.php";
      ?>
    </div>

    <div id="DN" class="w3-container city  w3-center" style="display:none;margin-top:25px">
      <?php
      include "login/login_enterprise/login_enterprise.php";
      ?>
    </div>



  </div>
  <script>
    function openCity(evt, cityName) {
      var i, x, tablinks;
      x = document.getElementsByClassName("city");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < x.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.firstElementChild.className += " w3-border-red";
    }
  </script>


</body>

</html>