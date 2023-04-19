// Hàm xử lý sự kiện click cho các phần tử có id từ "cv-1" đến "cv-8"
$(document).ready(function(){
function handleCVClick(backgroundColor) {
    window.location.href = "cv-template.php";
    sessionStorage.setItem('backgroundColor', backgroundColor);
}
// Gán hàm xử lý sự kiện cho các phần tử có id từ "cv-1" đến "cv-8"
document.getElementById("cv-1").addEventListener("click", function() {
    handleCVClick('bg-info');
});
document.getElementById("cv-2").addEventListener("click", function() {
    handleCVClick('bg-success');
});
document.getElementById("cv-3").addEventListener("click", function() {
    handleCVClick('bg-danger');
});
document.getElementById("cv-4").addEventListener("click", function() {
    handleCVClick('bg-warning');
});
document.getElementById("cv-5").addEventListener("click", function() {
    handleCVClick('bg-dark');
});
document.getElementById("cv-6").addEventListener("click", function() {
    handleCVClick('bg-primary');
});
document.getElementById("cv-7").addEventListener("click", function() {
    handleCVClick('bg-secondary');
});
document.getElementById("cv-8").addEventListener("click", function() {
    handleCVClick('bg-light');
});
})
