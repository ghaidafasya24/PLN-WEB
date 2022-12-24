<!doctype html>
<html lang="en">
    <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
     <link href="bs5/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">

     <link rel="stylesheet" href="assets/css/landingpage_navbar.css">
     <link rel="stylesheet" href="assets/css/landingpage_body.css">

    <title>Landing page</title>
    <style type="text/css">
     .left{
         text-align: left;
         font-style: Comic Sans;
        }

    </style>
</head>
<body>
    <!--login.php-->
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/images/foto4.png" height="100px">
            </a>
            <button class="navbar-toggler mb-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
             <ul class="nav nav-pills">
                 <li class="nav-item">
                     <a class="nav-link link tebel-sedang btn-outline-secondary" href="landingpage.php">Home &nbsp;&nbsp;</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link link tebel-sedang btn-outline-secondary" href="help.php">Help &nbsp;&nbsp;</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link tebel-sedang btn-outline-secondary" href="about us.php">About Us &nbsp;&nbsp;</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active tebel-sedang rounded-pill bg-ungu shadow" href="login.php">Login</a>
                </li>
             </ul>
        </div>
        </div>
    </nav>


                     <!-- konten -->
     <div class="container">

        <div class="row mt-5 mb-5">

            <div class="col-lg-12 gambar">
              <img src="" width="100%">
              
            </div>

            <div class="col-sm-12 position-relative p-4">

                <div class="position-absolute top-0 end-0">
                    <img src="" class="img">
                </div>

                <div class="container-fluid container-jumbotron bg-light">
                    <div class="container">
                        <div class="jumbotron py-5 my-auto">
                            <div class="row flex-column-revense flex-lg-row">
                                <div class="col-lg-6 col-sm-12 my-auto">
                                <div id="target2"></div>
                                    <p class="h1"><span style="color: #020202; font-size: 0.5em;">ElectricPay</span>
                                    <br>
                            
                                    <span style="color: #0b025f;">Help</span><span style="color: #020202;">Center</span></p>
                                    
                                    <p class="lead sub text-justify"> We will always be here to help you</p>
                                    <p class="lead">
                    
                                    </p>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <img src="assets/images/bglistrik4.png" alt="" class="img-fluid side-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container-fluid container-jumbotron bg-light">
                    <div class="container">
                        <div class="jumbotron py-5 my-auto">
                            <div class="row flex-column-revense flex-lg-row">
                                <div class="col-lg-6 col-sm-12">
                                    <img src="assets/images/bglistrik5.png" alt="" class="img-fluid side-img">
                                </div>

                                <div class="col-lg-6 col-sm-12 my-auto">

                                    <div id="target1">
                                    <p class="h1"> Tutorial</p>
                                    </div>
                                        <ol type="1" class="lead sub text-justify">
                                            <li>Masuk atau daftar dengan akun anda.</li>
                                            <li>Setelah login selesai, pilih menu input tagihan</li>
                                            <li>Pilih menu pembayaran, lalu masukkan nomor tagihan</li>
                                            <li>Bayar sesuai tagihan</li>
                                            <li>Setelah itu, Log out akun pengguna</li>
                                        </ol>
                                    
                                    
                                    <p class="lead">
                    
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>


                

             </div>

         </div>

    </div>

    <footer>
        <div class="container-fluid bg-dark p-3 footer">
            <center>
            <a href=""><i class="fab fa-facebook-f mr-6 text-white mr-4" data-toggle="tooltip" title="Facebook"></i></a>
              <a href="https://instagram.com/ghaidafasya24"><i class="fab fa-instagram mr-4 text-white" data-toggle="tooltip" title="Instagram"></i></a>
              <a href=""><i class="fab fa-twitter mr-4 text-white" data-toggle="tooltip" title="Twitter"></i></a>
              <a href="https://www.youtube.com/channel/UC4DBWKw-f6KNOczThc3Fg7Q"><i class="fab fa-youtube mr-4 text-white" data-toggle="tooltip" title="Youtube"></i></a>
           </center>
              <div class="row text-white p-5">
                <div class="col-lg-3 col-md-4 col-sm-12 d-flex flex-column">
                    <h4>Electric Pay</h4>
                    <p>Electric pay is a website <br> for paying electricity bills</p>
                </div>
                <div class="col-lg-3 col-4 d-flex flex-column ab-5">
                    <h5>Help</h5>
                    <a href="#target1" class="text-white">Tutorial</a>
                    <a href="help.php" class="text-white">How to pay</a>
                </div>
                <div class="col-lg-3 col-4 d-flex flex-column ab-5">
                    <h5>Service</h5>
                    <a href="#target2" class="text-white">Help</a>
                    <a href="about us.php" class="text-white">About Us</a>
                </div>
                <div class="col-lg-3 col-md-12 d-flex flex-column">
                    <a href="login.php" role="button" class="btn btn-sm btn-primary btn-outline-secondary text-white ft-login-btn text-center ab-3">Login</a>
                    <br>
                    <a href="register.php" role="button" class="btn btn-sm btn-secondary btn-outline-primary text-white ft-register-btn text-center">Sign Up</a>
                </div>
            </div>
            <hr style="background-color: #fff;">
            <p class="text-white text-center mt-4">&copy; Copyright 2021 ElectricPay</p>
        </div>
    </footer>

    <!-- Option 1: Bootstrap Bundle with Popper --> 
    <script src="bs5/dist/js/bootstrap.bundle.js"></script>
</body>
</html>