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
		.comment {
			border: 1px solid silver;
			margin-left: 10px;
		}
	</style>
</head>
<body>
	<?php $this->load->view('nav_after_login') ?>
	<div class='container'>
	<div id="heading">
<?php
	echo "<h2>".$user['first_name'].' '.$user['last_name']."</h2>";
	echo "<h4> User Id: ".$user['id']."</h4>";
	echo "<h4> Email ".$user['email']."</h4>";
	echo "<h4> Description ".$user['description']."</h4>";
?>
			
	<h5>Leave a Message for <?= $user['first_name']; ?></h5>
		<form class="form-group" action="/messages/post_msg" method="post">
			<input type='hidden' name='message_from_id' value='<?= $this->session->userdata('id'); ?>'>
			<input type='hidden' name='user_id_profile' value='<?= $user['id']; ?>'>
			<textarea class="form-control" rows="3" name='message'></textarea>
			<button type="submit" class="btn btn-default" >Submit</button>
		</form>

<?php
			foreach ($messages as $message)
			{
?>
				<div>
				<p>Message: <?= $message['message'] ?></p>
				<p>From: <?= $message['message_from_first_name']." ".$message['message_from_last_name']." ".$message['created_at']  ?></p>
<?php
				foreach($comments as $comment)
				{
					if($comment['comment_message_id']== $message['message_id'])
					{
?>	
						<div class='comment'>	
						<p><?= $comment['comments']?></p>
						<p><?= $comment['comment_first_name']." ".$comment['comment_last_name']." ".$comment['comment_created_at'] ?></p>
						</div>
<?php
					}
				}
?>
				<form class="form-group" action="/messages/comments/<?= $message['profile_id'] ?>" method="post">
					<input type='hidden' name='comment_user_id' value='<?= $this->session->userdata('id'); ?>'>
					<input type='hidden' name='msg_id' value='<?= $message['message_id']; ?>'>
					<textarea class="form-control" rows="3" name='comment'></textarea>
					<button type="submit" class="btn btn-default" >Comment on this post!</button>
				</form>
				</div>
<?php
			}
?>

	</div> <!-- container -->
</body>
</html>