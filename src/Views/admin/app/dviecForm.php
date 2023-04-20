<div id="content" class="container-fluid bg">
    <div class="row justify-content-center">
      <div class="col-xs-12 col-sm-10 row-container my-5">
        <form  id="form" method="post" action="../../../src/Controllers/C_updateUser.php" class="needs-validation my-4" novalidate enctype="multipart/form-data">
            <input name="dviec" type="hidden">
            <h1 class="text-center">ĐĂNG TIN TUYỂN DỤNG</h1>
            <div class="form-group col-sm-4 col-lg-12 col-md-12">
                <label for="namework">Tên Công Việc</label>
                <input name="tencongviec" type="text" class="form-control py-3" id="namework" placeholder="Nhập tên công việc..." required>
            </div>
            <div class="form-group col-sm-4 col-lg-12 col-md-12">
                  <label for="diachi">Địa Chỉ</label>
                  <input name="diachi" type="text" class="form-control py-3" id="diachi" placeholder="Nhập địa chỉ..." required>
              </div>
            <div class="d-sm-flex flex-sm-row mt-4">
                <div class="form-group col-sm-4">
                    <label for="linhvuc">Lĩnh Vực</label>
                    <select name="linhvuc" class="form-control" id="linhvuc">
                        <option>An toàn lao động</option>
                        <option>Bán hàng kỹ thuật</option>
                        <option>Bán lẻ / bán sỉ</option>
                        <option>Báo chí / Truyền hình</option>
                        <option>Bảo hiểm</option>
                        <option>Bảo trì / Sửa chữa</option>
                        <option>Bất động sản</option>
                        <option>Biên / Phiên dịch</option>
                        <option>Bưu chính - Viễn thông</option>
                        <option>Chứng khoán / Vàng / Ngoại tệ</option>
                        <option>Cơ khí / Chế tạo / Tự động hóa</option>
                        <option>Công nghệ cao</option>
                        <option>Công nghệ Ô tô</option>
                        <option>Công nghệ thông tin</option>
                        <option>Dầu khí/Hóa chất</option>
                        <option>Dệt may / Da giày</option>
                        <option>Địa chất / Khoáng sản</option>
                        <option>Dịch vụ khách hàng</option>
                        <option>Điện / Điện tử / Điện lạnh</option>
                        <option>Điện tử viễn thông</option>
                        <option>Du lịch</option>
                        <option>Dược phẩm / Công nghệ sinh học</option>
                        <option>Giáo dục / Đào tạo</option>
                        <option>Hàng cao cấp</option>
                        <option>Hàng gia dụng</option>
                        <option>Hàng hải</option>
                        <option>Hàng không</option>
                        <option>Hàng tiêu dùng</option>
                        <option>Hành chính / Văn phòng</option>
                        <option>Hoá học / Sinh học</option>
                        <option>Hoạch định/Dự án</option>
                        <option>In ấn / Xuất bản</option>
                        <option>IT Phần cứng / Mạng</option>
                        <option>IT phần mềm</option>
                        <option>Kế toán / Kiểm toán</option>
                        <option>Khách sạn / Nhà hàng</option>
                        <option>Kiến trúc</option>
                        <option>Kinh doanh / Bán hàng</option>
                        <option>Logistics</option>
                        <option>Luật/Pháp lý</option>
                        <option>Marketing / Truyền thông / Quảng cáo</option>
                        <option>Môi trường / Xử lý chất thải</option>
                        <option>Mỹ phẩm / Trang sức</option>
                        <option>Mỹ thuật / Nghệ thuật / Điện ảnh</option>
                        <option>Ngân hàng / Tài chính</option>
                        <option>Ngành nghề khác</option>
                        <option>NGO / Phi chính phủ / Phi lợi nhuận</option>
                        <option>Nhân sự</option>
                        <option>Nông / Lâm / Ngư nghiệp</option>
                        <option>Phi chính phủ / Phi lợi nhuận</option>
                        <option>Quản lý chất lượng (QA/QC)</option>
                        <option>Quản lý điều hành</option>
                        <option>Sản phẩm công nghiệp</option>
                        <option>Sản xuất</option>
                        <option>Spa / Làm đẹp</option>
                        <option>Tài chính / Đầu tư</option>
                        <option>Thiết kế đồ họa</option>
                        <option>Thiết kế nội thất</option>
                        <option>Thời trang</option>
                        <option>Thư ký / Trợ lý</option>
                        <option>Thực phẩm / Đồ uống</option>
                        <option>Tổ chức sự kiện / Quà tặng</option>
                        <option>Tư vấn</option>
                        <option>Vận tải / Kho vận</option>
                        <option>Xây dựng</option>
                        <option>Xuất nhập khẩu</option>
                        <option>Y tế / Dược</option>
                    </select>
                </div>
                <div class="form-group col-sm-4">
                    <label for="chucvu">Chức Vụ</label>
                    <input name="chucvu" type="text" class="form-control py-3" id="chucvu" placeholder="Nhập chức vụ..." required>
                </div>
                <div class="form-group col-sm-4">
                    <label for="loaicv">Loại Công Việc</label>
                    <select name="loaicongviec" class="form-control" id="loaicv" required>
                        <option value="1">Toàn thời gian</option>
                        <option value="0">Bán thời gian</option>
                    </select>                    
                </div>
            </div>
            <div class="form-group col-sm-4 col-lg-12 col-md-12">
                <label for="bangcap">Yêu Cầu Bằng Cấp</label>
                <input name="yeucaubangcap" type="text" class="form-control py-3" id="bangcap" placeholder="Bằng đại học, bằng cấp 3, không cần bằng..." required>
            </div>
            
            <div class="d-sm-flex flex-sm-row">
                <div class="form-group col-sm-4">
                    <label for="luong">Lương</label>
                    <input min="1" max="9999999999" name="luong" type="number" class="form-control py-3" id="luong" placeholder="Nhập lương..." required>
                </div>
                <div class="form-group col-sm-4">
                  <label for="soluongtuyen">Số Lượng Tuyển</label>
                  <input name="soluongtuyendung" type="number" class="form-control py-3" id="soluongtuyen" placeholder="1" required>
                </div>
                <div class="form-group col-sm-4">
                    <label for="duration">Thời Hạn Tuyển</label>
                    <input name="thoihan" type="date" class="form-control py-3" id="duration" required>
                </div>
            </div>
            <div class="d-sm-flex flex-sm-row">
                <div class="form-group col-sm-6">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control py-3" id="email" placeholder="Nhập email..." required>
                </div>
                <div class="form-group col-sm-6">
                    <label for="number">Số Điện Thoại</label>
                    <input name="sdt" type="number" class="form-control py-3" id="number" placeholder="Nhập số điện thoại..." required>
                </div>
            </div>
            <div class="form-group col-12">
                <label for="comment">Mô Tả Công Việc</label>
                <textarea name="motacongviec" class="form-control" rows="3" id="comment" placeholder="Nhập mô tả công việc..." required></textarea>
            </div>
            <div class="col-12">
                <label for="yeucau">Yêu Cầu Công Việc</label>
                <textarea name="yeucaucongviec" class="form-control" rows="3" id="yeucau" placeholder="Nhập yêu cầu công việc..." required></textarea>
            </div><br>
            <div class="form-group col-12">
                  <label for="quyenloi">Quyền Lợi</label>
                  <textarea name="quyenloi" class="form-control" rows="3" id="quyenloi" placeholder="Nhập quyền lợi công việc..." required></textarea>
            </div>
            <div class="tag-input form-group col-12">
                    <div class="input">
                        <label for="tag-ip">Kỹ Năng</label>
                        <div class="d-flex flex-row">
                            <input class="form-control mt-2" type="text" id="tag-ip" placeholder="Yêu cầu kỹ năng cần thiết...">
                            
                            <span class="material-icons btn" value="" style="color:gray; font-size: 24px">add_circle_outline</span>
                        </div>
                    </div>
                    <div class="tag-list"></div>
                </div>
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
