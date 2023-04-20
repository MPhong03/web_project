$(function () {
    SaveCT();
    SaveNTV();
  });
  function SaveCT() {
    $.post("../../../src/Controllers/C_like.php", {
      type: 0,
    }).done(function (data, status) {
      data = JSON.parse(data);
      console.log(data);
      console.log(status);
      if (status) {
        getData(data);
      }
    });
  }
  function getData(data) {
    let ele = $("#wrapSaveCT")
    ele.html("");
    let res = "";
    for (let i = 0; i < data.length; i++) {
        let tagkinang = "";
        let skills = data[i]["tagkinang"].split(",");
        for (let j = 0; j < skills.length; j++) {
          tagkinang += `<p class='card-text p-request'>${skills[j]}</p>\n`;
        }
        res+=`
        <div onclick="gotoHomepageAdmin(${data[i]["id"]},${data[i]["idcongty"]})" class="offset-sm-auto mx-auto mb-3 col-12 col-sm-10 col-md-5 cards">
          <div class="card card-format-border-left">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-4">
                      <img class="card-img col-lg-3" src="${data[i]["linkava"]}" alt="">
                  </div>

                  <div class="col-lg-8">
                      <h5 class="card-title format-text-bold">${data[i]["TenCongTy"]}</h5>
                      <h6 class="card-subtitle mb-2">${data[i]["tencongviec"]}</h6>
                      <div class="col-lg-12">
                          ${tagkinang}
                      </div>
                  </div>

                </div>
          </div>
          </div>
        </div>
        `;
      }
      ele.html(res);
  }
  function SaveNTV() {
    $.post("../../../src/Controllers/C_like.php", {
      type: 1,
    }).done(function (data, status) {
      data = JSON.parse(data);
      console.log(data);
      console.log(status);
      if (status) {
        getDataNTV(data);
      }
    });
  }
function getDataNTV(data) {
  let ele = $("#wrapSaveNTV")
  ele.html("");
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
    <div onclick="gotoHomepageClient(${data[i]["MaNguoiTimViec"]})" class="offset-sm-auto mx-auto mb-3 col-12 col-sm-10 col-md-5 cards">
      <div class="card card-format-border-left">
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
        
                                <span><i class="fa fa-buildings"></i>${loaicongviec}</span>
                            </div>
                        </div>
        
                        <div class="col-lg-8">
        
                            <span><i class="fa fa-map-marker" aria-hidden="true"></i><span>
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
      ele.append(job);
  }
}
  const formatter = new Intl.NumberFormat("en-US", {
    style: "currency",
    currency: "USD",
    maximumFractionDigits: 0,
  });

  function gotoHomepageAdmin(id,idcongty){
    window.location.href = `../admin/pageinfoAdmin.php?idbaidang=${id}&idcongty=${idcongty}`;
  }
  function gotoHomepageClient(id){
    window.location.href = `../user/pageinfouser.php?id=${id}`;
  }
