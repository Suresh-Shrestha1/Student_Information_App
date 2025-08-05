<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <table>
		<tr>
			<th>Roll No</th>
			<th>Name</th>
			<th>Address</th>
			<th>Gender</th>
			<th>Class</th>
			<th>Faculty</th>
			<th>Mobile No</th>
			<th>Mobile No</th>
		</tr>
		<?php
		include 'db.php';
		$sql1="Select *FROM info";
		$result1=mysqli_query($conn,$sql1);
		if($result1)
		{
			while($row=mysqli_fetch_assoc($result1))
			{
				$roll1=$row['Roll'];
				$name1=$row['Name'];
				$address1=$row['Address'];
				$gender1=$row['Gender'];
				$class1=$row['Class'];
				$faculty1=$row['Faculty'];
				$mobile1=$row['Mobile'];
				?>
				<tr>
					<td><?php echo $roll1; ?></td>
					<td><?php echo $name1; ?></td>
					<td><?php echo $address1; ?></td>
					<td><?php echo $gender1; ?></td>
					<td><?php echo $class1; ?></td>
					<td><?php echo $faculty1; ?></td>
					<td><?php echo $mobile1; ?></td>
					<td><a href="delete.php?Roll=<?php echo $roll1; ?>" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
</td>
				</tr>
				<?php
			}
		}
		?>
	</table>
</body>
</html>