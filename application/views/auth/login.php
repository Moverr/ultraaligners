<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
	 
	 font-size: xx-large;
		font-weight: 400;
		margin: 0 0 14px 0;
		 
	}

	.headline {
		color: #444;
		background-color: transparent;
	 	font-size: 180px;
	 
		font-weight: 400;
		margin: 0 0 14px 0;
	 
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	.submitbutton{
		width: 200px;
		height: 70px;
		border-radius: 10px; font-size: 30px; text-transform: uppercase;
	}
	.loginformwrapper{
		background-color: #f9f9f9; height: 400px; border: #444 1px solid;
		border-radius: 10px; margin-left: 2px;
		padding-top: 20px;
	}
	</style>
</head>
<body>

<div class="container-fluid">
	<div class="row">
	<div class="col-md-7">
	<h1 class="headline">ULTRA LIGNERS </h1>
	</div>
		<div class="col-md-4  loginformwrapper ">
		<h1>LOGIN</h1>
			<form role="form" method="POST" action="auth" >
				<div class="form-group">
					 
					<label for="exampleInputEmail1">
						Username
					</label>
					<input type="email" class="form-control" id="exampleInputEmail1" />
				</div>
				<div class="form-group">
					 
					<label for="exampleInputPassword1">
						Password
					</label>
					<input type="password" class="form-control" id="exampleInputPassword1" />
				</div>
				 
			 
				<button type="submit" class="btn btn-primary submitbutton ">
					Submit
				</button>
			</form>
		</div>
	</div>
</div>

<footer style="
  position: fixed;
    bottom: 0;
	width: 100%;
	">
	<div style="margin: auto; width:150px; margin-bottom:20px; ">&copy; 2020 Ultra Ligners </div>
</footer>
</body>
</html>
