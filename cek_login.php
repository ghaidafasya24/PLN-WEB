<?php        
// membuat koneksi         
$konek = mysqli_connect("localhost","root","","1920_rpla_projectwork_16_ghaidafasya"); 

// Deklarasi variable         
$Username = $_POST['Username'];         
$Password = $_POST['Password'];         
$NamaLengkap = $_POST['NamaLengkap'];        
$submit =$_POST['submit']; 
$Level = $_POST['Level'];  

if(isset($submit)){           
    if(empty($Username) or empty($Password)){            
        echo "<script>alert('Form tidak boleh kosong!!! Silakan ulangi lagi'); window.location=('register.php') </script>";          
    }
	
    else{            
        $pass = $_POST['Password'];           
        $ins = mysqli_query($konek,"insert into tblogin(Username,Password,NamaLengkap) values ('$Username','$pass', '$NamaLengkap')");           
        echo "<script>alert('Data berhasil di Tambah'); window.location=('login.php');</script>";          
    }     
}         

// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['level']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:admin/dashboard.php");
 
	// cek jika user login sebagai operator
	}else if($data['level']=="operator"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "operator";
		// alihkan ke halaman dashboard operator
		header("location:operator/dashboard.php");
 
	// cek jika user login sebagai pelanggan
	}else if($data['level']=="pelanggan"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pelanggan";
		// alihkan ke halaman dashboard pelanggan
		header("location:pelanggan/dashboard.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
}


 
?>