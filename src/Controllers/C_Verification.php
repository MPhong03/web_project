<?php
    require_once("../Models/Model_updateUser.php");

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $otp = $_POST['otp'];
        $model = new Model_updateUser();
    
        // Kiểm tra xem mã OTP có đúng không
        if (!$model->checkOTP($email, $otp)) {
            header("Location: ../Controllers/C_SignIn.php");
            exit();
        } else {
            header("Location: ../Views/layouts/SetPassword.php?email=" . urlencode($email));
            exit();
        }
    }
?>