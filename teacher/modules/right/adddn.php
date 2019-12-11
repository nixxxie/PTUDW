<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>


<div class="container w3-sand" >
<form action="modules/xuli/add_enterprise.php" method="post"enctype="multipart/form-data">
  <div class="row">
    <div class="col-25">
      <label for="fname">Tên Doanh Nghiêp</label>
    </div>
    <div class="col-25">
      <input type="text" id="fname" name="name" placeholder="">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="fname">Số Lượng nhân viên</label>
    </div>
    <div class="col-25">
      <input type="text" id="fname" name="sl" placeholder="">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="fname">Doanh Thu</label>
    </div>
    <div class="col-25">
      <input type="text" id="fname" name="doanhthu" placeholder="">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="fname">Địa Chỉ</label>
    </div>
    <div class="col-25">
      <input type="text" id="fname" name="address" placeholder="">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="fname">Trang chủ</label>
    </div>
    <div class="col-25">
      <input type="text" id="fname" name="home" placeholder="">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="fname">Mã số thuế</label>
    </div>
    <div class="col-25">
      <input type="text" id="fname" name="code" placeholder="">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="fname">Mật khẩu</label>
    </div>
    <div class="col-25">
      <input type="text" id="fname" name="Password" placeholder="">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Ảnh đại diện</label>
    </div>
    <div class="col-75">
    <input type='file' name='img' required />
    </div>
  </div>



 

  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>

</body>
</html>

