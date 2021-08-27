<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'mahasiswa';
	$conn = mysqli_connect($host, $user, $pass, $db) or die('Koneksi Gagal');

	$sql = "SELECT tb_mahasiswa.mhs_nama FROM `tb_mahasiswa_nilai` INNER JOIN tb_mahasiswa ON tb_mahasiswa_nilai.mhs_id = tb_mahasiswa.mhs_id INNER JOIN tb_matakuliah ON tb_mahasiswa_nilai.mk_id = tb_matakuliah.mk_id WHERE tb_matakuliah.mk_kode = 'MK303' ORDER BY tb_mahasiswa_nilai.nilai DESC LIMIT 1;";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_row($result);
	if ($row[0]) {
		echo $row[0];
	}
?>