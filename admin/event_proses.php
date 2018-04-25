<?php
include '../conn/koneksi.php';

//Detail Event & keterangan
$kode_event = $_POST ['kode_event'];
$judul_event = $_POST ['judul_event'];
$lokasi_venue = $_POST ['lokasi_venue'];
$alamat_venue = $_POST ['alamat_venue'];
$tanggal_tampil = $_POST ['tanggal_tampil'];
$jam_mulai = $_POST ['waktu_tampil'];
$tanggal_input = $_POST ['tgl_input'];
$batas_usia = $_POST ['batas_usia'];

//SQL Query Event
$inp = mysqli_query($konek,"INSERT INTO `tbl_event`(`kode_event`, `judul_event`, `lokasi_venue`, `alamat_venue`, `tanggal_tampil_event`, `tanggal_input_event`, `batas_usia`, `waktu_tampil`) VALUES ('$kode_event','$judul_event','$lokasi_venue', '$alamat_venue', '$tanggal_tampil', '$tanggal_input', '$batas_usia', '$jam_mulai')");




//Tiket event
$jumlah_tiket = $_POST['jumlah_tiket'];
for ($i=1; $i <= $jumlah_tiket ; $i++) { 
	
	$nm_tiket[$i] = $_POST['nama_kategori_'.$i];
	$harga_tiket[$i] = $_POST['harga_tiket_'.$i];
	$jml_tiket[$i] = $_POST['jumlah_tiket_'.$i];
	
	$inp_tiket = mysqli_query($konek, "INSERT INTO `tbl_tiket`(`kode_tiket`, `kode_event`, `nama_kategori`, `harga_tiket`, `jumlah_tiket`) VALUES ('$kode_event$i','$kode_event','$nm_tiket[$i]','$harga_tiket[$i]','$jml_tiket[$i]')");

	echo "$nm_tiket[$i]</br>";
	echo "$harga_tiket[$i]</br>";
	echo "$jml_tiket[$i]</br>";

}

if ($inp && $inp_tiket) {
	echo "<script> alert('Data berhasil Ditambahkan') </script>";
}




echo "$kode_event</br>";
echo "$judul_event</br>";
echo "$lokasi_venue</br>";
echo "$alamat_venue</br>";
echo "$tanggal_tampil</br>";
echo "$jam_mulai</br>";
echo "$tanggal_input</br>";
echo "$batas_usia</br>";
echo "$jumlah_tiket</br>";


?>