
<?php
$user = 'root';
$password = '';
// Database name 
$database = 'cp_db';
// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
                $password, $database);

// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 

// SQL query to select data from database and ordered by id DESC
$sql = " SELECT * FROM cp ORDER BY ID DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML & css code to display data in table and design it -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Control panel values</title>
	<!-- CSS start here -->
	<style>
		table {
			margin:auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: black;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #e7e7e7;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		<h1>Control panel values</h1>
		<table>
			<tr>
				<th>ID</th>
				<th>Value</th>
				
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['ID'];?></td>
				<td><?php echo $rows['value'];?></td>
				
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>



