<?php         
// membuat koneksi         
$konek = mysqli_connect("localhost","root","","1920_rpla_projectwork_16_ghaidafasya");          
// Deklarasi variable         
$Username = $_POST['username'];         
$Password = $_POST['password'];         
$NamaLengkap = $_POST['nama'];        
$submit =$_POST['submit']; 
$Level = $_POST['level'];         
if(isset($submit)){           
    if(empty($username) or empty($password)){            
        echo "<script>alert('Form tidak boleh kosong!!! Silakan ulangi lagi'); window.location=('register.php') </script>";          
    }
    else{            
        $pass = $_POST['password'];           
        $ins = mysqli_query($konek,"insert into tblogin(username,password,namalengkap) values ('$username','$pass', '$nama')");           
        echo "<script>alert('Data berhasil di Tambah'); window.location=('login.php');</script>";          
    }     
}         
?>