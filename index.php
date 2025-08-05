<!DOCTYPE html>
<html>
<head>
	<title>Student Information App</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="container">
		<div>
			<div class="header">
			Student's Information App</div>
				<form action="add_data.php" method="post">
					<label for="Roll No">Roll No:</label><br>
					<input type="text" name="Roll" id="Roll"><br>
					<label for="Name">Name:</label><br>
					<input type="text" name="Name" id="name"><br>
					<label for="Address">Address:</label><br>
					<input type="text" name="Address" id="Address"><br>
					<label for="Gender">Gender:</label><br>
					<input type="text" name="Gender" id="Gender"><br>
					<label for="Class">Class:</label><br>
					<input type="text" name="Class" id="Class"><br>
					<label for="Faculty">Faculty:</label><br>
					<input type="text" name="Faculty" id="Faculty"><br>
					<label for="Mobile No">Mobile No:</label><br>
					<input type="text" name="Mobile" id="Mobile"><br>
					<input type="submit" value="Save">
				</form>
		</div>
	</div>
</body>
</html>