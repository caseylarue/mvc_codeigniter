<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>The Wall</title>
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
	foreach($profile as $about)
	{
		echo "<h2>".$about['first_name'].' '.$about['last_name']."</h2>";
		echo "<h4> Joined The Wall: ".$about['created_at']."</h4>";
		echo "<h4> User Id: ".$about['id']."</h4>";
		echo "<h4> Email ".$about['email']."</h4>";
		echo "<h4> Description ".$about['description']."</h4>";

	}
?>
		
		
		<h5>Leave a Message for <?= $about['first_name']; ?></h5>
		<form class="form-group" action="/messages/post_msg" method="post">
			<input type='hidden' name='created_by_user_id' value='<?= $this->session->userdata('id'); ?>'>
			<input type='hidden' name='message_to_user_id' value='<?php echo $about['id']; ?>'>
			<textarea class="form-control" rows="3" name='message'></textarea>
			<button type="submit" class="btn btn-default" >Submit</button>
		</form>
		<form>
			<div class="form-group">
				<textarea class="form-control" rows="3">this is a message</textarea>
				<textarea class="form-control" rows="3">this is a comment</textarea>
				<textarea class="form-control" rows="3">leave a comment</textarea>
				<button type="submit" class="btn btn-default" >Submit</button>
			</div>
		</form>
	</div> <!-- container -->
</body>
</html>