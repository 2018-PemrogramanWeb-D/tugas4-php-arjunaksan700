<?php
 session_start();

 // cek apakau user sudah login
 if($_SESSION['login'] == false){
  header('Location: index.php');
 }
?>
<!DOCTYPE html>
<html>
<head>
<title>CARA MEMBUAT LOGIN DENGAN SESSION DI PHP</title>
<style type="text/css">
	body { 
		font-family: Verdana; font-size: 14px; background-image: url(ok.jpg); background-size: 100%; }
	input, button { 
		padding: 7px; }
	button { 
		cursor: pointer; }
	.container { 
		background-color: #FFFFFF; border: 1px solid #000000; padding: 10px; width: 900px; margin: 0 auto; }
	.container .logout {}
</style>
</head>
<body>
	<div class="container">
		<h1>HOME</h1>
		<hr />
		<?php
		date_default_timezone_set('Asia/Jakarta');
              $Hour = date('H');
              echo date("Y.m.d");
              echo "<br> ";
              echo date("h:i:sa");
              echo "<br> <br> <br>";
              if ( $Hour >= 4 && $Hour <= 11 ) {
              echo "Good Morning <br>";
              } else if ( $Hour >= 12 &&  $Hour <= 17 ) {
                echo "Good Afternoon <br>";
              } else if ( $Hour >= 18 || $Hour <= 3 ) {
                  echo "Good Evening <br>";
              } ?>
		<strong class="logout"><a href="logout.php">keluar(<?php echo $_SESSION['user']; ?>)</a></strong>
		<hr />
		<strong>Login Successfull</strong>
	</div>
</body>
</html>
