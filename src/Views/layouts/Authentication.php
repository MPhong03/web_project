<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Xác thực</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    </head>
    <body>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                <h2 class="text-center mb-4">Đặt lại mật khẩu</h2>
                    <form method="POST" action="../../Controllers/C_ResetPassword.php">
                        <div class="mb-3">
                            <label for="email" class="form-label">Địa chỉ email:</label>
                            <input type="email" class="form-control" id="email" name="email" required />
                        </div>
                        <button type="submit" class="btn btn-success">Gửi mã OTP</button>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    </body>
</html>