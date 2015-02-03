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
		<h1>Dashboard</h1>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>id</th>
					<th>name</th>
					<th>email</th>
					<th>created_at</th>
					<th>user_level</th>
				</tr>
			</thead>
			<tbody>
			<?php
				foreach ($users as $user)
				{	
					echo '<tr>';
					echo '<td>'.$user['id'].'</td>';
					echo '<td><a href="/main/wall/'.$user['id'].'">'.$user['first_name'].' '.$user['last_name'].'</a></td>';
					// echo '<td>'.$user['first_name'].' '.$user['last_name'].'</td>';
					echo '<td>'.$user['email'].'</td>';
					echo '<td>'.$user['created_at'].'</td>';
					echo '<td>'.$user['user_access'].'</td>';
					echo '</tr>';
				}
			?>
			</tbody>
		</table>
		<div id="footer" class="row">
			<div class="site, col-md-12"></div>	
		</div>
	</div> <!-- container -->
</body>
</html>