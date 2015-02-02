<html>
<head>
	<title>Login and Registration</title>
	<style type="text/css">
		#login {
			border: 1px solid black;
			width: 450px;
			height: 150px;
			padding: 5px;
		}
		#login input {
			display: block;
			margin: 10px;
		} 
		#login button {
			margin: 5px;
			padding: 10px;
		} 
		#registration {
			border: 1px solid black;
			width: 450px;
			height: 450px;
			padding: 5px;
		}
		#registration input {
			display: block;
			margin: 10px;
		}
		#registration button {
			margin: 10px;
			padding: 10px;
		} 

	</style>
</head>
<body>
<?php
	if($this->session->flashdata("login_error"))
	{
		echo $this->session->flashdata("login_error");
	}
?>
<?php

	if($this->session->flashdata("validation_error"))
	{
		echo $this->session->flashdata("validation_error");
	}
	
?>
	<h1>Login:</h1>
	<div id='login'>
		<form action='/main/login' method='post'>
			<input type='hidden' name='action' value='login'>
			Email: <input type='text' name='email'>
			Password: <input type='text' name='password'>
			<button type='submit'>Login</button>
		</form>
	</div>
	<h1>Registration:</h1>
	<div id='registration'>
		<form action='/main/registration' method='post'>
			<input type='hidden' name='action' value='register'>
			First Name: <input type='text' name='first_name'>
			Last Name: <input type='text' name='last_name'>
			Email: <input type='text' name='email'>
			Password: <input type='text' name='password'>
			Confirm Password: <input type='text' name='confirm_password'>
			<button type='submit'>Registration</button>
		</form>
	</div>
</body>
</html>