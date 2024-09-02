<?php
	include "database.php";
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Scholl Management System</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body class="back">
		<?php include"navbar.php";?>
		<img src="img/contact.png" width="800" height="300">
		
		<div class="login">
			<h1 class="heading">Contact Us</h1>
			<div class="cont">
			
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					
				<h2>School Management System</h2><br>
					V Cube Technology<br>
					Mail - vinaykumarss904@gmail.com<br>Phone - 88617 - 24899
				</form>
			</div>
		</div>
		<div class="footer">
			<footer><p>Copyright &copy; School Management System </p></footer>
		</div>
		<script src="js/jquery.js"></script>
		<script>
		$(document).ready(function(){
			$(".error").fadeTo(1000, 100).slideUp(1000, function(){
					$(".error").slideUp(1000);
			});
			
			$(".success").fadeTo(1000, 100).slideUp(1000, function(){
					$(".success").slideUp(1000);
			});
		});
	</script>	
	</body>
</html>