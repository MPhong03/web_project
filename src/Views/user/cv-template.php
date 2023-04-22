<?php
    require_once("check.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>

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
    <link rel="stylesheet" href="../../../src/assets/Styles/duyetungvien.css">
    <!-- reponsive.css -->
    <link rel="stylesheet" href="../../../src/assets/Styles/reponsive.css">
    <!-- footer.css -->
    <link rel="stylesheet" href="../../../src/assets/Styles/footer.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom.css -->
    <link rel="stylesheet" href="../../../src/assets/Styles/custom.css">
    <!-- navbar.css -->
    <link rel="stylesheet" href="../../../src/assets/Styles/navbar.css">
    <!-- reponsive.css -->
    <link rel="stylesheet" href="../../../src/assets/Styles/reponsive.css">
    <!-- footer.css -->
    <link rel="stylesheet" href="../../../src/assets/Styles/footer.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="../../../src/assets/Styles/cv-template.css">
    <script type="text/javascript" src="../../../src/assets/Scripts/cv-template.js"></script>
    <style>
        .format-nav {
            background-color: black !important;
        }
        #navbar-content {
            position: sticky;
        }
    </style>
<body>
    <div id="main">
        <?php
        require_once("./app/navbar.php");
        ?>
        <div id="form-cv" class="container cv-template-1 pt-4 pb-4 ps-4 pe-4 border border-secondary">
            <header class="bg-success bg-gradient text-white border py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 text-left text-md-center">
                            <img id="profileCV" class="rounded img-fluid " width="200px" src="../../../src/assets/Images/18-F.png" alt="Profile Photo" />
                        </div>
                        <div class="col-md-9">
                            <!-- hoten -->
                            <h1 id="hotenCV">Phạm Nhật Quỳnh</h1>
                            <!-- chuyennganh -->
                            <h5 id="chuyennganhCV">Software Developer</h5>
                            <!-- gioithieubanthan -->
                            <!--<p id="gioithieu" class="border-top pt-3">Quỳnh vừa xinh đẹp còn đáng yêu. Nhận w đi!!</p> -->
                        </div>
                    </div>
                </div>
            </header>
            <div class="profile">
                <div class="container">
                    <div class="row">
                        <div class="success mt-2 col-lg-4  border border-secondary ">
                            <h5 class="mt-2 pt-1 pb-1 border-top border-bottom border-2 border-success " id="dec">Thông tin cá nhân</h5>
                            <div class="row">
                                <!-- email -->
                                <div class="input-group mb-2">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope mb-1"></i></span>
                                    <input type="text" class="form-control" placeholder="https://www.gmail.com/" aria-label="" aria-describedby="basic-addon1">
                                </div>
                                <!-- mangxahoi -->
                                <div class="input-group mb-2">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-globe mb-1"></i></span>
                                    <input type="text" class="form-control" placeholder="https://www.facebook.com/" aria-label="" aria-describedby="basic-addon1">
                                </div>
                                <!-- sodienthoai -->
                                <div class="input-group mb-2">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone-fill mb-1"></i></span>
                                    <input type="text" class="form-control " placeholder="0123456789" aria-label="" aria-describedby="basic-addon1">
                                </div>
                                <!-- diachi -->
                                <div class="input-group mb-2">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-geo-alt-fill mb-1"></i></span>
                                    <input type="text" class="form-control " placeholder="Quảng Nam" aria-label="" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="study mt-2 col-lg-4 border border-secondary">
                            <h5 class="dec mt-2 pt-1 pb-1 border-top border-bottom border-2 border-success">Trình độ học vấn</h5>
                            <div class="row">
                                <!-- tenhoc -->
                                <div class="truongdaihoc mb-2">
                                    <input type="text" class="form-control" placeholder="Tên trường học" value="">
                                </div>
                                <!-- xeploaitotnghiep -->
                                <div class="xeploaitotnghiep mb-2">
                                    <input type="text" class="form-control" placeholder="Giỏi" value="">
                                </div>
                                <!-- gpa -->
                                <div class="diemtotnghiep mb-2">
                                    <input type="text" class="form-control" placeholder="8.0" value="">
                                </div>
                                <!-- thanhtich -->
                                <div class="thanhtich mb-2">
                                    <textarea rows="2" cols="1" type="text" class="form-control" placeholder="Mô tả quá trình học hoặc thành tích của bạn" value=""></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="skill mt-2 col-lg-4 border border-secondary">
                            <h5 class="dec mt-2 pt-1 pb-1 border-top border-bottom border-2 border-success">Kỹ năng</h5>
                            <!-- tenkynang -->
                            <div class="tenkynang mb-2">
                                <input type="text" class="form-control" placeholder="Tên kỹ năng" value=""></textarea>
                            </div>
                            <!-- motakynang -->
                            <div class="motakynang mb-2">
                                <textarea rows="2" cols="1" type="text" class="form-control" placeholder="Mô tả về kỹ năng của bạn" value=""></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="success mt-2 border border-secondary ">
                            <h5 class="dec mt-2 pt-1 pb-1 border-top border-bottom border-2 border-success">Kinh nghiệm làm việc</h5>
                            <!-- tencongty -->
                            <div class="congtydacongtac mb-2">
                                <input type="text" class="form-control" placeholder="Công ty đã từng làm việc" value=""></textarea>
                            </div>
                            <!-- thoigiandalamviec -->
                            <div class="thoigiancongtac mb-2">
                                <input type="text" class="form-control" placeholder="Thời gian đã làm việc" value=""></textarea>
                            </div>
                            <!-- vitricongviec -->
                            <div class="vitricongtac mb-2">
                                <input type="text" class="form-control" placeholder="Vị trí công việc khi đó" value=""></textarea>
                            </div>
                            <!-- motakinhnghiem -->
                            <div class="Kinhnghiemlamviec mb-2">
                                <textarea rows="2" cols="1" type="text" class="form-control" placeholder="Mô tả về kinh nghiệm của bạn" value=""></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="success mt-2 col-lg-6  border border-secondary ">
                            <h5 class="dec mt-2 pt-1 pb-1 border-top border-bottom border-2 border-success">Chứng chỉ</h5>
                            <!-- chungchi -->
                            <div class="chungchi mb-2">
                                <textarea rows="4" cols="1" type="text" class="form-control" placeholder="Tên chứng chỉ _ Thời hạn chứng chỉ" value=""></textarea>
                            </div>
                        </div>
                        <div class="success mt-2 col-lg-6  border border-secondary ">
                            <h5 class="dec mt-2 pt-1 pb-1 border-top border-bottom border-2 border-success">Công việc mong muốn</h5>
                            <!-- vitrimongmuon -->
                            <div class="vitrimongmuon mb-2">
                                <input type="text" class="form-control" placeholder="Vị trí công việc mong muốn" value=""></textarea>
                            </div>
                            <!-- mucluongmongmuon -->
                            <div class="mucluong mb-2">
                                <input type="text" class="form-control" placeholder="Mức lương mong muốn" value=""></textarea>
                            </div>
                            <!-- noilamviecmongmuon -->
                            <div class="noilamviecmongmuon mb-2">
                                <input type="text" class="form-control" placeholder="Nơi làm việc mong muốn" value=""></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center ">
            <!-- <div class="col-lg-3 text-center mt-4">
                <button class="save-cv btn px-3 py-3" type="button"><i class="bi bi-card-text"></i>&#160 Lưu CV</button>
            </div> -->
            <div class="col-lg-3 text-center mt-4">
                <button class="down-cv btn px-3 py-3" id="pdf-cv" type="button"><i class="bi bi-box-arrow-down"></i>&#160 Tải xuống</button>
            </div>
            <div class="col-lg-3 text-center mt-4">
                <button class="more-cv btn px-3 py-3" id="trans-cv" type="button"><i class="bi bi-arrow-right"></i>&#160 Xem thêm mẫu</button>
            </div>
        </div>
        <?php
            require_once("../../../src/Views/layouts/app/footer.php");
        ?>
    </div>
    <script src="../../../src/assets/Scripts/navbar.js"></script>
    <script src="../../../src/assets/Scripts/script.js"></script>
    <script src="../../../src/assets/Scripts/cv.js"></script>
</body>
</html>
