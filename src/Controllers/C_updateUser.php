<?php
class updateUser
{
    public function updateCLient($hoten, $congviec, $ngaysinh, $gioitinh, $loaicongviec, $ngoaingu, $linhvuc, $thanhpho, $diachi, $muctieunghenghiep, $hocvan, $kinang, $kinhnghiem, $chitiet, $tagkinang)
    {
        session_start();
        require_once("../Models/Model_updateUser.php");
        $Model_updateUser = new Model_updateUser();
        $res = $Model_updateUser->updateUser($_SESSION["IDUser"], $hoten, $congviec, $ngaysinh, $gioitinh, $loaicongviec, $ngoaingu, $linhvuc, $thanhpho, $diachi, $muctieunghenghiep, $hocvan, $kinang, $kinhnghiem, $chitiet, $tagkinang);
        if ($res) {
            header("Location: C_SignIn.php");
        } else echo "khong cap nhat thanh cong " . $ngaysinh;
    }
    public function dangviecAdmin($tencongviec, $yeucaubangcap, $linhvuc, $chucvu, $luong, $loaicongviec, $diachi, $soluongtuyendung, $sdt, $thoihan, $email, $motacongviec, $quyenloi, $yeucaucongviec, $tagkinang)
    {
        session_start();
        require_once("../Models/Model_updateUser.php");
        $Model_updateUser = new Model_updateUser();
        $res = $Model_updateUser->dangviecAdmin($_SESSION["IDUser"], $tencongviec, $yeucaubangcap, $linhvuc, $chucvu, $luong, $loaicongviec, $diachi, $soluongtuyendung, $sdt, $thoihan, $email, $motacongviec, $quyenloi, $yeucaucongviec, $tagkinang);
        if ($res) {
            header("Location: C_SignIn.php");
        } else echo "khong dang bai thanh cong ";
    }
    public function updateAdmin($TenCongTy, $diachi, $website, $masothue, $motacongty, $linhvuc, $thanhpho, $phucloi, $quymonhansu)
    {
        session_start();
        require_once("../Models/Model_updateUser.php");
        $Model_updateUser = new Model_updateUser();
        $res = $Model_updateUser->updateAdmin($_SESSION["IDUser"], $TenCongTy, $diachi, $website, $masothue, $motacongty, $linhvuc, $thanhpho, $phucloi, $quymonhansu);
        if ($res) {
            header("Location: C_SignIn.php");
        } else echo "khong cap nhat thanh cong ";
    }
}
$updateUser = new UpdateUser();
if (isset($_POST["dviec"])) {
    $updateUser->dangviecAdmin($_POST["tencongviec"], $_POST["yeucaubangcap"], $_POST["linhvuc"], $_POST["chucvu"], $_POST["luong"], $_POST["loaicongviec"], $_POST["diachi"], $_POST["soluongtuyendung"], $_POST["sdt"], $_POST["thoihan"], $_POST["email"], $_POST["motacongviec"], $_POST["quyenloi"], $_POST["yeucaucongviec"], $_POST["tagkinang"]);
} else if (isset($_POST["updateAdmin"])) {
    $updateUser->updateAdmin($_POST["TenCongTy"], $_POST["diachi"], $_POST["website"], $_POST["masothue"], $_POST["motacongty"], $_POST["linhvuc"], $_POST["sdt"], $_POST["email"], $_POST["thanhpho"], $_POST["phucloi"], $_POST["quymonhansu"]);
} else
    $updateUser->updateCLient($_POST["hoten"], $_POST["congviec"], $_POST["ngaysinh"], $_POST["gioitinh"], $_POST["loaicongviec"], $_POST["linhvuc"], $_POST["sdt"], $_POST["email"], $_POST["thanhpho"], $_POST["diachi"], $_POST["muctieunghenghiep"], $_POST["ngoaingu"], $_POST["hocvan"], $_POST["kinang"], $_POST["kinhnghiemlamviec"], $_POST["chitiet"], $_POST["tagkinang"]);
