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
		.message {
			border: 1px solid silver;
			padding: 10px;
		}
	</style>
</head>
<body>
	<?php $this->load->view('nav_after_login') ?>
	<div class='container'>
	<div id="heading">
<?php
	echo $profile[0]['first_name'];
	echo "<h2>".$profile[0]['first_name'].' '.$profile[0]['last_name']."</h2>";
	echo "<h4> Joined The Wall: ".$profile[0]['created_at']."</h4>";
	echo "<h4> User Id: ".$profile[0]['profile_id']."</h4>";
	echo "<h4> Email ".$profile[0]['email']."</h4>";
	echo "<h4> Description ".$profile[0]['description']."</h4>";
?>
		
		
		<h5>Leave a Message for <?= $profile[0]['first_name']; ?></h5>
		<form class="form-group" action="/messages/post_msg" method="post">
			<input type='hidden' name='message_from_id' value='<?= $this->session->userdata('id'); ?>'>
			<input type='hidden' name='user_id_profile' value='<?php echo $profile[0]['profile_id']; ?>'>
			<textarea class="form-control" rows="3" name='message'></textarea>
			<button type="submit" class="btn btn-default" >Submit</button>
		</form>
		<div>
<?php
				for($i=0; $i<count($profile); $i++)
				{
?>
					<div class='message'>
						<p>Message: <?= $profile[$i]['message'] ?></p>
						<p>Posted by: <?= $profile[$i]['message_from_first_name'] ?> <?= $profile[$i]['message_from_last_name'] ?>
						<p>Date Posted: <?= $profile[$i]['created_at'] ?>
					</div>
					<form class='form-control' action='/messages/comments' method='post'>
						<input type='hidden' name='msg_id' value='<?= $profile[$i]['message_id']?>'>
						<textarea class='form-control' rows='3'>this is a message</textarea>
						
					</form>
<?php				
				}
?>
		<!-- 	<textarea class="form-control" rows="3">this is a message</textarea>
			<textarea class="form-control" rows="3">this is a comment</textarea>
			<textarea class="form-control" rows="3">leave a comment</textarea>
			<button type="submit" class="btn btn-default" >Submit</button> -->
		</div>
	</div> <!-- container -->
</body>
</html>