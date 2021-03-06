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


<div class="container w3-sand">
  <form action="modules/xuli/update_pass_teacher.php" method="post"enctype="multipart/form-data">
  <div class="row">
    <div class="col-25">
      <label for="fname">Mật khẩu cũ</label>
    </div>
    <div class="col-25">
      <input type="text" id="fname" name="pass" placeholder="">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="fname">Mật khẩu mới</label>
    </div>
    <div class="col-25">
      <input type="text" id="fname" name="new_pass" placeholder="">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="fname">Nhập lại mật khẩu</label>
    </div>
    <div class="col-25">
    <input type="text" id="fname" name="password" placeholder="">
    </div>
  </div>
 

 
  


 

  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>

</body>
</html>

