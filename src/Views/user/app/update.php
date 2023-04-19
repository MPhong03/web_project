<?php
// session_start();
function returnAll()
{
    require("../../connection.php");
    $id = $_SESSION["IDUser"];
    $sql = $conn->query("SELECT * FROM NguoiTimViec INNER JOIN TaiKhoanNguoiTimViec 
        ON NguoiTimViec.MaNguoiTimViec = TaiKhoanNguoiTimViec.MaNguoiTimViec
        WHERE NguoiTimViec.MaNguoiTimViec = '$id';");
    if ($sql) {
        $data = array();
        while ($r = $sql->fetch_assoc()) {
            $data[] = ["thanhpho" => $r["thanhpho"], "loaicongviec" => $r["loaicongviec"], "hoten" => $r["hoten"], "linkava" => $r["linkava"], "congviec" => $r["congviec"], "ngaysinh" => $r["ngaysinh"], "gioitinh" => $r["gioitinh"], "linhvuc" => $r["linhvuc"], "diachi" => $r["diachi"], "muctieunghenghiep" => $r["muctieunghenghiep"], "hocvan" => $r["hocvan"], "kinang" => $r["kinang"], "kinhnghiemlamviec" => $r["kinhnghiemlamviec"], "chitiet" => $r["chitiet"], "tagkinang" => $r["tagkinang"], "sdt" => $r["sdt"], "email" => $r["email"]];
        }
    } else {
        die("Can't get job from database");
    }
    return $data[0];
}
$data = returnAll();
$tagkinang = explode(",", $data["tagkinang"]);
foreach ($tagkinang as $value) $value = trim($value, "");
//init tag from db
$res = "";
foreach ($tagkinang as $tag) {
    $res = $res . "
    <div class='item'>
    <span class='delete-btn' onclick='deleteTag(this,\"$tag\")'>
    <i class='fa fa-times' aria-hidden='true'></i>
    </span>
    <span class='contentTag'>$tag</span>
    </div>
    ";
}
?>
<form id="form" method="post" action="../../../src/Controllers/C_updateUser.php" class="needs-validation my-4" novalidate>
    <div class="container-xl px-4 mt-4">
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 shadow">
                    <div class="card-header">Ảnh đại diện</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-account-profile rounded-circle mb-2" style="height: 170px; width:170px;" src="<?php echo $data["linkava"] ?>" alt="">
                        <div class="small font-italic text-muted mb-4">Vui lòng chỉ chọn file JPG hoặc PNG</div>
                        <div class="upload-img">
                            <button title="Đổi Avatar" class="btn btn-dark" id="avatarInfo" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Đổi ảnh đại diện
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card shadow mb-4">
                  <div class="card-header fw-bold text-center"><h4>Thông tin người tìm việc</h4></div>
                    <div class="card-body">
                        <form>
                            <!-- Form Group (Thông tin cá nhân)-->
                            <h6 class="fw-bold">Thông tin cá nhân</h6>
                            <div class="mb-3">
                                <label class="small mb-1" for="name">Họ và tên</label>
                                <input value='<?php echo $data["hoten"] ?>' name="hoten" type="text" class="form-control py-3" id="name" placeholder="Vui lòng nhập họ và tên" required>
                            </div>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="ns">Ngày sinh</label>
                                    <input value='<?php echo $data["ngaysinh"] ?>' name="ngaysinh" type="date" class="form-control py-3" id="ns" placeholder="dd/yy/mm" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="gt">Giới tính</label>
                                    <select value="value=''" name="gioitinh" class="form-select" id="gt" required>
                                        <option value="1">Nam</option>
                                        <option value="0">Nữ</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Form Group (Thông tin liên hệ)-->
                            <h6 class="fw-bold">Thông tin liên hệ</h6>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="number">Số điện thoại</label>
                                    <input value='<?php echo $data["sdt"] ?>' name="sdt" type="number" class="form-control py-3" id="number" placeholder="Vui lòng nhập số điện thoại" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="email">Email</label>
                                    <input value='<?php echo $data["email"] ?>' name="email" type="email" class="form-control py-3" id="email" placeholder="Vui lòng nhập địa chỉ mail" required>
                                </div>
                            </div>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="tp">Thành phố</label>
                                    <select name="thanhpho" class="form-select" id="tp" required>
                                        <option disabled="disabled">Tỉnh / Thành phố</option>
                                        <option selected><?php echo $data["thanhpho"] ?></option>
                                    </select>
                                    <input class="billing_address_1" name="" type="hidden" value="">
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="diachi">Địa chỉ</label>
                                    <input value='<?php echo $data["diachi"] ?>' name="diachi" type="text" class="form-control py-3" id="diachi" placeholder="Vui lòng nhập địa chỉ" required>
                                </div>
                            </div>
                            <!-- Form Group (Thông tin công việc)-->
                            <h6 class="fw-bold">Thông tin công việc</h6>
                            <div class="mb-3">
                                <label class="small mb-1" for="namework">Công việc</label>
                                <input value='<?php echo $data["congviec"] ?>' name="congviec" type="text" class="form-control py-3" id="namework" placeholder="Vui lòng nhập công việc" required>
                            </div>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="loaicv">Thời gian làm việc</label>
                                    <select name="loaicongviec" class="form-select" id="loaicv" required>
                                        <option value="1" <?php if ($data["loaicongviec"] == 1) echo "selected" ?>>Toàn thời gian</option>
                                        <option value="0" <?php if ($data["loaicongviec"] == 0) echo "selected" ?>>Bán thời gian</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="linhvuc">Lĩnh vực</label>
                                    <select name="linhvuc" class="form-select" id="linhvuc">
                                        <option selected><?php echo $data["linhvuc"] ?></option>
                                        <option>Công nghệ - thông tin</option>
                                        <option>Sản xuất và chế biến</option>
                                        <option>Kiến trúc và xây dựng</option>
                                        <option>Kinh doanh</option>
                                        <option>Thời trang</option>
                                        <option>Luật - nhân văn</option>
                                        <option>Nghệ thuật - thẩm mỹ - đồ họa</option>
                                        <option>Báo chí - khoa học và xã hội</option>
                                        <option>Khoa học cơ bản</option>
                                        <option>Sư phạm</option>
                                        <option>Nông - lâm - ngư nghiệp</option>
                                        <option>Khác</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="comment1">Mục tiêu nghề nghiệp</label>
                                <textarea name="muctieunghenghiep" class="form-control" rows="3" id="comment1" placeholder="Vui lòng nhập mục tiêu nghề nghiệp" required><?php echo $data["muctieunghenghiep"] ?></textarea>
                            </div>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="comment2">Trình độ học vấn</label>
                                    <textarea name="hocvan" class="form-control" rows="3" id="comment2" placeholder="Vui lòng nhập trình độ văn hóa" required><?php echo $data["hocvan"] ?></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="comment3">Kỹ năng</label>
                                    <textarea name="kinang" class="form-control" rows="3" id="comment3" placeholder="Vui lòng nhập kĩ năng" required><?php echo $data["kinang"] ?></textarea>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="comment4">Kinh nghiệm làm việc</label>
                                <textarea name="kinhnghiemlamviec" class="form-control" rows="3" id="comment4" placeholder="Vui lòng nhập kinh nghiệm làm việc" required><?php echo $data["kinhnghiemlamviec"] ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="comment5">Chi tiết</label>
                                <textarea name="chitiet" class="form-control" rows="3" id="comment5" placeholder="Vui lòng nhập chi tiết về bạn" required><?php echo $data["chitiet"] ?></textarea>
                            </div>
                            <div class="tag-input form-group mb-3">
                                <label class="small mb-1" for="tag-ip">Tag kĩ năng</label>
                                <div class="d-flex flex-row">
                                    <input class="form-control mt-2" type="text" id="tag-ip" placeholder="Nên tạo ít nhất 2 tag kĩ năng">
                                    <span class="material-icons btn" value="" style="color:gray; font-size: 36px">
                                        add_circle_outline
                                    </span>
                                </div>
                                <div class="tag-list"><?php echo $res ?></div>
                            </div>
                            <input id="tagkinang" type="hidden" name="tagkinang" value="<?php echo $data["tagkinang"] ?>">
                            <div class="row gx-3 p-3">
                                <button type="submit" class="btn btn-lg btn-dark">Cập nhật</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<form action="../../../src/Controllers/C_setAvatar.php" method='post' enctype="multipart/form-data">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-success" id="exampleModalLabel">Thay đổi ảnh đại diện</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <label for="avtInput" class="drop-container rounded-3">
                        <span class="drop-title">Tích cực chọn ảnh vận may sẽ đến</span>
                        <i class="bi bi-image-fill"></i>
                        <input type="file" id="avtInput" name="avatar" class="form-control" required>
                    </label>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy bỏ</button>
                    <button type="submit" class="btn btn-dark">Lưu thay đổi</button>
                </div>
            </div>
        </div>
    </div>
</form>
