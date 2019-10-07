<?php



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<h3>Students          aaaaaaa</h3>
	<a href="/create-student.php">Add Student</a>

<table>
	<thead>
		

	</thead>
	<tbody>

		<?php foreach ($students as $student): ?>

			<tr>
				<td> <?=$student -> first_name ?></td>

				







			</tr>
	

	</tbody>

</table>




</body>
</html>