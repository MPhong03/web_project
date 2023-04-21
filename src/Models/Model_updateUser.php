<?php
class Model_updateUser
{
    public function updateUser($id, $hoten, $congviec, $ngaysinh, $gioitinh, $loaicongviec, $ngoaingu, $linhvuc, $thanhpho, $diachi, $muctieunghenghiep, $hocvan, $kinang, $kinhnghiem, $chitiet, $tagkinang)
    {
        require("../connection.php");
        $sql = $conn->query("UPDATE NguoiTimViec SET 
            hoten = '$hoten', congviec = '$congviec', ngaysinh = '$ngaysinh', gioitinh = '$gioitinh', loaicongviec = '$loaicongviec', 
            ngoaingu = '$ngoaingu', linhvuc = '$linhvuc', thanhpho = '$thanhpho', 
            diachi = '$diachi', muctieunghenghiep = '$muctieunghenghiep', 
            hocvan = '$hocvan', kinang = '$kinang', 
            kinhnghiemlamviec = '$kinhnghiem', chitiet = '$chitiet', tagkinang = '$tagkinang'
        WHERE MaNguoiTimViec = '$id'");
        $sql2 = $conn->query("UPDATE TaiKhoanNguoiTimViec SET
            sdt = '$sdt', email = '$email'
        WHERE MaNguoiTimViec = '$id'");
        if ($sql && $sql2)
            return 1;
        else return 0;
    }
    public function dangviecAdmin($idcongty, $tencongviec, $yeucaubangcap, $linhvuc, $chucvu, $luong, $loaicongviec, $diachi, $soluongtuyendung, $sdt, $thoihan, $email, $motacongviec, $quyenloi, $yeucaucongviec, $tagkinang)
    {
        require("../connection.php");
        $sql = $conn->query("
        insert into DangViec(
            MaCongTy,
            tencongviec,
            linhvuc,
            chucvu,
            luong,
            loaicongviec,
            diachi,
            sdt,
            email,
            motacongviec,
            tagkinang,
            yeucaubangcap,
            yeucaucongviec,
            quyenloi,
            thoihan,
            soluongtuyendung
        )
        values('$idcongty','$tencongviec','$linhvuc','$chucvu','$luong','$loaicongviec','$diachi',$sdt,'$email','$motacongviec','$tagkinang','$yeucaubangcap','$yeucaucongviec','$quyenloi','$thoihan','$soluongtuyendung');
        ");
        if ($sql) return 1;
        else return 0;
    }
    public function updateAdmin($id, $TenCongTy, $diachi, $website, $masothue, $motacongty, $linhvuc, $thanhpho, $phucloi, $quymonhansu)
    {
        require("../connection.php");
        $sql = $conn->query("UPDATE CongTy SET 
            TenCongTy = '$TenCongTy', diachi = '$diachi',website = '$website', 
            masothue = '$masothue',  motacongty = '$motacongty',linhvuc = '$linhvuc', 
            thanhpho = '$thanhpho', phucloi = '$phucloi' , quymonhansu = '$quymonhansu' 
        WHERE MaCongTy = '$id'");
        $sql2 = $conn->query("UPDATE TaiKhoanCongTy SET
            sdt = '$sdt', email = '$email'
        WHERE MaCongTy = '$id'");
        if ($sql && $sql2)
            return 1;
        else return 0;
    }

    public function checkEmail($email)
    {
        require("../connection.php");
        $sql = $conn->query("SELECT * FROM TaiKhoanNguoiTimViec WHERE email = '$email';");
        if ($sql) {
            return $sql;
        } else {
            die("Email doesn't exist");
        }
    }

    public function updatePassword($email, $password)
    {
        require("../connection.php");
        $sql = $conn->query("UPDATE TaiKhoanNguoiTimViec SET matkhau = '$password' WHERE email = '$email';");
        if ($sql) {
            return $sql;
        } else {
            die("Update fail");
        }
    }

    public function updateOTP($email, $otp)
    {
        require("../connection.php");
        $sql = $conn->query("UPDATE TaiKhoanNguoiTimViec SET otp = '$otp' WHERE email = '$email';");
        if ($sql) {
            return $sql;
        } else {
            die("Update fail");
        }
    }

    public function checkOTP($email, $otp)
    {
        require("../connection.php");
        $sql = $conn->query("SELECT * FROM TaiKhoanNguoiTimViec WHERE email = '$email' AND otp = '$otp';");
        if ($sql) {
            return $sql;
        } else {
            die("Update fail");
        }
    }
}
