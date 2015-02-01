<html>
<head>
	<title>Welcome</title>
</head>
<body>
	<h1>Welcome <?= $this->session->userdata('first_name') ?></h1>
	<div>
		<h3>User Information</h3>
		<p>First Name: <?= $this->session->userdata('first_name') ?></p>
		<p>Last Name: <?= $this->session->userdata('last_name') ?></p>
		<p>Email: <?= $this->session->userdata('email') ?></p>
	</div>
	<a href="/main/log_off">Log off</a>
</body>
</html>