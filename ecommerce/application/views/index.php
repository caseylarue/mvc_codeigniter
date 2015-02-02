<html>
<head>
	<title>Ecommerce</title>
	<style type="text/css">
		#container {
			width: 970px;
/*			height: 1200px;*/
			margin: 0px auto;
		}
		#nav {
			width: 970px;
			height: 200px;
		}
		#nav h1, h2{
			display: inline-block;
			vertical-align: top;
		}
		h2 {
			margin-left: 300px;
		}
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
	</style>
</head>
<body>
	<div id='container'>
		<div id='nav'>
			<h1>Products</h1>
			<h2>Your Cart <a href="#">#</a></h2>
		</div>
		<table>
			<thead>
				<td>Description</td>
				<td>Price</td>
				<td>Qty</td>
			</thead>
			<tbody>
				<tr> <!-- new item -->
					<td>Dojo Shirt</td>
					<td>$19.00</td>
						<form action='/main/cart' method='post'>
							<input type='hidden' name='product_id' value='1'>
					<td>
							<select name='qty'>Qty
								<option value='1'>1</option>
								<option value='2'>2</option>
								<option value='3'>3</option>
							</select>
					</td>
					<td>
							<input type='submit' name='submit' value='Buy'>
					</td>
						</form>
					</td>
				</tr>
	<!-- 			<tr> 
					<td>Dojo Cup</td>
					<td>$29.00</td>
					<td>
						<select name='2' form='cart'>Qty
							<option>1</option>
							<option>2</option>
							<option>3</option>
						</select>
					</td>
					<td>
						<form form='cart' action='/main/purchase' method='post'>
							<input type='hidden' name='2'>
							<button type='submit' value='buy'>Buy</button>
						</form>
					</td>
				</tr> -->
			</tbody>
		</table>
	</div>
</body>
</html>