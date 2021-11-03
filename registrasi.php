<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registrasi</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <!-- Lightbox-->
  <link rel="stylesheet" href="vendor/lightbox2/css/lightbox.min.css">
  <!-- Range slider-->
  <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
  <!-- Bootstrap select-->
  <link rel="stylesheet" href="vendor/bootstrap-select/css/bootstrap-select.min.css">
  <!-- Owl Carousel-->
  <link rel="stylesheet" href="vendor/owl.carousel2/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="vendor/owl.carousel2/assets/owl.theme.default.css">
  <!-- Google fonts-->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="css/custom.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/favicon.png">
</head>
<body>
<header class="header bg-white">
    <div class="container px-0 px-lg-3">
      <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="index.html"><span
            class="font-weight-bold text-uppercase text-dark">OA MAKER</span></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          
          <ul class="navbar-nav ml-auto">
		  <li class="nav-item"><a class="nav-link" href="registrasi.php"> <i
                  class="fas fa-dolly-flatbed mr-1 text-gray"></i>Registrasi<small class="text-gray"></small></a></li>
            <li class="nav-item"><a class="nav-link" href="login.php"> <i
                  class="fas fa-user-alt mr-1 text-gray"></i>Login
                Admin</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
	<div id="form" class="pt-5">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col col-8 p-4 bg-light">
					<form method="POST" action="action_registrasi.php">
						<div class="form-group mb-2">
							<label for="user">User</label>
							<input type="user" id="user" name="user" class="form-control" placeholder="Masukkan Username" required>
						</div>
						<div class="form-group mb-2">
							<label for="name">Nama Lengkap</label>
							<input type="text" id="name" class="form-control" name="name" placeholder="Nama Lengkap..." required>
						</div>
						<div class="form-group mb-2">
							<label for="password">Password</label>
							<input type="password" id="password" class="form-control" name="password" placeholder="Password..." required>
						</div>
						<div class="form-group mb-2">
							<label for="re-password">Konfirmasi Password</label>
							<input type="password" id="re-password" class="form-control" name="re-password" placeholder="Password..." required>
						</div>
						<input type="submit" value="kirim" name="submit" class="btn btn-primary">
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>