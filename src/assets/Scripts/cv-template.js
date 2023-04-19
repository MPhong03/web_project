 document.addEventListener('DOMContentLoaded', function() {
        // Lấy giá trị màu nền từ sessionStorage
        var backgroundColor = sessionStorage.getItem('backgroundColor');
        // Thay đổi màu nền của phần tử header
        if (backgroundColor) {
            var headerElement = document.querySelector('header');
            // Duyệt qua tất cả các lớp của phần tử header
            headerElement.classList.forEach(function(className) {
                // Thay thế tất cả các lớp hiện tại bằng lớp màu nền mới của bạn
                headerElement.classList.replace(className, backgroundColor);
                //headerElement.classList.replace(className, #000);
            });
            //set màu cho tên và chuyên ngành khi bg-light
            var hotenElement = document.getElementById('hotenCV');
            var chuyennganhElement = document.getElementById('chuyennganhCV');
            var gioithieuElement = document.getElementById('gioithieu');
            // Thay đổi màu chữ của phần tử h1
            hotenElement.style.color = backgroundColor === 'bg-light' ? 'black' : 'white';
            chuyennganhElement.style.color = backgroundColor === 'bg-light' ? 'black' : 'white';
            gioithieuElement.style.color = backgroundColor === 'bg-light' ? 'black' : 'white';
        }
        // Xóa giá trị màu nền khỏi sessionStorage
        sessionStorage.removeItem('backgroundColor');

        //tải CV pdf về
        document.getElementById('pdf-cv').addEventListener('click', function() {
        var HTML_Width = $("#form-cv").width();
        var HTML_Height = $("#form-cv").height();
        var top_left_margin = 15;
        var PDF_Width = HTML_Width + (top_left_margin * 2);
        var PDF_Height = (PDF_Width * 1.5) + (top_left_margin * 2);
        var canvas_image_width = HTML_Width;
        var canvas_image_height = HTML_Height;

        var totalPDFPages = Math.ceil(HTML_Height / PDF_Height) - 1;

        html2canvas($("#form-cv")[0]).then(function(canvas) {
            var imgData = canvas.toDataURL("image/jpeg", 1.0);
            var pdf = new jsPDF('p', 'pt', [PDF_Width, PDF_Height]);
            pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin, canvas_image_width, canvas_image_height);
            for (var i = 1; i <= totalPDFPages; i++) {
                pdf.addPage(PDF_Width, PDF_Height);
                pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height * i) + (top_left_margin * 4), canvas_image_width, canvas_image_height);
            }
            pdf.save("Your_PDF_Name.pdf");
            $("#form-cv").hide();
        });
    })
    });
$(document).ready(function(){
    document.getElementById("trans-cv").addEventListener("click", function() {
        // Chuyển đến trang createcv
        window.location.href = "createcv.php";
    });
});
