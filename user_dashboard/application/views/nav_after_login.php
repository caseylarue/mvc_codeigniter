<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Nav</title>
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
		.container {
			width: 970px;
			height: 100px;
			background-color: #7FFFD4;
		}
		h1, h4 {
			display: inline-block;
			vertical-align: top;
			margin: 25px;
		}
		h4 {
			margin-left: 100px;
		}
	</style>
</head>
<body>
	<!-- header/ navigation -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class='container'>
			<h1>The Wall</h1>
			<h4><a href="/main/dashboard">Dashboard</a></h4>
			<h4><a href="/main/profile">Profile<a></h4>
			<h4><a href="/main/index">Log Off<a></h4>
		</div> <!-- container -->
	</nav>	
</body>
</html>