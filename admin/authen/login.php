<?php
	session_start();

	require_once('../../code/function.php');
	require_once('../../database/dbhelper.php');
	require_once('process_form_login.php');

	$user = getUserToken();
	if($user != null) {
		header('Location: ../');
		die();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Đăng Nhập</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url(../../assets/img/bg-reg.jpg); background-size: cover; background-repeat: no-repeat;">
	<div class="container">
		<div class="panel panel-primary" style="width: 480px; margin: 0px auto; margin-top: 100px; background-color: white; padding:30px 40px; border-radius: 5px; ">
			<div class="panel-heading">
				<h2 class="text-center">ĐĂNG NHẬP</h2>
				<h5 style="color: red;" class="text-center"><?=$msg?></h5>
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
					  <label for="email">Email:</label>
					  <input required="true" type="email" class="form-control" id="email" name="email" value="<?=$email?>">
					</div>
					<div class="form-group">
					  <label for="pwd">Mật Khẩu:</label>
					  <input required="true" type="password" class="form-control" id="pwd" name="password"  minlength="6">
					</div>
					<button class="btn btn-danger" style="margin-left: 150px;margin-top:20px;">Đăng Nhập</button>
					<p>
						<a href="register.php" style="text-decoration: none;margin-left: 130px;">Tôi chưa có tài khoản</a>
					</p>
				</form>
			</div>
		</div>
	</div>
</body>
</html>