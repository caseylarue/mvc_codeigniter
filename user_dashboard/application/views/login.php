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
	<?php $this->load->view('nav_before_login') ?>
	<div class='container'>
		<div id="heading">
		<h2>Login</h2>
        <form class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            <button type="submit" class="btn btn-default">Login</button>
         </form>
         <h2>Registration</h2>
	  	<form class="form-group">
		    <label for="exampleInputName2">First Name</label>
		    <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
		    <label for="exampleInputName2">Last Name</label>
		    <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" plsaceholder="Enter email">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		    <label for="exampleInputPassword1">Password Confirm</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		    <button type="submit" class="btn btn-default">Register</button>
	  	</form>
		</div>
		<div id="footer" class="row">
			<div class="site, col-md-12"></div>	
		</div>
	</div> <!-- container -->
</body>
</html>