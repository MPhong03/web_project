<?php
require("check.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cập nhật thông tin</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<!-- Boostrap CDN -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
	<!-- Boostrap separate -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<!-- Jquery CDN -->
	<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <!-- Custom.css -->
  <link rel="stylesheet" href="../../../src/assets/Styles/custom.css">
  <!-- navbar.css -->
  <link rel="stylesheet" href="../../../src/assets/Styles/navbar.css">
  	<!-- content2.css -->
	<link rel="stylesheet" href="../../../src/assets/Styles/content2.css">
  <!-- footer.css -->
  <link rel="stylesheet" href="../../../src/assets/Styles/footer.css">
  <!-- style2.css -->
  <link href="../../../src/assets/Styles/style2.css" rel="stylesheet">
  <!-- reponsive.css -->
  <link rel="stylesheet" href="../../../src/assets/Styles/reponsive.css">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <style>
    html,
    body {
      background-color: #FAF9F8;
    }

    .format-nav {
      background-color: black !important;
    }

    #navbar-content {
      position: sticky;
    }

    .delete-btn:hover {
      cursor: pointer;
    }
  </style>
  <?php
  require_once("./app/navbar.php");
  require_once("./app/update.php");
  require_once("../../../src/Views/layouts/app/footer.php");
  ?>
  <script>
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
    <!-- api để lấy dữ liệu tỉnh của việt nam -->
    <script src='https://cdn.jsdelivr.net/gh/vietblogdao/js/districts.min.js'></script>
  <script>
    console.log(c)
    $('select[name="thanhpho"]').each(function() {
      var $this = $(this),
        stc = ''
      c.forEach(function(i, e) {
        stc += '<option>' + i + '</option>'
        if (address_1 = localStorage.getItem('address_1_saved')) {
          $('select[name="thanhpho"] option').each(function() {
            if ($(this).text() == address_1) {
              $(this).attr('selected', '')
            }
          })
        }
      })
      $(this).append(stc)
    })
  </script>
<script src="../../../src/assets/Scripts/script.js"></script>
<script src="../../../src/assets/Scripts/navbar.js"></script>
</body>

</html>