<?php 
require_once "../function/connection.php"; 
session_start();
if (isset($_SESSION['username'])) {
	header('location:tampilandata.php');
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Login Panel</title>
		<script src="additional/bootstrap/js/bootstrap.min.js"></script>
		<link href="additional/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<style>
			body {
				padding-top: 120px;
				padding-bottom: 40px;
				background-color: #eee;
			}
			.btn {
				outline:0;
				border:none;
				border-top:none;
				border-bottom:none;
				border-left:none;
				border-right:none;
				box-shadow:inset 2px -3px rgba(0,0,0,0.15);
			}
			.btn:focus {
				outline:0;
				-webkit-outline:0;
				-moz-outline:0;
			}
			.fullscreen_bg {
				position: fixed;
				top: 0;
				right: 0;
				bottom: 0;
				left: 0;
				background-size: cover;
				background-position: 50% 50%;
				background-image: url('additional/image/background.jpg');
				background-repeat:repeat;
			}
			.form-signin {
				max-width: 280px;
				padding: 15px;
				margin: 0 auto;
				margin-top:50px;
			}
			.form-signin .form-signin-heading, .form-signin {
				margin-bottom: 10px;
			}
			.form-signin .form-control {
				position: relative;
				font-size: 16px;
				height: auto;
				padding: 10px;
				-webkit-box-sizing: border-box;
				-moz-box-sizing: border-box;
				box-sizing: border-box;
			}
			.form-signin .form-control:focus {
				z-index: 2;
			}
			.form-signin input[type="text"] {
				margin-bottom: -1px;
				border-bottom-left-radius: 0;
				border-bottom-right-radius: 0;
				border-top-style: solid;
				border-right-style: solid;
				border-bottom-style: none;
				border-left-style: solid;
				border-color: #000;
			}
			.form-signin input[type="password"] {
				margin-bottom: 10px;
				border-top-left-radius: 0;
				border-top-right-radius: 0;
				border-top-style: none;
				border-right-style: solid;
				border-bottom-style: solid;
				border-left-style: solid;
				border-color: rgb(0,0,0);
				border-top:1px solid rgba(0,0,0,0.08);
			}
			.form-signin-heading {
				color: #fff;
				text-align: center;
				text-shadow: 0 2px 2px rgba(0,0,0,0.5);
			}
		</style>
	</head>
	<body>
		<div id="fullscreen_bg" class="fullscreen_bg"/>
		<div class="container">
			<form class="form-signin" method="POST" action="../function/login-model.php">
				<h1 class="form-signin-heading text-muted">Login</h1>
				<input type="text" class="form-control" placeholder="Username" required="" autofocus="" name="id">
				<input type="password" class="form-control" placeholder="Password" required="" name="password">
				<input type="submit" name="login" class="btn btn-lg btn-primary btn-block" value="Login">
			</form>
		</div>
	</body>
</html>