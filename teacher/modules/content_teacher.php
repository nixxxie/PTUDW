<style>
  a {
    text-decoration: none;
  }

  #content:hover {
    background-color: lightgray !important;
    width: 223px;
    transform: scale(1.1);
    font-weight: bold;
    color: purple;
    border-radius: 10px;
  }

  a {
    padding-top: 10px;
    padding-bottom: 10px;
    display: inline-block;
  }
</style>
<div class="w3-row">
  <div class="w3-light-gray w3-container w3-quarter left" style="width: 250px; box-shadow: 2px 2px 5px gray; margin: 0 0;">
    <a href="layout_teacher.php?xem=addsv" id=content>
      Tạo mới Sinh Viên
    </a>
    <br>
    <a href="layout_teacher.php?xem=adddn" id=content>
      Tạo mới Doanh Nghiệp
    </a>
    <br>
    <a href="layout_teacher.php?xem=addgv" id=content>
      Tạo mới Giáo Viên
    </a>
    <br>
    <a href="layout_teacher.php?xem=add_capacity" id=content>
      Thêm Năng lực
    </a>
    <br>
    <a href="layout_teacher.php?xem=list_request_confirm" id=content>
      Danh sách phiếu xác nhận
    </a>
    <br>
    <a href="layout_teacher.php?xem=list_request_unconfimred" id=content>
      Danh sách phiếu chờ
    </a>
    <br>
    <a href="layout_teacher.php?xem=list_request_cancel" id=content>
      Danh sách phiếu từ chối
    </a>
    <br>
    <a href="layout_teacher.php?xem=list_teacher" id=content>
      Danh sách Giáo viên
    </a>
    <br>
    <a href="layout_teacher.php?xem=list_student" id=content>
      Danh sach sinh Viên
    </a>
    <br>
    <a href="layout_teacher.php?xem=list_enterprise" id=content>
      Danh sách doanh nghiệp
    </a>
    <br>
    <a href="layout_teacher.php?xem=update_pass_teacher" id=content>
      Thay đổi mật khẩu
    </a>
    <br>
  </div>

  <div class="w3-container w3-threequarter right">
    <?php if (isset($_GET['xem'])) {
      $tam = $_GET['xem'];
    } else
      $tam = '';
    // ktra xem bien tam co bang...
    if ($tam == 'addsv') {
      include("modules/right/addsv.php");
    } elseif ($tam == 'adddn') {
      include("modules/right/adddn.php");
    } elseif ($tam == 'addgv') {
      include("modules/right/addgv.php");
    } elseif ($tam == 'add_capacity') {
      include("modules/right/add_capacity.php");
    } elseif ($tam == 'list_request_unconfimred') {
      include("modules/right/list_request_unconfimred.php");
    } elseif ($tam == 'detail_request_enerprise') {
      include("modules/xuli/detail_request_unconfimred.php");
    } elseif ($tam == 'list_request_cancel') {
      include("modules/right/list_request_cancel.php");
    } elseif ($tam == 'detail_request_cancel') {
      include("modules/xuli/detail_request_cancel.php");
    } elseif ($tam == 'list_request_confirm') {
      include("modules/right/list_request_confirm.php");
    } elseif ($tam == 'detail_request_confirm') {
      include("modules/xuli/detail_request_confirm.php");
    } elseif ($tam == 'list_assigned') {
      include("modules/right/list_assigned.php");
    }
    //list_student_regster
    elseif ($tam == 'list_student_regster') {
      include("modules/right/list_student_register.php");
    } elseif ($tam == 'add_student_request') {
      include("modules/xuli/add_student_request.php");
    } elseif ($tam == 'detail_request_confirm') {
      include("modules/right/detail_request_confirm.php");
    } elseif ($tam == 'list_student') {
      include("modules/right/list_student.php");
    } elseif ($tam == 'list_enterprise') {
      include("modules/right/list_enterprise.php");
    } elseif ($tam == 'list_teacher') {
      include("modules/right/list_teacher.php");
    } elseif ($tam == 'teacher_profile') {
      include("modules/right/teacher_profile.php");
    } elseif ($tam == 'list_student_not_assigned') {
      include("modules/right/list_student_not_assigned.php");
    } elseif ($tam == 'update_pass_teacher') {
      include("modules/right/update_pass_teacher.php");
    } elseif ($tam == 'See_Student_profile') {
      include("modules/right/See_Student_profile.php");
    } elseif ($tam == 'See_enterprise_profile') {
      include("modules/right/See_enterprise_profile.php");
    }

    ?>
  </div>
</div>