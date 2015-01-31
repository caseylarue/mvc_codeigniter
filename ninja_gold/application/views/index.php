<html>
<head>
	<title>Ninja Gold</title>
	<style type="text/css">
		#container {
			margin: 0px auto;
			width: 970px;
			height: 1000px;
			margin-top: 40px;
		}
		.total_gold {
			border: 1px solid black;
			width: 100px;
			height: 25px;
			text-align: center;
			padding-top: 5px;
		}
		#find_gold {
			width: 970px;
			height: 200px;
		}
		.gold_gen {
			display: inline-block;
			vertical-align: top;
			border: 1px solid silver;
			width: 175px;
			height: 150px;
			text-align: center;
		}
	</style>
</head>
<body>
	<div id='container'>
		<div>
			Your Gold: <p class='total_gold'><?= $total_gold; ?></p>
		</div>
		<div id='find_gold'>
			<div class='gold_gen'>
				<p>Farm</p>
				<p>(earns 10-20 golds)</p>
				<form action='/main/process_money' method='post'>
					<input type='hidden' name='farm'>
					<input type='submit' name='submit' value='Find Gold!'>
				</form>
			</div>
			<div class='gold_gen'>
				<p>Cave</p>
				<p>(earns 5-10 golds)</p>
				<form action='/main/process_money' method='post'>
					<input type='hidden' name='cave'>
					<input type='submit' name='submit' value='Find Gold!'>
				</form>
			</div>
			<div class='gold_gen'>
				<p>House</p>
				<p>(earns 2-5 golds)</p>
				<form action='/main/process_money' method='post'>
					<input type='hidden' name='house'>
					<input type='submit' name='submit' value='Find Gold!'>
				</form>
			</div>
			<div class='gold_gen'>
				<p>Casino</p>
				<p>(earns/takes 50 golds)</p>
				<form action='/main/process_money' method='post'>
					<input type='hidden' name='casino'>
					<input type='submit' name='submit' value='Find Gold!'>
				</form>
			</div>
		</div> <!--  close find gold selection div -->
		<div>
			<?php 
			foreach($activity as $key => $value)
			{
			 echo 'Random Number'.$value['rand_num'].' Button: '.$value['button'].' Date: '.$value['date'].'<br>';
			}
		?>
		</div>
	</div> <!-- close of container -->
</body>
</html>