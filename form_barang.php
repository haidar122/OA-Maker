<?php
include 'koneksi.php';

$mysqli = mysqli_query($mysqli, "SELECT max(kode) as kodeTerbesar FROM barang");
$data = mysqli_fetch_array($mysqli);
$kodeBarang = $data['kodeTerbesar'];

$urutan = (int) substr($kodeBarang, 3, 3);

$urutan++;

$huruf = "BRG";
$kodeBarang = $huruf . sprintf("%03s", $urutan);
?>


<!DOCTYPE html>
<html>

<head>
    <title>Barang</title>
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
</head>

<body style="font-family:arial">
    <div id="form" class="pt-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col col-8 p-4 bg-light">
                <h2>Input Barang</h2>
                    <form method="post" action="simpan.php" enctype="multipart/form-data">
                    <div class="form-group">
				<label>Foto :</label>
				<input type="file" name="foto" required="required">
				<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
			</div>			
                        <div class="form-group mb-2">
                            <label for="formGroupExampleInput">Kode Barang</label>
                            <input type="text" class="form-control" name="kode" required="required" value="<?php echo $kodeBarang ?>">
                        </div>
                        <div class="form-group mb-2">
                            <label for="formGroupExampleInput2">Nama Barang</label>
                            <input type="text" class="form-control" name="nama" required="required" placeholder="Nama">
                        </div>
                        <div class="form-group mb-2">
                            <label for="exampleFormControlSelect1">Jenis</label>
                            <select class="form-control" name="jenis" required="required">
                                <option>- pilihan -</option>
                                <option>Souvenir</option>
                                <option>Accesoris</option>
                                <option>Cetak</option>
                                <option>Sablon</option>
                            </select>
                            </div>
                            <div class="form-group mb-2">
                                <label for="formGroupExampleInput">Jumlah</label>
                                <input type="text" class="form-control" name="jumlah" required="required" placeholder="jumlah">
                            </div>
                            <div class="form-group mb-2">
                                <label for="formGroupExampleInput">Harga</label>
                                <input type="text" class="form-control" name="harga" required="required" placeholder="harga">
                            </div>
                            <div class="col-auto my-1">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                    <br>
                    <hr>
                    <br>

                </div>

            </div>

        </div>

    </div>