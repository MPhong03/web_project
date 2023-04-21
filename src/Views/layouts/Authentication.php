<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Xác thực</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

        <!-- My CSS and JQuery -->
        <link href="../assets/Styles/style.css" rel="stylesheet">
    </head>
    <body>
        <h2>Đặt lại mật khẩu</h2>
        <form method="POST" action="../../Controllers/C_ResetPassword.php">
            <label>Địa chỉ email:</label>
            <input type="email" name="email" required>
            <input type="submit" value="Gửi mã OTP">
        </form>
    </body>
</html>