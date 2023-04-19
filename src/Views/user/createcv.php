<?php
    require_once("check.php");
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Teamplate-CV</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

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
        <!-- reponsive.css -->
        <link rel="stylesheet" href="../../../src/assets/Styles/reponsive.css">
        <!-- footer.css -->
        <link rel="stylesheet" href="../../../src/assets/Styles/footer.css">
        <!-- font-awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="../../../src/assets/Styles/createcv.css">
        <script type="text/javascript" src="../../../src/assets/Scripts/createcv.js"></script>

    </head>
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
            <div id="content">

                <div class="container container-content">
                    <div class="CV-header pt-3">
                        <h3>Danh sách mẫu CV xin việc 2023</h3>
                        <p class="text-secondary">Hãy lựa chọn mẫu CV phù hợp với công việc và tính cách của bản thân</p>
                    </div>
                    
                    <div class="cv-template mt-4 p-4">
                        <div class="row row-cols-1 row-cols-md-4 g-5">
                            <div class="col">
                                <div class="card shadow p-1 bg-white rounded h-100">
                                    <img src="../../../src/assets/Images/CV/cv.png" class="card-img-top" alt="...">
                                    <div class="middle">
                                        <button class="try-cv btn" id="cv-1" type="button" onclick="handleCVClick()">Sử dụng mẫu</button>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-title">Thanh lịch</h6>
                                        <div class="card-color rounded-circle bg-info">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow p-1 h-100">
                                    <img src="../../../src/assets/Images/CV/cv-2.png" class="card-img-top" alt="...">
                                    <div class="middle">
                                        <button class="try-cv btn" id="cv-2" type="button" onclick="handleCVClick()">Sử dụng mẫu</button>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-title">Đơn giản</h6>
                                        <div class="card-color rounded-circle bg-success">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow p-1 h-100">
                                    <img src="../../../src/assets/Images/CV/cv-3.png" class="card-img-top" alt="...">
                                    <div class="middle">
                                        <button class="try-cv btn" id="cv-3" type="button" onclick="handleCVClick()">Sử dụng mẫu</button>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-title">Sang trọng</h6>
                                        <div class="card-color rounded-circle bg-danger">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow p-1 h-100">
                                    <img src="../../../src/assets/Images/CV/cv-4.png" class="card-img-top" alt="...">
                                    <div class="middle">
                                        <button class="try-cv btn" id="cv-4" type="button" onclick="handleCVClick()">Sử dụng mẫu</button>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-title">Sáng tạo</h6>
                                        <div class="card-color rounded-circle bg-warning">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow p-1 h-100">
                                    <img src="../../../src/assets/Images/CV/cv-5.png" class="card-img-top" alt="...">
                                    <div class="middle">
                                        <button class="try-cv btn" id="cv-5" type="button" onclick="handleCVClick()">Sử dụng mẫu</button>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-title">Thanh lịch</h6>
                                        <div class="card-color rounded-circle bg-dark">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow p-1 h-100">
                                    <img src="../../../src/assets/Images/CV/cv-6.png" class="card-img-top" alt="...">
                                    <div class="middle">
                                        <button class="try-cv btn" id="cv-6" type="button" onclick="handleCVClick()">Sử dụng mẫu</button>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-title">Đơn giản</h6>
                                        <div class="card-color rounded-circle bg-primary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow p-1 h-100">
                                    <img src="../../../src/assets/Images/CV/cv-7.png" class="card-img-top" alt="...">
                                    <div class="middle">
                                        <button class="try-cv btn" id="cv-7" type="button" onclick="handleCVClick()">Sử dụng mẫu</button>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-title">Sang trọng</h6>
                                        <div class="card-color rounded-circle bg-secondary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow p-1 h-100">
                                    <img src="../../../src/assets/Images/CV/cv-8.png" class="card-img-top" alt="...">
                                    <div class="middle">
                                        <button class="try-cv btn" id="cv-8" type="button" onclick="handleCVClick()">Sử dụng mẫu</button>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-title">Sáng tạo</h6>
                                        <div class="card-color rounded-circle bg-light border">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            require_once("../../../src/Views/layouts/app/footer.php");
        ?>
    </body>
    <script src="../../../src/assets/Scripts/navbar.js"></script>
    <script src="../../../src/assets/Scripts/script.js"></script>

</html>
