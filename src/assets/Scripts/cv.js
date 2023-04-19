$(document).ready(function () {
    get_cv();
})
function get_cv(){
    $.post("../../../src/Controllers/C_InfoUser.php", {
        type: 1,
      }).done(function (data, status) {
        data = JSON.parse(data);
        console.log(data);
        console.log(status);
        if (status) {
          $("#hotenCV").html(data.hoten);
          $("#chuyennganhCV").html(data.congviec);
          $("#profileCV").attr("src", data.linkava);
        }
      });
}