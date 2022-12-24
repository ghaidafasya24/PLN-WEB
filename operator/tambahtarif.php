


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
      <a class="navbar-brand" href="#"><b> Operator | WELCOME TO ELECTRIC PAYMENT </b></a>
      
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
                  <p class="font-weight-light text-muted mb-0"></p> operator</p>
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
          <a class="nav-link text-white" href="inputtarif.php"><i class="fas fa-calendar-alt mr-2"></i> Input Tarif </a><hr class="bg-secondary">
        </li>
      </ul>
    </div>

    <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-calendar-alt mr-2"></i> TAMBAH TARIF </h3><hr>
      
             <div class="col-md-10 p-1 pt-3 text-secondary">
                 <h6> Tambah Tarif</h6>   
             </div>
             <form action="" method="post">
                 
                 <div class="mb-3">    
                     <label for="inputpassword5" class="form-label text-dark">Kode Tarif</label>
                     <br>
                  
                     <select id="disabledSelect" class="form-label text-dark">
                         <option></option>
                         <option>R3/450VA</option>
                         <option>R1/900VA</option>
                         <option>R2/450VA</option>
                         <option>R2/900VA</option>
                         <option>B1/1500VA</option>
                         <option>R3/900VA</option>
                         <option>R3/1300VA</option>
                         <option>R1/450VA</option>
                     </select>
                 </div>
                
                 <div class="mb-3">
                 <a href="#" type="submit" name="submit" class="btn btn-info text-light">Submit</a> <a href="inputtarif.php" class="btn btn-success">Kembali</a> 
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