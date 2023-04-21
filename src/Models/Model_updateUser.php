<?php
class Model_updateUser{
    public function updateUser($id,$hoten,$congviec,$ngaysinh,$gioitinh,$loaicongviec,$linhvuc,$sdt,$email,$thanhpho,$diachi,$muctieunghenghiep,$hocvan,$kinang,$kinhnghiem,$chitiet,$tagkinang){
        require("../connection.php");
        $sql = $conn -> query("UPDATE NguoiTimViec SET 
            hoten = '$hoten', congviec = '$congviec', 
            ngaysinh = '$ngaysinh', loaicongviec = '$loaicongviec', 
            gioitinh = '$gioitinh', tagkinang = '$tagkinang', 
            linhvuc = '$linhvuc', thanhpho = '$thanhpho',
            diachi = '$diachi', muctieunghenghiep = '$muctieunghenghiep', 
            hocvan = '$hocvan', kinang = '$kinang', 
            kinhnghiemlamviec = '$kinhnghiem', chitiet = '$chitiet'
        WHERE MaNguoiTimViec = '$id'");
        $sql2 = $conn -> query("UPDATE TaiKhoanNguoiTimViec SET
            sdt = '$sdt', email = '$email'
        WHERE MaNguoiTimViec = '$id'");
        if ($sql && $sql2)
        return 1;
        else return 0;
    }
    public function dangviecAdmin($idcongty,$tencongviec,$yeucaubangcap,$linhvuc,$chucvu,$luong,$loaicongviec,$diachi,$soluongtuyendung,$sdt,$thoihan, $email,$motacongviec,$quyenloi,$yeucaucongviec,$tagkinang){
        require("../connection.php");
        $sql = $conn -> query("
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
    public function updateAdmin($id,$TenCongTy,$linhvuc,$website,$sdt,$email,$thanhpho,$diachi,$motacongty,$phucloi){
        require("../connection.php");
        $sql = $conn -> query("UPDATE CongTy SET 
            TenCongTy = '$TenCongTy', linhvuc = '$linhvuc', 
            website = '$website',
            thanhpho = '$thanhpho', motacongty = '$motacongty',
            diachi = '$diachi', phucloi = '$phucloi'
        WHERE MaCongTy = '$id'");
        $sql2 = $conn -> query("UPDATE TaiKhoanCongTy SET
            sdt = '$sdt', email = '$email'
        WHERE MaCongTy = '$id'");
        if ($sql && $sql2)
        return 1;
        else return 0;
    }
}
