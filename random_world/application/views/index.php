<html>
<head>
	<title>Random World</title>
	<style type="text/css">
	#container {
		margin: 0 auto;
		margin-left: 450px;
	}

	.box {
		border: 5px solid silver;
		height: 100px;
		width: 400px;
		margin-bottom: 20px
	}
	.submit {
		padding-left: 20px;
	}
	</style>
</head>
<body>
	<div id='container'>
		<h1>Random Word (attempt #<?= $counter; ?>) </h1>
		<div class='box'><?= $rand_num; ?></div>
		<form action='/main/random_gen' method='post'>
			<input class='submit' type='submit' value='Generate'>
		</form>
	</div>
</body>
</html>