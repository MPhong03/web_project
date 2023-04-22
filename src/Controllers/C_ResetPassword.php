<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
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

        require 'phpmailer/src/Exception.php';
        require 'phpmailer/src/PHPMailer.php';
        require 'phpmailer/src/SMTP.php';

        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = 2;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'seekerrobot@gmail.com';
            $mail->Password = 'ckwupvjwmqlhhbgl';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
    
            // seekerrobot@gmail.com
            // seeker123456
            $mail->setFrom('seekerrobot@gmail.com', 'SEEKER Robot');
            $mail->addAddress($email);
    
            $mail->isHTML(true);
            $mail->Subject = "OTP Verification";
            $mail->Body = "<h1>Your OTP code is: $otp</h1>";
    
            $mail->send();
            $mail->ClearAddresses();
        
            // Chuyển hướng người dùng đến trang xác nhận OTP
            header("Location: ../Views/layouts/Verification.php?email=" . urlencode($email));
            exit();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
?>