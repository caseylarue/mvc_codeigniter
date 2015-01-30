<html>
<head>
	<title>Survey</title>
</head>
<body>
	<form action='/surveys/process_form' method='post'>
		Your Name: <input type='text' name='name'>
		Dojo Location: 
		<select name='location'>
			<option value='san_jose'>San Jose</option>
			<option value='seattle'>Seattle</option>
			<option value='los_angeles'>Los Angeles</option>
		</select>
		Favorite Language: 
		<select name='language'>
			<option value='javascript'>Javascript</option>
			<option value='php'>PHP</option>
			<option value='node'>Node</option>
		</select>
		Comment
		<textarea name='comment'></textarea>
		<input type='submit' value='submit'>
	</form>
</body>
</html>