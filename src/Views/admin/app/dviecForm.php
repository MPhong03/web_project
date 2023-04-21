<div id="content" class="container-fluid bg">
    <div class="row justify-content-center">
    <h1 class="text-center" style="color:#44A682;margin-top:50px">ĐĂNG TIN TUYỂN DỤNG</h1>
      <div class="col-xs-12 col-sm-10 row-container my-5">
        <form  id="form" method="post" action="../../../src/Controllers/C_updateUser.php" class="needs-validation my-4" novalidate enctype="multipart/form-data">
            <input name="dviec" type="hidden">
            <div class="form-group col-sm-4 col-lg-12 col-md-12">
                <label for="namework">Tên Công Việc</label>
                <input name="tencongviec" type="text" class="form-control py-1.5" id="namework" placeholder="Nhập tên công việc..." required>
            </div><br>
            <div class="form-group col-sm-4 col-lg-12 col-md-12">
                  <label for="diachi">Địa Chỉ</label>
                  <input name="diachi" type="text" class="form-control py-1.5" id="diachi" placeholder="Nhập địa chỉ..." required>
              </div>
            <div class="d-sm-flex flex-sm-row mt-4">
                <div class="form-group col-sm-4">
                    <label for="linhvuc">Lĩnh Vực</label>
                    <select name="linhvuc" class="form-control" id="linhvuc">
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
                <div class="form-group col-sm-4">
                    <label for="chucvu">Chức Vụ</label>
                    <input name="chucvu" type="text" class="form-control py-1.5" id="chucvu" placeholder="Nhập chức vụ..." required>
                </div>
                <div class="form-group col-sm-4">
                    <label for="loaicv">Loại Công Việc</label>
                    <select name="loaicongviec" class="form-control" id="loaicv" required>
                        <option value="1">Toàn thời gian</option>
                        <option value="0">Bán thời gian</option>
                    </select>                    
                </div>
            </div><br>
            <div class="form-group col-sm-4 col-lg-12 col-md-12">
                <label for="bangcap">Yêu Cầu Bằng Cấp</label>
                <input name="yeucaubangcap" type="text" class="form-control py-1.5" id="bangcap" placeholder="Bằng đại học, bằng cấp 3, không cần bằng..." required>
            </div><br>
            
            <div class="d-sm-flex flex-sm-row">
                <div class="form-group col-sm-4">
                    <label for="luong">Lương</label>
                    <input min="1" max="9999999999" name="luong" type="number" class="form-control py-1.5" id="luong" placeholder="Nhập lương..." required>
                </div><br>
                <div class="form-group col-sm-4">
                  <label for="soluongtuyen">Số Lượng Tuyển</label>
                  <input name="soluongtuyendung" type="number" class="form-control py-1.5" id="soluongtuyen" placeholder="1" required>
                </div>
                <div class="form-group col-sm-4">
                    <label for="duration">Thời Hạn Tuyển</label>
                    <input name="thoihan" type="date" class="form-control py-1.5" id="duration" required>
                </div>
            </div><br>
            <div class="d-sm-flex flex-sm-row">
                <div class="form-group col-sm-6">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control py-1.5" id="email" placeholder="Nhập email..." required>
                </div>
                <div class="form-group col-sm-6">
                    <label for="number">Số Điện Thoại</label>
                    <input name="sdt" type="number" class="form-control py-1.5" id="number" placeholder="Nhập số điện thoại..." required>
                </div>
            </div><br>
            <div class="form-group col-12">
                <label for="comment">Mô Tả Công Việc</label>
                <textarea name="motacongviec" class="form-control" rows="3" id="comment" placeholder="Nhập mô tả công việc..." required></textarea>
            </div><br>
            <div class="col-12">
                <label for="yeucau">Yêu Cầu Công Việc</label>
                <textarea name="yeucaucongviec" class="form-control" rows="3" id="yeucau" placeholder="Nhập yêu cầu công việc..." required></textarea>
            </div><br>
            <div class="form-group col-12">
                  <label for="quyenloi">Quyền Lợi</label>
                  <textarea name="quyenloi" class="form-control" rows="3" id="quyenloi" placeholder="Nhập quyền lợi công việc..." required></textarea>
            </div><br>
            <div class="tag-input form-group col-12">
                    <div class="input">
                        <label for="tag-ip">Kỹ Năng</label>
                        <div class="d-flex flex-row">
                            <input class="form-control py-1.5 mt-2" type="text" id="tag-ip" placeholder="Yêu cầu kỹ năng cần thiết...">
                            <span class="material-icons btn" value="" style="color:black; font-size: 36px; margin-top:8px">add</span>
                        </div>
                    </div>
                    <div class="tag-list"></div>
            </div><br>
                <input id="tagkinang" type="hidden" name="tagkinang" value ="">
                <div class="offset-sm-4">
                    <button style='background-color:#44A682' onMouseOver="this.style.background='#b0d4b8'" onMouseOut="this.style.background='#44A682'" type="submit" class="mx-auto"><strong>ĐĂNG TIN</strong></button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>

<!-- <form method="post" action="../../../src/Controllers/test.php" enctype="multipart/form-data">

<input type="file" name="avatar">
  <button type="submit" name="btn">submit</button>
</form> -->
