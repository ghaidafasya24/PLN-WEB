<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>
<body>

	<div class="kotak_login">
	<center><img src="assets/images/ElectricPay.png" alt="" class="img"></center>
		<p class="tulisan_login">Register Here</p>
 
		<form action="proses-register.php" method="post">
    <label>Nama</label>
			<input type="text" name="nama" class="form_login" placeholder="Nama .." required="required">

    <label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="text" name="password" class="form_login" placeholder="Password .." required="required">
			<input type="submit" name="submit" class="tombol_login" value="REGISTER">
          <hr>
			<center> have an account? <a href="login.php">Login here.</a></center>
 
			<br/>
			<br/>
			<center>
				<a class="link" href="landingpage.php">Back</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>