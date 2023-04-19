$(document).ready(function () {
  // getAllInfoUser();
});
function getAllInfoUser() {
  $.post("../../../src/Controllers/C_InfoUser.php", {
    type: 1,
  }).done(function (data, status) {
    data = JSON.parse(data);
    // console.log(data.hoten);
    // console.log(status);
    if (status) {
      showAllDataUser(data);
    }
  });
}
function showAllDataUser(data) {
  console.log("Check",data.hoten);
  let ele = $("#content").children().children();
  let res = `
      <div class="min-vh-100"">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-8 mb-lg-0">
                    <div class="card mb-3 shadow" style="border-radius: .5rem;">
                        <div class="row g-0">
                            <div class="col-md-4 gradient-custom text-center text-white">
                                  <div class="img-userxinviec-right">
                                      <button title="Đổi Avatar" id="avatarInfo" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border:none;background-color: transparent;">
                                          <span><img class="format-img-userxinviec-right img-fluid my-5" src="${data.linkava}" alt=""></span>
                                          <div class="middle">
                                              <div class="text">Đổi Avatar</div>
                                          </div>
                                      </button>
                                  </div>
                                <h5>${data.hoten}</h5>
                                <p>${data.congviec}</p>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-4">
                                    <h6 class="text-center">HỒ SƠ CÁ NHÂN</h6>
                                    <hr class="mt-0 mb-4">
                                    <h6>Thông tin cá nhân</h6>
                                    <div class="row pt-1">                                     
                                        <div class="col-6 mb-3">
                                            <h6><i class="bi bi-telephone-fill"></i>&nbspSố điện thoại</h6>
                                            <p class="text-secondary">${data.sdt}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6><i class="bi bi-calendar-heart"></i>&nbspNgày sinh</h6>
                                            <p class="text-secondary">${data.ngaysinh}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6><i class="bi bi-people-fill"></i>&nbspGiới tính</h6>
                                            <p class="text-secondary">${data.gioitinh ==1? "Nam" : "Nữ"}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6><i class="bi bi-geo-alt-fill"></i>&nbspĐịa chỉ</h6>
                                            <p class="text-secondary">${data.diachi}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6><i class="bi bi-envelope-fill"></i>&nbspEmail</h6>
                                            <p class="text-secondary">${data.email}</p>
                                        </div>
                                    </div>
                                    <h6>Thông tin chi tiết</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Trình độ học vấn</h6>
                                            <p class="text-secondary">${data.hocvan}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Kỹ năng</h6>
                                            <p class="text-secondary">${data.kinang}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Kinh nghiệm làm việc</h6>
                                            <p class="text-secondary">${data.kinhnghiemlamviec}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Lĩnh vực</h6>
                                            <p class="text-secondary">${data.linhvuc}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Mục tiêu bản thân</h6>
                                            <p class="text-secondary">${data.muctieunghenghiep}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Giới thiệu bản thân</h6>
                                            <p class="text-secondary">${data.chitiet}</p>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    `;
  ele.html(res);
}
function getAllInfoUserByIdURL(id) {
  $.post("../../../src/Controllers/C_InfoUser.php", {
    type: 3,
    iduser: id,
  }).done(function (data, status) {
    data = JSON.parse(data);
    // console.log("Data:", id);
    // console.log(status);
    if (status) {
      showAllDataUser(data);
    }
  });
}

