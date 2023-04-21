<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>Đăng nhập</title>
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
                    <h2 class="text-center mb-4">Nhập lại mật khẩu</h2>
                    <form method="POST" action="../../Controllers/C_CheckSetPassword.php">
                        <div class="mb-3">
                            <label for="password" class="form-label">Đặt mật khẩu mới:</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <input type="hidden" name="email" value="<?php echo htmlspecialchars($_GET['email']);?>">
                        <button type="submit" class="btn btn-success">Đặt lại mật khẩu</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>