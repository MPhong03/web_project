<!DOCTYPE html>
<html>
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
        <title>Đặt lại mật khẩu</title>
    </head>
    <body>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h2 class="text-center mb-4">Nhập mã OTP để đặt lại mật khẩu</h2>
                    <form method="post" action="../../Controllers/C_Verification.php">
                        <div class="mb-3">
                            <label for="otp" class="form-label">Mã OTP:</label>
                            <input type="text" class="form-control" id="otp" name="otp" required>
                        </div>
                        <input type="hidden" name="email" value="<?php echo htmlspecialchars($_GET['email']); ?>">
                        <button type="submit" class="btn btn-success">Nhập</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>