<?php

require_once("koneksi.php");

$query = "SELECT * FROM barang";
$result = mysqli_query($mysqli, $query);

require_once("session_check.php");

?>
<!DOCTYPE html>
<html>

<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
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
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<!-- Navbar-brand -->
			
    <div class="container px-0 px-lg-3">
      <a class="navbar-brand" href="index.html"><span
            class="font-weight-bold text-uppercase text-dark">OA MAKER</span></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          
          <ul class="navbar-nav ml-auto">
		  <li class="nav-item">
				<a href="admin.php" class="nav-link" aria-current="page">Daftar Barang</a>
			</li>
			<li class="nav-item"><a class="nav-link" href="registrasi.php"> <i
                  class="fas fa-dolly-flatbed mr-1 text-gray"></i>Registrasi<small class="text-gray"></small></a></li>
            
          </ul>
        </div>
      
    </div>


			<!-- Navbar Collapse -->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					
					<?php

					if ($sessionStatus == false) {

					?>

					<li class="nav-item"><a class="nav-link" href="login.php"> <i
                  		class="fas fa-user-alt mr-1 text-gray"></i>Login Admin</a>
            		</li>

					<?php } else { ?>

						<li class="nav-item">
							<a href="logout.php" class="nav-link" aria-current="page" class="btn btn-primary" role="button"><i class="fa fa-sign-out"></i>Log out <?= $sessionName ?></a>
						</li>

					<?php } ?>

				</ul>
			</div>
		</div>
	</nav>
	<div id="student-list">
		<div class="container">

			<?php if ($sessionStatus) { ?>

				<div class="rom mb-4">
					<div class="col">
						
					</div>
					<div class="col text-end">
						<a href="form_barang.php" class="btn btn-primary" role="button"><i class="fa fa-plus-circle"></i>Tambah Barang</a>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<table class="table">
							<thead>
								<tr>
									<th>No</th>
									<th>Foto</th>
									<th>Kode</th>
									<th>Nama Barang</th>
									<th>Jenis</th>
									<th>Jumlah</th>
									<th>Deskripsi</th>
									<th>Harga</th>
									<th colspan='2'>AKSI</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$result = mysqli_query($mysqli, "SELECT * FROM barang");
								$no = 1;
								while ($b = mysqli_fetch_array($result)) {
								?>
									<tr>
										<td><?php echo $no ?></td>
										<td><img src="<?php echo $b['foto'] ?>" width="35" height="40"></td>
										<td><?php echo $b['kode']; ?></td>
										<td><?php echo $b['nama']; ?></td>
										<td><?php echo $b['jenis']; ?></td>
										<td><?php echo $b['jumlah']; ?></td>
										<td><?php echo $b['deskripsi']; ?></td>
										<td><?php echo "Rp. " . number_format($b['harga']) . " ,-"; ?></td>
										<td>
											<a href="edit.php?kode=<?php echo htmlspecialchars($b['kode']); ?>" class="btn btn-warning" role="button"><i class="fa fa-edit"></i></a>
											<a href="delete.php?kode=<?php echo $b['kode']; ?>" class="btn btn-danger" role="button"><i class="fa fa-trash"></i></a>
										</td>
									</tr>
								<?php
									$no++;
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			<?php } else echo "<h2>Login Terlebih Dahulu!</h2>"; ?>
		</div>
	</div>
	</div>
</body>

</html>