<?php
    require_once("../Models/Model_updateUser.php");

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $model = new Model_updateUser();
    
        // Kiểm tra xem email có tồn tại trong cơ sở dữ liệu hay không
        if (!$model->checkEmail($email)) {
            echo "Email không tồn tại trong hệ thống";
            exit();
        }
    
        // Tạo mã OTP ngẫu nhiên
        $otp = mt_rand(100000, 999999);
    
        // Cập nhật mã OTP cho người dùng
        if (!$model -> updateOTP($email, $otp)) {
            echo "Lỗi khi cập nhật mã OTP";
            exit();
        }
    
        // Gửi email chứa mã OTP đến địa chỉ email của người dùng
        // Function: mail($to ,$subject ,$message, [$headers], [$parameters]);
        $to = $email;
        $subject = "[SEEKER] Mã OTP để đặt lại mật khẩu";
        $message = "Mã OTP của bạn là: $otp";
        $headers = "From: SEEKER \r\n";
        mail($to, $subject, $message, $headers);
    
        // Chuyển hướng người dùng đến trang xác nhận OTP
        header("Location: ../Views/layouts/Verification.php?email=" . urlencode($email));
        exit();
    }
?>