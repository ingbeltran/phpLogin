<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	?>
		<nav class="navbar navbar-default">
			<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Brand</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<p class="navbar-text">Hola <strong><?php echo $_SESSION['username']; ?></strong> Bienvenido!</p>
						<li><a href="logout.php">Cerrar Sesión</a></li>
					</ul>
				</div>
			</div>
		</nav>
	    <div class="container">
			<p></p>
		</div>
	<?php
	}else{
	?>
		<div class="container bg-danger">
			<p class='lead text-center'>Esta pagina es solo para usuarios registrados.</p>
		   	<p class='text-center'><a href='login.php' class='btn btn-primary'>Iniciar sesión</a></p>
	   	</div>
	<?php
		exit;
	}

	$now = time();

	if($now > $_SESSION['expire']) {
	session_destroy();

	echo "Su sesion a terminado";
	exit;
	}

	?>
</body>
</html>