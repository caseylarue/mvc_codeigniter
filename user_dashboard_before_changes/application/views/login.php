<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Bootstrap">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js">
		$('.dropdown-toggle').dropdown()
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js">
	</script>
	<style type="text/css">
		* {
		     vertical-align: baseline;
		     font-weight: inherit;
		     font-family: inherit;
		     font-size: 100%;
		     padding: 0;
		     margin: 0;
		     border: 0 none;
		     outline: 0;
		}

		#heading {
			background-color: #FAEBD7;
			padding: 10px;
			margin-top: 110px;
		}
		#footer {
			width: 950px;
			height: 200px;
			margin-top: 10px;
		}
		.site {
			display: inline-block;
			vertical-align: top;
			border: 1px solid silver;
		}
	</style>
</head>
<body>
	<?php $this->load->view('nav_after_login') ?>
	<div class='container'>
	<div id="heading">
<?php
	if($this->session->flashdata("validation_error"))
	{
		echo  $this->session->flashdata("validation_error");
	}
?>	
		<h2>Login</h2>
        <form class='form-group' action='/main/login_verify' method='post'>
        	<input type='hidden' name='login_verify'>
            <label for='email'>Email address</label>
            <input type='email' name='email' class='form-control' id='email' placeholder="Enter email">
            <label for="password">Password</label>
            <input type='password' class='form-control' id='password' placeholder='Password'>
            <button type='submit' class='btn btn-default'>Login</button>
         </form>
         <h2>Registration</h2>
	  	<form class='form-group' action='/main/register' method='post'>
	  		<input type='hidden' name='register'>
		    <label for='first_name'>First Name</label>
		    <input type='text' name='first_name' class='form-control' placeholder='Jane'>
		    <label for='last_name'>Last Name</label>
		    <input type='text' name='last_name' class='form-control' placeholder='Doe'>
		    <label for='email'>Email address</label>
		    <input type='email' name='email' class='form-control' placeholder='Enter email'>
		    <label for='password'>Password</label>
		    <input type='password' class='form-control' name='password' placeholder='Password'>
		    <label for='password_confirm'>Password Confirm</label>
		    <input type='password' class='form-control' name='password_confirm' placeholder='Password Confirmation'>
		    <button type='submit' class='btn btn-default'>Register</button>
	  	</form>
		</div>
		<div id="footer" class="row">
			<div class="site, col-md-12"></div>	
		</div>
	</div> <!-- container -->
</body>
</html>