<?php 
$koneksi = mysqli_connect("localhost","root","","1920_rpla_projectwork_16_ghaidafasya");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

function query($sql){
	global $konek;
	$query = mysqli_query($konek,$sql);
	return $query;
}
 
function jadiArray($query){
	global $konek;
	$hasil = mysqli_fetch_array($query);
	return $hasil;
}

function hitungBaris($query){
	global $konek;
	$cek = mysqli_fetch_array($query);
	return $cek;
}

function hitungBarisTarif(){
	global $konek;
	$sql = "select * from tbtarif"
	$query = mysqli_query($konek,$sql);
}

?>