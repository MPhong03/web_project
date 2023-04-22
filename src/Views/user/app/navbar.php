<div class="navbar-content fixed-top" id="navbar-content" data-scrollto-offset="0">
    <nav class="navbar navbar-expand-lg navbar-light px-4">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="../../../../index.php">FINDWORK</a> -->
            <a class="navbar-brand" href="../../../../index.php">
				<img src="../../../src/assets/Images/logo.png" alt="logo" height="80" loading="lazy" width="80">
			</a>
            
			<button class="navbar-toggler btn-menu border-0" id="btn-menu" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<!-- <span class="navbar-toggler-icon"></span> -->
                <i class="bi bi-list"></i>
			</button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <!-- RIGHT -->
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../../../../routes.php?timviec">Tìm việc</a>
                        <!--./src/Controllers/C_SignIn.php-->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../../../routes.php?taocv">Tạo CV</a>
                    </li>
                </ul>

                <!-- LEFT -->
                <ul class="navbar-nav mt-2 mt-lg-0" id="identity_user">
                    <div class="filter-dropdown-container-user">
                        <button class="format-btn-user" id="btn-user" style="background-color:transparent !important;">
                            <span class="containerBlockicon" style="max-height:40px;max-width:40px;margin-left:5px;margin-top:2px;"><img class="format-img-user" src="./Images/18-F.png" alt=""></span>
                        </button>
                        <ul class="filter-dropdownlist-user" id="filter-btn-user">
                            <li class="filter-dropdownlistItem">
                                <a href="./capnhatdoanhnghiep.php" class="filter-dropdownlistitemLink">Thông tin của bạn</a>
                            </li>
                            <li class="filter-dropdownlistItem format-border-top">
                                <a href="./duyetcongviec.php" class="filter-dropdownlistitemLink">Duyệt công việc</a>
                            </li>
                            <li class="filter-dropdownlistItem format-border-top">
                                <a href="./congviecdathich.php" class="filter-dropdownlistitemLink">Công ty đã thích</a>
                            </li>
                            <li class="filter-dropdownlistItem format-border-top">
                                <span><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                                <a href="#" class="filter-dropdownlistitemLink format-text-dropdown ">Đăng xuất</a>
                            </li>
                        </ul>
                    </div>

                    <div class="navbar-img-notice filter-dropdown-container-user">
                        <button class="btn-notice">
                            <span>
                                <img class="format-img-notice" src="./Images/ic_notifications_none_24px.png" alt="">
                            </span>
                        </button>
                        <ul class="filter-dropdownlist-notice" id="filter-btn-notice">
                            <li class="filter-dropdownlistItem">
                                <span><img class="format-img-user" src="./Images/18-F.png" alt=""></span>
                                <a href="#" class="filter-dropdownlistitemLink">William Shake đã phản hồi về yêu cầu tuyển dụng của bạn</a>
                            </li>
                            <li class="filter-dropdownlistItem format-border-top">
                                <span><img class="format-img-user" src="./Images/18-F.png" alt=""></span>
                                <a href="#" class="filter-dropdownlistitemLink">John Cena đã phản hồi về yêu cầu tuyển dụng của bạn</a>
                            </li>
                        </ul>
                    </div>

                    <a class="nav-link active format-name-user">William Shakespeare</a>
                </ul>
            </div>
        </div>
    </nav>
</div>
