<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Pembayaran Listrik</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auto-form-wrapper">
                <form action="proses-register.php" method="post">
                  <div class="form-group">
                    <label class="label">Nama Lengkap</label>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Nama Lengkap" name="NamaLengkap" id="" required>
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="label">Username</label>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Username" name="Username" id="" required>
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="label">Password</label>
                    <div class="input-group">
                      <input type="password" class="form-control" placeholder="Password" name="Password" id="" required>
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="label">Confirm Password</label>
                    <div class="input-group">
                      <input type="password" class="form-control" placeholder="Confirm password" name="Password2" id="" required>
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="input-group">
                    <select>
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                    <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>

                  <div class="form-group">
                    <button class="btn btn-primary submit-btn btn-block" type="submit" name="register_submit" value="login" id="">Register</button>
                  </div>
                  <div class="form-group d-flex justify-content-between">
                    <a href="#" class="text-small forgot-password text-black">Forgot Password</a>
                  </div>
                  <div class="text-block text-center my-3">
                    <span class="text-small font-weight-semibold">Have an account ? </span>
                    <a href="index.php" class="text-black text-small">Login</a>
                  </div>
                </form>
              </div>
              <ul class="auth-footer">
                <li>
                  <a href="#">Conditions</a>
                </li>
                <li>
                  <a href="#">Help</a>
                </li>
                <li>
                  <a href="#">Terms</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

  
</body>

</html> -->

<!DOCTYPE html>         
<html>        
  <head>          
    <title>Register</title>          
    <link rel="stylesheet" type="text/css" href="login.css">         
  </head>         
  <body>         
    <div id="main">           
      <h1><center>Register Account</center></h1>           
      <form action="proses-register.php" method="post">            
        <table border="0">             
          <tr>              
            <td>Username</td>              
            <td><input type="text" name="Username"></td>             
          </tr>             
          <tr>              
            <td>Password</td>              
            <td><input type="text" name="Password"></td>             
          </tr>  
          <tr>              
            <td>Nama Lengkap</td>              
            <td><input type="text" name="NamaLengkap"></td>             
          </tr>                     
          <tr>              
            <td><input type="submit" name="submit" value="Daftar"></td>             
          </tr>            
        </table>           
      </form>          
    </div>         
  </body>         
  </html>