<html>
<head>
	<title>Courses</title>
	<style type="text/css">
		thead {
			font-weight: bold;
		}

		td {
			border: 1px solid silver;
			padding: 5px;
		}
		#courses {
			margin-top: 60px;

		}
	</style>
</head>
<body>
	<div>
		<form action='courses/add' method='post'>
		Add a new course:<input type='text' name='course'>
		Description:<input type='textarea' name='description'>
		<input type='submit' name='add'>
		</form>
	</div>
	<div id='courses'>
		<p>Courses</p>
		<table>
			<thead>
				<tr>
					<td>Course Name</td>
					<td>Description</td>
					<td>Date Added</td>
					<td>Actions</td>
				</tr>
			</thead>
			<tbody>
<?php	
			foreach($courses as $course)
			{
				echo "<tr>";
				echo "<td> ". $course['name'] . " </td>" ;
				echo "<td> ". $course['description'] . " </td>" ;
				echo "<td> ". $course['created_at'] . " </td>" ;
				echo "<td><a href='/courses/destroy/".$course['id']."'>Delete</a></td>";
				echo "</tr>";
			}
?>
			</tbody>
		</table>
	</div>
</body>
</html>	