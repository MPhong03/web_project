<div class="content-3" id="content-3">
  <div class="brands" id="brands">
    <div class="container pt-0">
      <div class="row">
        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="../../../src/assets/Images/brand-tdt.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="../../../src/assets/Images/brand-tdt.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="../../../src/assets/Images/brand-tdt.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="../../../src/assets/Images/brand-tdt.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="../../../src/assets/Images/brand-tdt.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="../../../src/assets/Images/brand-tdt.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </div>

  <div class="box-find container pt-5 pb-3" style="display: none;">
    <div class="col-sm-12 col-md-12 col-xl-12 mg-search-form" role="search">
      <div class="search-form" id="jobsearch">
            <div class="input-group form-container mb-3">
              <span class="input-group-text text-tiemkiem" id="inputGroup-sizing-default"><i class="bi bi-search"></i></span>
              <input id="myInput" type="text" name="search-work" class="form-control search-input"
                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value
                placeholder="Tên công ty, từ khóa.." autocomplete="off">
            </div>

            <div class="input-group form-container mb-3">
              <span class="input-group-text text-diadiem" id="inputGroup-sizing-default"><i class="bi bi-map"></i></span>
              <input id="myInput1" type="text" name="search-location" class="form-control search-input"
                placeholder="Địa điểm (thành phố, tỉnh..)" autocomplete="off">
            </div>

            <a href="#showJob" style="text-decoration: none; color:white;">
              <button onclick="searchFilterFromUser()" name="search-main" value="1"
                class="btn btn-dark btn-timviec w-100 p-2" tabindex="-1" role="button" type="submit">
              
              </button>
            </a>
      </div>
    </div>
  </div>

  <div class="container container-content-3">
    <div class="row">
      <div class="col-12">
        <div class="ds-row-content3">

          <div class="filter-dropdown">
            <div class="filter-dropdown-container">

              <button class="btn-filter-dropdown" id="btn-filterdropdown" aria-haspopup="true" aria-expanded="false" aria-controls="filter-menu">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-briefcase-fill" viewBox="0 0 16 16">
                  <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5z" />
                  <path d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z" />
                </svg>
                <div class="filter-dropdown-lable">
                  Tất cả lĩnh vực
                </div>
                <div class="filter-dropdown-icondown">
                  <span><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                </div>
              </button>

              <ul class="filter-dropdownlist filter-dropdownlist-linhvuc" id="filter-menu">
                <input class="form-control myInputSearch" id="myInput2" type="text" autocomplete="off" placeholder="Search..">
                <li class="filter-dropdownlistItem">
                  <div class="filter-dropdownlistitemLink">Tất cả</div>
                </li>
                <!-- <li class="filter-dropdownlistItem">
                  <div class="filter-dropdownlistitemLink">Kinh tế</div>
                </li> -->
              </ul>

            </div>
          </div>
          <div class="filter-dropdown">
            <div class="filter-dropdown-container">
              <button class="btn-filter-dropdown" id="btn-filterdropdown2" aria-haspopup="true" aria-expanded="false" aria-controls="filter-menu">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                </svg>

                <div class="filter-dropdown-lable">
                  Hình thức việc làm
                </div>
                <div class="filter-dropdown-icondown">
                  <span><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                </div>
              </button>
              <ul class="filter-dropdownlist filter-dropdownlist-hinhthuc" id="filter-menu2">
                <input class="form-control myInputSearch" id="myInput4" autocomplete="off" type="text" placeholder="Search..">
                <li class="filter-dropdownlistItem">
                  <div class="filter-dropdownlistitemLink">Tất cả</div>
                </li>
                <!-- <li class="filter-dropdownlistItem">
                  <div class="filter-dropdownlistitemLink">Bán thời gian</div>
                </li> -->
              </ul>
            </div>
          </div>
          <div class="filter-dropdown">
            <div class="filter-dropdown-container">
              <button class="btn-filter-dropdown" id="btn-filterdropdown3" aria-haspopup="true" aria-expanded="false" aria-controls="filter-menu">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                </svg>

                <div class="filter-dropdown-lable">
                  Tất cả địa điểm
                </div>
                <div class="filter-dropdown-icondown">
                  <span><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                </div>
              </button>
              <ul class="filter-dropdownlist filter-dropdownlist-diadiem" id="filter-menu3">
                <input class="form-control myInputSearch" id="myInput5" autocomplete="off" type="text" placeholder="Search..">
                <li class="filter-dropdownlistItem">
                  <div class="filter-dropdownlistitemLink">Tất cả</div>
                </li>
                <!-- <li class="filter-dropdownlistItem">
                  <div class="filter-dropdownlistitemLink">Hà Nội</div>
                </li> -->
              </ul>
            </div>
          </div>
          <div class="filter-dropdown-icon">
            <button class="btn-filter-dropdown" id="btn-filterdropdown4" aria-haspopup="true" aria-expanded="false" aria-controls="filter-menu4" onclick="btnFilter(getFilterFromUser)">
              <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16">
                <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="ds-row-content3" id="thongbaoFilter">
        </div>
      </div>
    </div>
  </div>
</div>
