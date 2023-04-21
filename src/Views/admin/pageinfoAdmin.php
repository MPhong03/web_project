<?php
require("check.php");
require_once("./app/getDataAdminNow.php");
if (isset($_GET["idcongty"]) && $_SESSION["who"] == 'Client') {
    $data = returnAll($_GET["idcongty"]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Boostrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- Boostrap separate -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <!-- Jquery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- Custom.css -->
    <link rel="stylesheet" href="../../../src/assets/Styles/custom.css">
    <link rel="stylesheet" href="../../../src/assets/Styles/infocompany.css">
    <link rel="stylesheet" href="../../../src/assets/Styles/content2.css">
    <link rel="stylesheet" href="../../../src/assets/Styles/footer.css">
    <link rel="stylesheet" href="../../../src/assets/Styles/navbar.css">
    <!-- reponsive.css -->
    <link rel="stylesheet" href="../../../src/assets/Styles/reponsive.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Find Work</title>
</head>

<body>
    <style>
        .format-nav {
            background-color: black !important;
        }

        #navbar-content {
            position: sticky;
        }

        .delete-btn:hover {
            cursor: pointer;
        }

        .offset-sm-3 {
            margin-left: 0 !important;
        }

        .col-sm-6 {
            flex: 0 0 auto;
            width: 100% !important;
        }
    </style>
    <div id="main">
        <?php
        require_once("./app/navbar.php");
        ?>
        <div class="header d-flex justify-content-center">
            <img src="../../assets/Images/wall.jpg" alt="Snow" style="width:100%; height: 350px">
            <div class="centered" style="height: 200px; width: 550px; background-color: white ">
            </div>
            <div class="img-center">
                <img id="avatarInfo" class="rounded-circle" style="width:180px; height: 180px" src="<?php echo $data["linkava"] ?>" alt="">
            </div>
            <h3 class="format-nameComapy"><?php echo $data["TenCongTy"] ?></h3>
            <h6 class="gioithieucongty">Chào mừng bạn đã đến với trang thông tin của công ty chúng tôi</h6>
        </div>
        <!-- liên hệ -->
        <div class="container d-flex justify-content-center">
            <div class="contact">
                <ul class="info">
                    <li><i class="bi bi-telephone-fill"></i>&nbsp <b>Số điện thoại:</b><?php echo $data["sdt"] ?></li>
                    <li><i class="bi bi-envelope-fill"></i>&nbsp <b>Email:</b><?php echo $data["email"] ?></li>
                    <li><i class="bi bi-geo-alt-fill"></i>&nbsp <b>Địa chỉ:</b><?php echo $data["diachi"] ?></li>
                    <i class="bi bi-twitter"></i>&nbsp<i class="bi bi-instagram"></i>&nbsp
                    <i class="bi bi-pinterest"></i>&nbsp<i class="bi bi-linkedin"></i>
                </ul>
            </div>
        </div>
        <div id="content2">
            <div class="container">
                <div id="navAdmin" class="format-col-option nav nav-tabs" style="border:none;">
                    <a onclick="vieclam()" class="format-text nav-link active" href="#">Việc làm</a>
                    <a onclick="gioithieu('<?php echo $gioithieu ?>')" class="format-text nav-link" href="#">Giới thiệu công ty</a>
                    <a onclick="phucloi(`<?php echo $phucloi ?>`)" class="format-text nav-link" href="#">Phúc lợi</a>
                </div>
                <hr>
                <script>
                    let save = `
                        <?php
                        echo $phucloi
                        ?>`;
                </script>

            </div>
        </div>
        <?php
        require_once("../../../src/Views/layouts/app/content3.php");
        require_once("../../../src/Views/layouts/app/footer.php");
        ?>
    </div>
    <script>
        $("#navAdmin").click(function(e) {
            $(this).children().each(function(a, b) {
                $(b).removeClass("active");
            })
            $(e.target).addClass("active")
        })
    </script>
    <script src="../../../src/assets/Scripts/script.js"></script>
    <script src="../../assets/Scripts/inforadmin.js"></script>
    <script src="../../assets/Scripts/navbar.js"></script>
</body>

</html>
<?php
if ($_SESSION["who"] == 'Client') {
    if (isset($_GET["idbaidang"])) {
?>
        <script>
            setTimeout(function() {
                get_detail_job(<?php echo $_GET["idbaidang"] ?>);
            }, 500)
        </script>
    <?php
    }
    if (isset($_GET["idcongty"])) {
    ?>
        <script>
            setTimeout(function() {
                get_job_with_urlID(<?php echo $_GET["idcongty"] ?>);
            }, 500)
        </script>
<?php
    }
}
?>
<?php
if ($_SESSION["who"] == 'Admin') {
    if (isset($_GET["idbaidang"])) {
        echo $_GET["idbaidang"];
?>
        <script>
            setTimeout(function() {
                get_detail_job(parseInt(<?php echo $_GET["idbaidang"] ?>));
            }, 500)
        </script>
<?php
    }
}
