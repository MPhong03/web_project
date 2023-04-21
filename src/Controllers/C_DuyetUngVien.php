<?php
class DuyetUngVien{
    public function duyetungvien(){
        session_start();
        require_once("../Models/Model_DuyetUngVien.php");
        $Model_DuyetUngVien = new Model_DuyetUngVien();
        $res = $Model_DuyetUngVien -> duyetungvien($_SESSION["IDUser"]);
        $data = array();
        while ($r = $res->fetch_assoc())
        {
            $data[] = ["linkava"=>$r["linkava"],"hoten"=>$r["hoten"],"congviec"=>$r["congviec"],"MaNguoiTimViec"=>$r["MaNguoiTimViec"],"MaDangTin"=>$r["MaDangTin"],"daduyet"=>$r["daduyet"]];
        }
        echo json_encode($data);
    }
    public function yeucautuyendung(){
        session_start();
        require_once("../Models/Model_DuyetUngVien.php");
        $Model_DuyetUngVien = new Model_DuyetUngVien();
        $res = $Model_DuyetUngVien -> yeucautuyendung($_SESSION["IDUser"]);
        $data = array();
        while ($r = $res->fetch_assoc())
        {
            $data[] = ["linkava"=>$r["linkava"],"hoten"=>$r["hoten"],"congviec"=>$r["congviec"],"daduyet"=>$r["daduyet"],"MaNguoiTimViec"=>$r["MaNguoiTimViec"]];
        }
        echo json_encode($data);
    }
    public function dongyduyet($id, $idbaidang){
        session_start();
        require_once("../Models/Model_DuyetUngVien.php");
        $Model_DuyetCongViec = new Model_DuyetUngVien();
        $res = $Model_DuyetCongViec -> dongyduyet($id, $idbaidang);
        if ($res) echo json_encode(1);
        else echo json_encode(0);
    }
    public function tuchoiduyet($id, $idbaidang){
        session_start();
        require_once("../Models/Model_DuyetUngVien.php");
        $Model_DuyetCongViec = new Model_DuyetUngVien();
        $res = $Model_DuyetCongViec -> tuchoiduyet($id, $idbaidang);
        if ($res) echo json_encode(1);
        else echo json_encode(0);
    }
}
$DuyetUngVien = new DuyetUngVien();
if ($_POST["type"]=="0"){
    $DuyetUngVien -> duyetungvien();
} else if ($_POST["type"]=="1"){
    $DuyetUngVien ->yeucautuyendung();
} else if ($_POST["type"]=="2"){
    $DuyetUngVien ->dongyduyet($_POST["id"], $_POST["idbaidang"]);
} else if ($_POST["type"]=="3"){
    $DuyetUngVien ->tuchoiduyet($_POST["id"], $_POST["idbaidang"]);
}