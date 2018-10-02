<?php
 session_start();

 // set session
 $_SESSION['login'] = false;
?>
<!DOCTYPE html>
<html>
<head>
<title>TUGAS 4</title>
<style type="text/css">
	body { 
		font-family: Verdana; font-size: 14px; background-color: #F7F7F7;  background-image: url(bg1.jpg);
    	background-size: 100%; }
	input, button { 
		padding: 7px; }
	button { 
		cursor: pointer; }
	.container { 
		background-color: #FFFFFF; border: 1px solid #000000; padding: 10px; width: 400px; margin: 0 auto; }
	.container .form-control { 
		margin-bottom: 10px; width: 100%; }
	.container .form-control input { 
		width: 380px; }
	.container .form-control button { 
		width: 397px; }
	.container .pesan { 
		color: #FFFFFF; text-align: center; padding: 7px; background-color: #FF0000; font-weight: bold; }
	
</style>
</head>
<body>
	<br> <br> <br>
	<div class="container">
		<h1><center>LOGIN PAGE</center></h1>
			<hr />
		<form action="cek_login.php" method="POST">
				<div class="form-control">
		  			<input type="text" name="user" placeholder="Masukan username">
				</div>
				<div class="form-control">
		  			<input type="password" name="pass" placeholder="Masukan password">
				</div>
				<div class="form-control">
		  			<button type="submit"><strong>Login</strong></button>
				</div>

			<?php
			if(isset($_GET['p'])){
			?>
			<div class="pesan">
			<?php echo $_GET['p']; ?>
			</div>
			<?php } ?>	
		
		</form>
	<div>
		<br>
		<p align="center"><strong>Username : DEMO</strong> </p>
		<p align="center"><strong>Password : 1234</strong> </p>
	</div>
	</div>
</body>
</html>
