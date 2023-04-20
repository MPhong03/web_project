function get_user() {
    $.post("../../../src/Controllers/C_InfoUser.php", {
        type: 2,
    }).done(function(data, status) {
        data = JSON.parse(data);
        console.log(data);
        console.log(status);
        if (status) {
            show_data(data);
        }
    });
}

function show_data(data) {
    let showUser = $("#showUser");
    showUser.html("");
    for (let i = 0; i < data.length; i++) {
        let loaicongviec = "Bán thời gian";
        if (data[i]["loaicongviec"] == 1) {
            loaicongviec = "Toàn thời gian";
        }
        let tagkinang = "";
        let skills = data[i]["tagkinang"].split(",");
        for (let j = 0; j < skills.length; j++) {
            tagkinang += `<p class='card-text p-request'>${skills[j]}</p>\n`;
        }
        let job = `
    <div class="col-sm-12 col-md-6 w-100 mb-3">
      <div class="card shadow" id="user${data[i]["id"]}">
          <div class="card-body">
              <div class="row">
                  <div class="col-lg-4">
                      <img class="card-img col-lg-3" src="${data[i]["linkava"]}" alt="">
                  </div>

                  <div class="col-lg-8">
                      <h5 class="card-title format-text-bold">${data[i]["hoten"]}</h5>
                      <h6 class="card-subtitle mb-2">${data[i]["congviec"]}</h6>
                      <div class="col-lg-12 d-flex flex-row justify-content-between">
                          <div>

                            <i class="bi bi-bag-check-fill"></i> ${loaicongviec}</span>
                          </div>
                      </div>

                      <div class="col-lg-8">

                          <span><i class="bi bi-geo-alt-fill"></i><span>
                          <span class="card-text">Thành Phố ${data[i]["thanhpho"]}</span>
                          
                      </div>

                      <div class="col-lg-12">
                          ${tagkinang}
                      </div>

                  </div>

              </div>
          </div>
      </div>
  </div>
      `;
        showUser.append(job);
    }
}

function show_detail_data(data) {
    let ele = $("#content");
    ele.html("");
    let res = `
  <div class="row">
	  <div class="col-lg-12 p-0">
		  <div class="card shadow" style="border-radius: .5rem;">
			  <div class="row g-0">
				  <div class="col-md-4 gradient-custom text-center text-white">
					  <div class="img-userxinviec-right">
						  <img class="img-account-profile rounded-circle mb-2 my-5" style="height: 170px; width:170px;" src="${data.linkava}" alt="">
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
    `;
    ele.html(res);
}

function get_detail_user(id) {
    $.post("../../../src/Controllers/C_InfoUser.php", {
        type: 3,
        iduser: id,
    }).done(function(data, status) {
        data = JSON.parse(data);
        console.log(data);
        console.log(status);
        if (status) {
            show_detail_data(data);
        }
    });
}
$(function() {
    get_user();
    get_detail_user(1);
});
const formatter = new Intl.NumberFormat("vi-VN", {
    style: "currency",
    currency: "VND",
    maximumFractionDigits: 0,
});

// Sự kiện thay đổi các chi tiết công việc khi ấn vào
$(document).on("click", ".card-body", function(e) {
    let id = $(this).parent().attr("id");
    id = id.split("user")[1];
    get_detail_user(parseInt(id));
    $(".card-body").each(function(a, b) {
        $(b).attr("style", "box-shadow: none;");
    });
    $(this).attr("style", "box-shadow: 0 0 5px black;");
});