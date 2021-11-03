<?php 

include 'koneksi.php';

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];

$files = $_FILES['foto'];
$path = "file/";

if (!empty($files['name'])) {
	$filepath = $path . $files["name"];
	$upload = move_uploaded_file($files["tmp_name"], $filepath);
} else {
	$filepath = "";
	$upload = false;
}

// Menangani Error saat Upload
if ($upload != true && $filepath != "") {
	exit("Gagal Mengupload File. <a href='admin.php'>Kembali</a>");
}


if ($error == 1) {
	echo "Terjadi kesalahan dalam proses input data";
	exit();
}

$query = "INSERT INTO barang (kode, nama, jenis, jumlah, harga, foto)
		VALUES('{$kode}', '{$nama}','{$jenis}','{$jumlah}','{$harga}', '{$filepath}');";
$insert = mysqli_query($mysqli, $query);

if ($insert == false) {
	echo "Error dalam menambahkan data. <a href='admin.php'>Kembali</a>";
}else {
	header("Location: admin.php");
}


?>