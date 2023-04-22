document.addEventListener('DOMContentLoaded', () => {
    "use strict"

    if ($('#navbar-content')) {
        var headerScrolled = () => {
            if ($(window).scrollTop() > 100) {
                $('#navbar-content').addClass('sticked')
            } else {
                $('#navbar-content').removeClass('sticked')
            }
        }
        $(window).on('load', headerScrolled)
        $(window).on('scroll', headerScrolled)
    } 

    $('.btn-menu').click(function() {
        if($(".bi-list").hasClass('bi-list')) {
            $(".bi-list").removeClass('bi-list').addClass('bi-x-lg');
        }else {
            $(".bi-x-lg").removeClass('bi-x-lg').addClass('bi-list');
        }
    })


    $(document).ready(function () {
        get_user_navbar();
    })
    function get_user_navbar(){
        $.post("../../../src/Controllers/C_InfoUser.php", {
            type: 0,
        }).done(function (data, status) {
            data = JSON.parse(data);
            console.log(data);
            console.log(status);
            if (status) {
            showuser(data);
            script2()
            }
        });
    }


    function showuser(data) {
        let ele = $("#identity_user");
        let res = `
        
        <div class="navbar-img-notice filter-dropdown-container-user">
            <button onclick="window.location.href ='${data.type == "Client"? "../../../../src/Views/user/congviecduocmoi.php#yeucautuyendung":"../../../../src/Views/admin/duyetungvien.php#yeucautuyendung"}'" class="btn-notice" style="background-color:transparent !important;">
                <span class="containerBlockicon" style="height:40px;width:40px;">
                    <i class="bi bi-bell-fill"></i>
                </span>
            </button>
        </div>
        
        <div class="filter-dropdown-container-user">
            <button class="format-btn-user" id="btn-user" style="background-color:transparent !important;">
                <span class="containerBlockicon" style="max-height:40px;max-width:40px;margin-left:5px;margin-top:2px;"><img class="format-img-user" src="${data.linkava}" alt="avatar"></span>
            </button>
            <ul class="filter-dropdownlist-user" id="filter-btn-user">
                <li class="filter-dropdownlistItem">
                    <a href="${data.type == "Client"? "../../../../src/Views/user/updateInfo.php":"../../../../src/Views/admin/updateInfo.php"}" class="filter-dropdownlistitemLink">Thông tin của bạn</a>
                </li>
                <li class="filter-dropdownlistItem format-border-top">
                    <a href="${data.type == "Client"? "../../../../src/Views/user/congviecduocmoi.php":"../../../../src/Views/admin/duyetungvien.php"}" class="filter-dropdownlistitemLink">${data.type == "Client"? "Duyệt công việc":"Duyệt ứng viên"}</a>
                </li>
                <li class="filter-dropdownlistItem format-border-top">
                    <a href="${data.type == "Client"? "../../../../src/Views/user/congviecdathich.php":"../../../../src/Views/admin/nguoitimviecdathich.php"}" class="filter-dropdownlistitemLink">${data.type == "Client"? "Công việc đã thích":"Ứng viên yêu thích"}</a>
                </li>
                <li class="filter-dropdownlistItem format-border-top">
                    <span><i class="bi bi-box-arrow-right" aria-hidden="true"></i></span>
                    <a href="../../../../src/Controllers/C_SignOut.php" class="filter-dropdownlistitemLink format-text-dropdown ">Đăng xuất</a>
                </li>
            </ul>
        </div>

        <a class="nav-link active format-name-user ps-4" href="${data.type == "Client"? "../../../../src/Views/user/pageinfouser.php":"../../../../src/Views/admin/pageinfoadmin.php"}">${data.hoten}</a>

        `;
        ele.html(res);
    }

});
