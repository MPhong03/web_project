
<div class="navbar-content fixed-top" id="navbar-content" data-scrollto-offset="0">
	<nav class="navbar navbar-expand-lg navbar-light px-4">
		<div class="container-fluid">
			<!-- <a class="navbar-brand" href="../../../index.php">FINDWORK</a> -->
			<a class="navbar-brand" href="../../../../index.php">
				<img src="../../../src/assets/Images/logo.png" alt="logo" height="80" loading="lazy" width="80">
			</a>

			<button class="navbar-toggler border-0" id="btn-menu" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<!-- RIGHT -->
				<ul class="navbar-nav me-auto mt-2 mt-lg-0">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="routes.php?timviec">Tìm việc</a> <!--./src/Controllers/C_SignIn.php-->
					</li>
					<li class="nav-item">
						<a class="nav-link" href="routes.php?dangviec">Đăng việc</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="routes.php?taocv">Tạo CV</a>
					</li>
				</ul>

				<!-- LEFT -->
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item border-end">
						<!-- Đang chỉnh -->
						<!-- <input name="login" type="submit" class="form-control-plaintext nav-link border-0 text-start"
                            data-bs-toggle="modal" data-bs-target="#form-login" value="Đăng nhập"> -->
						<a class="nav-link" href="./src/Controllers/C_SignIn.php">Đăng nhập</a>
					</li>
					<li class="nav-item item-dangky">
						<a class="nav-link" href="./src/Controllers/C_Register.php">Đăng ký</a>
					</li>
				</ul>

			</div>
		</div>
	</nav>
</div>
