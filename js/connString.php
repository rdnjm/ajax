<?php
	$link = mysqli_connect('128.199.83.62', 'user', 'ici', 'employeemasterfile') or die(mysqli_error($link));

		$empNum = $_POST['empNum'];

		$query = "SELECT FirstName, LastName FROM employee WHERE empNum LIKE '%" . $empNum . "%'" or die(mysqli_error());
		$result = $link->query($query);
		while($rows = mysqli_fetch_array($result)){
			echo 
				"
				<table border='1'>
				<tr>
					<td>" . $rows[0] . "</td>
					<td>" . $rows[1] . "</td>
				</tr>
				</table>";
		}
?>