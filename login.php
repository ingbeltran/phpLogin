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
	<div class="container">
		<div class="box">
			<form action="checklogin.php" method="post">
				<div class="form-group">
					<input type="text" name="username" id="username" placeholder="Intruduce tu usuario" class="form-control">
				</div>
				<div class="form-group">
					<input type="password" name="password" id="password" placeholder="Intruduce tu contraseña" class="form-control">
				</div>
				<div class="form-group">
					<input type="submit" value="Enviar" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
</body>
</html>