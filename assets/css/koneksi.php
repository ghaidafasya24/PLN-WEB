<?php

$konek = mysqli_connect('localhost','root','1920_rpla_projectwork_16_GhaidaFasya');

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
    $hasil = mysqli_fetch_array($query);
    return $cek;
}

function hitungBarisTarif(){
    global $konek;
    $sql = "select * from tbtarif";
    $query = mysqli_query($konek,$sql);
    $hitung = mysqli_num_rows($query);
    return $hitung;
}

function hitungBaristagihan(){
    global $konek;
    $sql = "select * from tbtarif";
    $query = mysqli_query($konek,$sql);
    $hitung = mysqli_num_rows($query);
    return $hitung;
}
function hitungBarispelanggan(){
    global $konek;
    $sql = "select * from tbpelanggan";
    $query = mysqli_query($konek,$sql);
    $hitung = mysqli_num_rows($query);
    return $hitung;
}

function hitungBarisPLN(){
    global $konek;
    $sql = "select * from login where Level<>'Pelanggan'";
    $query = mysqli_query($konek,$sql);
    $hitung = mysqli_num_rows($query);
    return $hitung;
}

function hitungBarispembayaran(){
    global $konek;
    $sql = "select * from tbpembayaran";
    $query = mysqli_query($konek,$sql);
    $hitung = mysqli_num_rows($query);
    return $hitung;
}

?>