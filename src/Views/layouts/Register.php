<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Đăng kí</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <link href="../../../src/assets/Styles/style.css" rel="stylesheet">
</head>

<body>
  <div class="container-fluid">
    <div class="row justify-content-center">

      <div class="col-md-6 col-lg-6 d-none d-md-block vh-100">
        <img class="img-fluid h-100" src="../assets/Images/ad-form.gif" alt="adv">
      </div>

      <div class="col-md-6 col-lg-6 d-flex justify-content-center align-items-center" style="background-color: #b0d4b8;">
      <form id="form" action="../../../src/Controllers/C_Register.php" method="post" enctype="multipart/form"class="needs-validation" novalidate>
          <input type='hidden' name='SignIn' value='true'>
          <h1 class="text-left"><a style="text-decoration:none;color:black;" href="../../../index.php">SEEKER</a></h1>
          <h1 class="text-left">BẠN TÌM - CHÚNG TÔI CÓ</h1><br>
          <div class="form-group">
            <label for="username">Tài khoản</label>
            <input name="taikhoan" type="text" class="form-control py-3 forTV" id="username" required>
            <div class="invalid-feedback">Vui lòng nhập tài khoản.</div>
          </div>
          <div class="form-group">
            <label for="password" class="label">Mật khẩu</label>
            <input name="matkhau" type="password" class="form-control py-3 forTV" id="password" required>
            <div class="invalid-feedback">Vui lòng nhập mật khẩu.</div>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="email" class="form-control py-3 forTV" id="email" required>
            <div class="invalid-feedback">Vui lòng nhập email.</div>
          </div>
          <div class="form-group">
            <label for="number">Số điện thoại</label>
            <input name="sdt" type="number" class="form-control py-3 forTV" id="number" required>
            <div class="invalid-feedback">Vui lòng nhập số điện thoại.</div>
          </div>
          <div class="form-group">
            <label>Bạn là</label>
            <select class="form-control required" id="select" name="type" required>
              <option value="TV" style="color:black !important;">Người xin việc</option>
              <option value="TD" style="color:black !important;">Nhà tuyển dụng</option>
            </select>
            <div class="invalid-feedback">Vui lòng chọn.</div>
          </div>
          <div class="form-group">
            <label for="company">Tên doanh nghiệp</label>
            <input name="tendoanhnghiep" type="text" class="form-control py-3 forTD" id="company" disable>
            <div class="invalid-feedback">Vui lòng nhập tên doanh nghiệp.</div>
          </div>
          <div class="form-group">
            <label for="address">Địa chỉ</label>
            <input name="diachi" type="text" class="form-control py-3 forTD" id="address" disable>
            <div class="invalid-feedback">Vui lòng nhập địa chỉ.</div>
          </div>
          <div class="form-group">
            <label for="website">Website</label>
            <input name="website" type="text" class="form-control py-3 forTD" id="website" disable>
            <div class="invalid-feedback">Vui lòng nhập website.</div>
          </div><br>

          <div class="d-grid gap-2">
            <button type="submit" name='dangky' class="mx-auto btn btn-dark fa-lg mb-3">Đăng Ký</button>
          </div>

          <div class="">
            <div class="signup_link">Bạn đã có tài khoản? <a href="./C_SignIn.php">Đăng nhập</a>
            </div><br>

          </div>
        </form>
      </div>
    </div>
  </div>
  <script>
    $("#select").change(function(){
      if($(this).val()=="TD"){
        let x = $(".forTD")
        x.each(function(a,b){
          $(b).attr("required", true);
          $(b).attr("disable", false);
        })
      } else {
        let x = $(".forTD")
        x.each(function(a,b){
          $(b).attr("required", false);
          $(b).attr("disable", true);
        })
      }
    });
    // Disable form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Get the forms we want to add validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>
</body>

</html>
