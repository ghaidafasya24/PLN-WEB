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

    <!--login.php-->
    <title>Dashboard</title>
    <style>
      .footer{
        background-color: black;
      }

      .copy{
        color: blanchedalmond;
        font-style: Parley;
        height: 2px;
  
  
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
    <h3><i class="fas fa-tachometer-alt mr-2"></i> DASHBOARD </h3><hr>
    <div class="row text-white">


      <div class="card col-4 bg-danger mr-2">
        <div class="card-body">
          <h5 class="card-title">PELANGGAN</h5>
          
          <div class="d-flex justify-content-end pl-5">
            <i class="fas fa-user fa-2x"></i>
          </div>
          <div class="display-4" style="margin-top: -50px;">7</div>
            <a href="pelanggan.php" class="btn btn-outline-secondary btn-info"><p class="card-text text-light"> Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>            
        </div>
      </div>


      <div class="card col-4 bg-warning mr-2 ml-3">
        <div class="card-body">
          <h5 class="card-title">INPUT TAGIHAN</h5>
          <div class="d-flex justify-content-end pl-5">
            <i class="fas fa-file-invoice fa-2x"></i>
          </div>
          <div class="display-4" style="margin-top: -50px;">0</div>
          <a href="inputtagihan.php" class="btn btn-outline-secondary btn-info"><p class="card-text text-light"> Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
        </div>
      </div>


      <div class="card col-4 bg-success mt-4">
        <div class="card-body">
          <h5 class="card-title">INPUT TARIF</h5>
          
          <div class="d-flex justify-content-end pl-5">
            <i class="fas fa-calendar-alt fa-2x"></i>
          </div>
          <div class="display-4" style="margin-top: -50px;">5</div>
          <a href="inputtarif.php" class="btn btn-outline-secondary btn-info"><p class="card-text text-light"> Lihat Detail <i class="fas fa-angle-double-right ml-2"></i> </p></a>
        </div>
      </div>
      

      <div class="card col-4 bg-primary mt-4 ml-4"> 
        <div class="card-body">
          <h5 class="card-title">INPUT PEMBAYARAN</h5>
          
          <div class="d-flex justify-content-end pl-5 pl-2">
            <i class="fas fa-money-check-alt fa-2x"></i>
          </div>
          <div class="display-4" style="margin-top: -50px;">2</div>
          <a href="inputpembayaran.php" class="btn btn-outline-secondary btn-info"><p class="card-text text-light"> Lihat Detail <i class="fas fa-angle-double-right ml-2"></i> </p></a>
        </div>
      </div>
    </div>
  </div>
<br>
  
  
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>
  </body>
</html>