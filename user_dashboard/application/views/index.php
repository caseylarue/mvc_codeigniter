<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home</title>
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
			<h1>Welcome to the greatest website ever!</h1>
			<h3>Well, maybe not the greatest but awesome practice!</h3>
			<form action="/login" method="post">
				<button type="submit" class="btn btn-default">Start</button>
			</form>
		</div>
		<div id="footer" class="row">
			<div class="site, col-md-4">
				<h4><a href='/login'>Manage Users</a></h4>
				<p>Using the application you can add, remove, and edit users to the application</p>
			</div>
			<div class="site, col-md-4">
				<h4><a href='/login'>Leave Messages</a></h4>
				<p>Users can leave each other messages</p>
			</div>
			<div class="site, col-md-4">
				<h4><a herf='/login'>Edit User Info</a></h4>
				<p>Admins will be able to edit another users info</p>
			</div>
		</div>
	</div> <!-- container -->
</body>
</html>