<?php
require("check.php");
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
    <!-- Jquery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- Custom.css -->
    <link rel="stylesheet" href="../../../src/assets/Styles/custom.css">
    <!-- navbar.css -->
    <link rel="stylesheet" href="../../../src/assets/Styles/navbar.css">
    <link rel="stylesheet" href="../../../src/assets/Styles/duyetungvien.css">
    <link rel="stylesheet" href="../../../src/assets/Styles/footer.css">
    <!-- reponsive.css -->
    <link rel="stylesheet" href="../../../src/assets/Styles/reponsive.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Duyệt ứng viên</title>
</head>

<body>
    <style>
        .format-nav {
            background-color: black !important;
        }

        #navbar-content {
            position: sticky;
        }
    </style>
    <div id="main" class="h-100">
        <?php
        require_once("./app/navbar.php");
        ?>
        <div id="content">
            <div class="container-fluid container-content vh-100">
                <div class="row">
                <div class="d-sm-flex flex-sm-row">
                        <div class="col-sm-4 col-duyetungvien">
                            <div class="col-sm-12 format-text-heading">
                                <h4>ĐƠN ỨNG TUYỂN</h4>
                            </div>
                            <div class="table-responsive m-1">
                                <table id="duyetungvien" class="table align-middle mb-0 bg-black format-table">
                                    <thead class="format-thead-background bg-success text-white">
                                        <tr class="format-text">
                                            <th></th>
                                            <th>Tên</th>
                                            <th>Công việc</th>
                                            <th>Chi tiết</th>
                                            <th>Duyệt</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-sm-4 col-duyetungvien">
                            <div class="col-sm-12 format-text-heading">
                                <h4>LỜI MỜI LÀM VIỆC</h4>
                            </div>
                            <div class="table-responsive m-1">
                                <table id="yeucautuyendung" class="table align-middle mb-0 bg-white format-table">
                                    <thead class="format-thead-background bg-success text-white">
                                        <tr class="format-text">
                                            <th></th>
                                            <th>Tên</th>
                                            <th>Công việc</th>
                                            <th>Chi tiết</th>
                                            <th>Trạng thái</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-sm-4 col-ungviendaduyet">
                            <div class="col-sm-12 format-text-heading">
                                <h4>ĐƠN ĐÃ DUYỆT</h4>
                            </div>
                            <div class="table-responsive m-1">
                                <table id="daduyet" class="table align-middle mb-0 bg-white format-table">
                                    <thead class="format-thead-background bg-success text-white">
                                        <tr class="format-text">
                                            <th></th>
                                            <th>Tên</th>
                                            <th>Công việc</th>
                                            <th>Chi tiết</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            require_once("../../../src/Views/layouts/app/footer.php");
        ?>
    </div>
    <script src="../../../src/assets/Scripts/script.js"></script>
    <script src="../../../src/assets/Scripts/duyetungvien.js"></script>
    <script src="../../../src/assets/Scripts/navbar.js"></script>
</body>

</html>
