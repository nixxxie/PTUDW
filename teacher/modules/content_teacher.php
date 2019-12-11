<style>
  a{
    text-decoration: none;
  }
</style>
<div class="w3-row">
  <div class="w3-light-gray w3-container w3-quarter left" style="width: auto">
    <a href="layout_teacher.php?xem=addsv">
      <p>Tạo mới Sinh Viên </p>
    </a>
    <a href="layout_teacher.php?xem=adddn">
      <p>Tạo mới Doanh Nghiệp</p>
    </a>
    <a href="layout_teacher.php?xem=addgv">
      <p>Tạo mới Giáo Viên</p>
    </a>
    <a href="layout_teacher.php?xem=add_capacity">
      <p>Thêm Năng lực</p>
    </a>
    <a href="layout_teacher.php?xem=list_request_confirm">
      <p>Danh sách phiếu xác nhận </p>
    </a>
    <a href="layout_teacher.php?xem=list_request_unconfimred">
      <p>Danh sách phiếu chờ </p>
    </a>
    <a href="layout_teacher.php?xem=list_request_cancel">
      <p>Danh sách phiếu từ chối </p>
    </a>
    <a href="layout_teacher.php?xem=list_teacher">
      <p>Danh sách Giáo viên </p>
    </a>
    <a href="layout_teacher.php?xem=list_student">
      <p>Danh sach sinh Viên</p>
    </a>
    <a href="layout_teacher.php?xem=list_enterprise">
      <p>Danh sách doanh nghiệp</p>
    </a>
    <a href="layout_teacher.php?xem=update_pass_teacher">
      <p>Thay đổi mật khẩu</p>
    </a>
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