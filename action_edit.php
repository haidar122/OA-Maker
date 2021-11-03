<?php

require_once("koneksi.php");

if (isset($_POST['kode'])) {
	$kode_barang = $_POST['kode'];
}else{
	echo "ID Barang Tidak ditemukan! <a href='admin.php'>Kembali</a>";
	exit();
}

$query = "SELECT * FROM barang WHERE kode = '{$kode}'";
$result = mysqli_query($mysqli, $query);

if (isset($_POST['kode'])) $kode_barang = $_POST['kode'];

if (isset($_POST['nama'])) $nama = $_POST['nama'];

if (isset($_POST['jenis'])) $jenis = $_POST['jenis'];

if (isset($_POST['jumlah'])) $jumlah = $_POST['jumlah'];

if (isset($_POST['harga'])) $harga = $_POST['harga'];

$files = $_FILES['foto'];
$path = "file/";

if (!empty($files["name"])) {
	$filepath = $path . $files["name"];
	$upload = move_uploaded_file($files["tmp_name"], $filepath);
	if ($upload) {
		unlink($foto);
	}
} else {
	$filepath = $foto;
	$upload = false;
}

// Menangani Error saat Upload
if ($upload != true && $filepath != $foto) {
	exit("Gagal Mengupload File. <a href='admin.php'>Kembali</a>");
}


$query = "UPDATE barang SET 
		nama = '{$nama}',
		jenis = '{$jenis}',
        jumlah = '{$jumlah}',
		harga = '{$harga}',
		foto = '{$filepath}'
	WHERE kode = '{$kode}' ";

$insert = mysqli_query($mysqli, $query);

if ($insert == false) {
	echo "Error dalam mengubah data. <a href='admin.php'>Kembali</a>";
}else{
	header("Location: admin.php");
}

?>