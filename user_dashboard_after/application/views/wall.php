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
				
				$profile[] = '';
				// echo "<pre>";	
				// var_dump($profile);
				// echo "</pre>";
				for($i=0; $i<count($profile); $i++)
				{
					echo "message id:". $profile[$i]['message_id'];
					echo "<br>";
					echo "i=".$i;
					echo "<br>";
	    			for($j = $i; $j<count($profile); $j++)
					{
						echo "j=".$j;
						echo "<br>";

						if( !empty($profile[$j+1]['message_id']) &&  $profile[$j]['message_id']==$profile[$j+1]['message_id'])
						{
							echo "there is a comment here";
							echo "<br>";					
						}  
						else 
						{
							if( !empty($profile[$j+1]['message_id']) && $profile[$j]['message_id']==$profile[$j-1]['message_id'])
							{
								echo "display an additional comment?";
							}
						}

					}	
						echo "<br>";
						echo "i = ".$i;
						echo "<br>";
						echo "j = ".$j;
						echo "<br>";
						echo "i+j, i=". $i = $i+$j;	
						echo "<br>";
				}


				for($i=0; $i<count($profile); $i++)
				{
?>
					<div class='message'>
						<p>Message: <?= $profile[$i]['message'] ?></p>
						<p>Posted by: <?= $profile[$i]['message_from_first_name'] ?> <?= $profile[$i]['message_from_last_name'] ?>
						<p>Date Posted: <?= $profile[$i]['created_at'] ?>
					</div>
					<div>
					<!-- 	display comments if not empty -->
						<p>Message ID: <?= $profile[$i]['message_id'] ?></p>
						<?php
							if($profile[$i]['comment_message_id'] == $profile[$i+1]['comment_message_id'])
							{
								echo "there are multiple comments";
							}
						?>
						<p>Comment: <?= $profile[$i]['comment'] ?></p>
					</div>
					<form  action='/messages/comments/<?=$profile[0]['profile_id']?>' method='post'>
						<input type='hidden' name='msg_id' value='<?= $profile[$i]['message_id']?>'>
						<input type='hidden' name='comment_user_id' value='<?= $this->session->userdata('id') ?>'>
						<textarea rows='3' name='comment' placeholder='comment on this post'></textarea>
						<input type='submit' value='comment!'>
					</form>
<?php				
				}
?>
		</div>
	</div> <!-- container -->
</body>
</html>