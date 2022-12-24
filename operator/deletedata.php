<?php 
require 'functions.php';

$id = $_GET["id"];

if (delete($id) > 0) {
echo "
            <script>
              alert('Data berhasil dihapus!');
              document.location.href = 'pelanggan.php';
            </script>
    	";
}  else {
    	echo "
    	    <script>
              alert('data gagal ditambahkan!');
              document.location.href = 'pelanggan.php';
            </script>
    	";
}

?>