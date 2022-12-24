<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="../fontawesome-free/css/all.min.css">
    
     <!--dashboard.html-->

    <title>Input Pelanggan</title>
    <style>
      .footer{
        background-color: black;
        
      }

      .copy{
        color: blanchedalmond;
        font-style: Parley;
        height: 2px;
        margin-top: -25px;
  
      }
    </style>
  </head>
  <body>

  
    <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
      <a class="navbar-brand" href="#"><b> Admin | WELCOME TO ELECTRIC PAYMENT </b></a>
      
      <form class="form-inline my-2 my-lg-0 ml-auto">
        <input class="form-control mr-sm-2" type="search" placeholder="Search Here" aria-label="Search">
        <button class="btn btn-outline-secondary btn-dark text-white my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
      </form>

        <div class="icon ml-4">
          <h5>
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-user mr-1" style="color: rgb(8, 8, 8);" alt="Profile image" ></i></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown" style="color: black;">
                <div class="dropdown-header text-center">
                  <i class="fas fa-user" alt="Profile image"></i>
                  <p class="font-weight-light text-muted mb-0"></p> admin</p>
                </div>
                <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                <a class="dropdown-item" href="../logout.php">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>
            </li> 
          </ul>
          </h5>
        </div>
      </div>
    </nav>
  

    <div class="row no-gutters mt-5">
    <div class="col-md-2 bg-dark mt-10 pr-3 pt-4">
      <ul class="nav flex-column ml-2 mb-5">
        <li class="nav-item">
          <center><img src="../assets/images/ElectricPay.png" height="150px;" alt=""></center>
          <br>
          
        </li>
        <li class="nav-item text-center text-white">
        <font face="Reckoner"> MAIN MENU </font>
        </li>
        <br>
        <li class="nav-item">
          <a class="nav-link active text-white" href="dashboard.php"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard </a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="pelanggan.php"><i class="fas fa-user mr-2"></i> Pelanggan </a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="inputtagihan.php"><i class="fas fa-file-invoice mr-2"></i> Input Tagihan </a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="inputtarif.php"><i class="fas fa-calendar-alt mr-2"></i> Input Tarif </a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="inputpembayaran.php"><i class="fas fa-money-check-alt mr-2"></i> Input Pembayaran </a><hr class="bg-secondary">
        </li>
      </ul>
    </div>

    <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-user mr-2"></i> INPUT PELANGGAN </h3><hr>
      
      
             <div class="col-md-10 p-1 pt-3 text-secondary">
                 <h6> Detail Pelanggan</h6>
             </div>
         <form>
             <fieldset disabled>
                 <div class="mb-3">
                     <label for="disabledTextInput" class="form-label"> ID Pelanggan</label>
                     <input type="text" id="disabledTextInput" class="form-control" placeholder="192010379">
                 </div>
                 <div class="mb-3">
                      <label for="disabledTextInput" class="form-label">Nama Pelanggan :</label>
                      <input type="text" id="disabledTextInput" class="form-control" placeholder="Abraham Putra">
                 </div>
                 <div class="mb-3">
                      <label for="disabledTextInput" class="form-label">Jumlah Tagihan :</label>
                      <input type="text" id="disabledTextInput" class="form-control" placeholder="Rp.200.000">
                 </div>
                 <div class="mb-3">
                      <label for="disabledTextInput" class="form-label">WAKTU BAYAR :</label>
                      <input type="text" id="disabledTextInput" class="form-control" placeholder="20 April 2021">
                 </div>
             </fieldset>
             <div class="mb-3">
                 <a href="inputpembayaran.php" class="btn btn-info text-light">Kembali</a>
         </form>

         <!-- Optional JavaScript; choose one of the two! -->

          <!-- Option 1: Bootstrap Bundle with Popper -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

         <!-- Option 2: Separate Popper and Bootstrap JS -->
         <!--
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
         -->
         <script type="text/JavaScript" src="assets/js/Admin.js"></script>

     </body>
</html>