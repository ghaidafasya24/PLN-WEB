<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "1920_rpla_projectwork_16_ghaidafasya");


function query($query) {
	global $conn;
	 $result = mysqli_query($conn, $query);
	 $row = [];
	 while( $row = mysqli_fetch_assoc($result)) {
	 	$rows[] = $row;
	 }
	 return $rows;
}


function tambah($data) {
	global $conn;

    $id_pelanggan = htmlspecialchars($data["id_pelanggan"]);
    $no_meter = htmlspecialchars($data["no_meter"]);
    $nama_pelanggan = htmlspecialchars($data["nama_pelanggan"]);
    $no_telepon = htmlspecialchars($data["no_telepon"]);
    $kode_tarif = htmlspecialchars($data["kode_tarif"]);
    $alamat = htmlspecialchars($data["alamat"]);

    $query = "INSERT INTO pelanggan
             VALUES
             ('', '$id_pelanggan', '$no_meter', '$nama_pelanggan', '$no_telepon', '$kode_tarif','$alamat')
             ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function delete($id) {
     global $conn;
     mysqli_query($conn, "DELETE FROM pelanggan WHERE id = $id");

     return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $id = $data["id"];
    $nis = htmlspecialchars($data["id_pelanggan"]);
    $nama = htmlspecialchars($data["no_meter"]);
    $email = htmlspecialchars($data["nama_pelanggan"]);
    $jurusan = htmlspecialchars($data["no_telepon"]);
    $gambar = htmlspecialchars($data["kode_tarif"]);
    $gambar = htmlspecialchars($data["alamat"]);

    $query = "UPDATE pelanggan SET
                id_pelanggan = '$id_pelanggan',
                no_meter = '$no_meter',
                nama_pelanggan = '$nama_pelanggan',
                no_telepon = '$no_telepon',
                kode_tarif = '$kode_tarif',
                alamat = '$alamat'
             WHERE id = $id
              ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}








?>






















