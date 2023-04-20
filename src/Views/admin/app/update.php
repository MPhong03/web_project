<?php
// session_start();
require_once('getDataAdminNow.php');
?>
<div id="content" class="">
    <form id="form" method="post" action="../../../src/Controllers/C_updateUser.php" class="needs-validation my-4" novalidate>
        <input name="updateAdmin" type="hidden">
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
                        <div class="card-header fw-bold text-center">
                            <h4>Thông tin doanh nghiệp</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <!-- Form Group (Thông tin liên hệ)-->
                                <h6 class="fw-bold">Thông tin liên hệ</h6>
                                <div class="mb-3">
                                    <label class="small mb-1" for="name">Tên công ty</label>
                                    <input value='<?php echo $data["TenCongTy"] ?>' name="TenCongTy" type="text" class="form-control py-3" id="name" placeholder="Nhập tên doanh nghiệp ở đây" required>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="number">Số điện thoại</label>
                                        <input value='<?php echo $data["sdt"] ?>' name="sdt" type="number" class="form-control py-3" id="number" placeholder="Nhập số điện thoại ở đây" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="email">Email</label>
                                        <input value='<?php echo $data["email"] ?>' name="email" type="email" class="form-control py-3" id="email" placeholder="Nhập email ở đây" required>
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
                                        <input value='<?php echo $data["diachi"] ?>' name="diachi" type="text" class="form-control py-3" id="diachi" placeholder="Nhập tên địa chỉ ở đây" required>
                                    </div>
                                </div>
                                <!-- Form Group (Thông tin chi tiết)-->
                                <h6 class="fw-bold">Thông tin chi tiết</h6>
                                <div class="mb-3">
                                    <label class="small mb-1" for="comment">Giới thiệu doanh nghiệp</label>
                                    <textarea name="motacongty" class="form-control" rows="3" id="comment" placeholder="Mô tả doanh nghiệp ở đây" required><?php echo $data["motacongty"] ?></textarea>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="linhvuc">Lĩnh vực</label>
                                        <select name="linhvuc" class="form-select" id="linhvuc">
                                            <option selected>
                                            </option>
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
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="website">Trang web của công ty</label>
                                        <input value='<?php echo $data["website"] ?>' name="website" type="text" class="form-control py-3" id="website" placeholder="Nhập trang web của công ty" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="small mb-1" for="phucloi">Phúc lợi</label>
                                    <textarea name="phucloi" class="form-control" rows="3" id="phucloi" placeholder="Mô tả phúc lợi ở đây" required><?php echo $data["phucloi"] ?></textarea>
                                </div>
                                <!-- submit -->
                                <div class="row gx-3 p-3 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-lg btn-dark">Cập nhật</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
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