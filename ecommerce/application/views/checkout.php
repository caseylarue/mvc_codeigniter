<html>
<head>
	<title>Check Out</title>
	<style type="text/css">
		table {
			font-size: 20px;
		}

		tbody td {
			border: 1px solid silver;
			width: 120px;
			padding: 10px;
		}
		button	{
			font-size: 20px;
			padding: 5px;
			margin-left: 20px;
			margin-top: 20px;
		}
		#checkout input, button {
			display: block;
			margin: 10px;
		}
	</style>
</head>
<body>
	<h1>Check Out</h1>
	<table>
		<thead>
			<td>Qty</td>
			<td>Description</td>
			<td>Price</td>
		</thead>
		<tbody>
<?php
		foreach($items as $item)
		{
			echo "<tr>";
			echo "<td> ". $item['total_qty'] ." </td>";
			echo "<td> ". $item['description'] ." </td>";
			echo "<td> ". $item['total_amt'] ." </td>";
			echo "<td><a href='/main/delete_item/".$item['id']."'>Delete</a></td>";
			echo "</tr>";
		}
?>
		</tbody>
	</table>
	<h3>Billing Info</h3>
	<form id='checkout' action='order' method='post'>
		<input type='hidden' name='billing_info'>
		Name: <input type='text' name='name'>
		Address: <input type='text' name='address'>
		Card #: <input type='text' name='address'>
		<button type='submit' value='submit'>Buy!</button>
	</form>
</body>
</html>