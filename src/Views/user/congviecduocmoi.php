<?php
class Model_DuyetCongViec{
    public function duyetcongviec($id){
        require("../connection.php");
        $sql = $conn -> query("SELECT CongViecDuocMoi.MaCongTy,linkava,TenCongTy,daduyet from 
        CongViecDuocMoi
        inner join CongTy ON CongTy.MaCongTy = CongViecDuocMoi.MaCongTy
        where CongViecDuocMoi.MaNguoiTimViec = '$id'
        ;");
        if ($sql) 
            return $sql;
        else {
            die("Can't get job from database");
        }
    }
    
    public function yeucautuyendung($id){
        require("../connection.php");
        $sql = $conn -> query("SELECT CongTy.MaCongTy,MaDangTin,TenCongTy,maungtuyen,daduyet,tencongviec,linkava
        from CongTy,
        (SELECT maungtuyen,tencongviec,daduyet,DangViec.MaCongTy,UngTuyen.MaDangTin from 
                UngTuyen
                inner join DangViec
                on DangViec.MaDangTin = UngTuyen.MaDangTin
                where UngTuyen.MaNguoiTimViec = '$id') as newtable
        where newtable.MaCongTy = CongTy.MaCongTy
        ;");
        if ($sql) 
            return $sql;
        else {
            die("Can't get job from database");
        }
    }
    function dongyduyet($id, $idcongty){
        require("../connection.php");
        $sql = $conn -> query("
        UPDATE CongViecDuocMoi
        SET daduyet = 1
        where MaNguoiTimViec = '$id' and MaCongTy = '$idcongty'
        ;");
        if ($sql) 
            return $sql;
        else {
            die("Can't get job from database");
        }
    }
    function tuchoiduyet($id, $idcongty){
        require("../connection.php");
        $sql = $conn -> query("
        UPDATE CongViecDuocMoi
        SET daduyet = 0
        where MaNguoiTimViec = '$id' and MaCongTy = '$idcongty'
        ;");
        if ($sql) 
            return $sql;
        else {
            die("Can't get job from database");
        }
    }
}
