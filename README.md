# Robot-movement-control-panel-

### The main idea of project:
It's a webpage has five buttons which is (forward,backward,stop,left,right) to control the movement of robot ,when each button has been pressed it will go to another page and display a character like(f,b,s,l,r) and send it to the database to store it to be able to retrive when its neccesary.

### HTML code :
```
<!DOCTYPE html>
<html>
<Style>

body  {
background-image: url("logo.png");
background-repeat: no-repeat, repeat;
background-position: center;
}
p{
	color: black;
	font-size: 30px;
    text-align: center;
	margin-top:300px;
	margin-bottom: 50px;
    margin-left: auto;
    margin-right: auto;
	
}

form.form-top input {
  display: block;
   width: 100px;
   padding: 10px;
   border-radius: 12px;
   cursor: pointer;
   background-color: white;
   margin-bottom: 30px;
  margin-left: auto;
  margin-right: auto;
  transition-duration: 0.4s;
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
}
form.form-top input:hover{
  background-color: #e7e7e7;
}


form.form-centar input {
  display: block;
   width: 100px;
   padding: 10px;
   border-radius: 12px;
   cursor: pointer;
   background-color: white;
  margin-bottom: 30px;
  margin-left: auto;
  margin-right: auto;
  transition-duration: 0.4s;
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
}
form.form-centar input:hover{
  background-color: #e7e7e7;

}



form.form-bottom input {
  display: block;
  width: 100px;
   padding: 10px;
   border-radius: 12px;
   cursor: pointer;
   background-color: white;
   margin-bottom: 25px;
  margin-left: auto;
  margin-right: auto;
 transition-duration: 0.4s;
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
}
form.form-bottom input:hover{
  background-color: #e7e7e7;
}


form.form-right input {
  display: block;
  width: 100px;
   padding: 10px;
   border-radius: 12px;
   cursor: pointer;
   background-color: white;
  margin-left: auto;
  margin-right: 500px;
  margin-top:-132px;
 transition-duration: 0.4s;
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
}
form.form-right input:hover{
  background-color: #e7e7e7;
}

form.form-left input {
  display: block;
  width: 100px;
   padding: 10px;
   border-radius: 12px;
   cursor: pointer;
   background-color: white;
  margin-left: 500px;
  margin-right: auto;
  margin-top:-43px;
transition-duration: 0.4s;
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
}
form.form-left input:hover{
  background-color: #e7e7e7;
}

</Style>
<body>

<p> Robot movement control panel </p>


<form class="form-top"  action="cp1.php" method="GET">
  <input type="submit"   name="Forward" value="Forward"/>
</form>

	
	
<form class="form-centar" action="cp1.php" method="GET">
  <input type="submit" name="Stop" value="Stop" /> 
</form>



<form  class="form-bottom" action="cp1.php" method="GET">
  <input type="submit" name="Backward" value="Backward"/> 
</form>



<form class="form-right" action="cp1.php" method="GET">
  <input type="submit" name="Right" value="Right"/> 
</form>

	
<form class="form-left" action="cp1.php" method="GET">
  <input type="submit" name="Left" value="Left"/> 
</form>
<body>
<html>
```
* This code is responsible for make the five buttons and design them to appear  as a circle  by css.
* each button is represented as input of submit type in a form with get method and action to move to php page.

### PHP code to insert to database:
```
<?php
$host = "localhost";
$username = "root";
$password = "";

try 
{
    $conn = new PDO("mysql:host=$host;dbname=cp_db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 //echo "Connection successful ";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

if(isset($_GET['Forward']))
{
	echo "F";
	$sql = "INSERT INTO cp(value) VALUES('F')";
	$conn->query($sql);
}


else if(isset($_GET['Stop']))
{
	echo "S";
	$sql = "INSERT INTO cp(value) VALUES('S')";
	$conn->query($sql);
}

else if(isset($_GET['Backward']))
{
	echo "B";
	$sql = "INSERT INTO cp(value) VALUES('B')";
	$conn->query($sql);
}

else if(isset($_GET['Right']))
{
	echo "R";
	$sql = "INSERT INTO cp(value) VALUES('R')";
	$conn->query($sql);
}

else if(isset($_GET['Left']))
{
	echo "L";
	$sql = "INSERT INTO cp(value) VALUES('L')";
	$conn->query($sql);
}

?>
```
* This code is responsible for displaying the desired character when button pressed. 
* Then it's insert that character to database table
# To insert data to database table you need to :
* create database and table in database 
* make a connection to database before inserting data 
* sql query to insert data 

### PHP code to display data from database in table:
```
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
```
*This code is responsible for display database data in table this is done by make a connection with database then use the select query to fetch data and the html is to make a table .

### Result
1. HTML page
![Screenshot (1101)](https://user-images.githubusercontent.com/108452991/184704751-9fe2ab58-a166-4867-8b3c-bf15813e205e.png)

2. PHP page
 ![Screenshot (1102)](https://user-images.githubusercontent.com/108452991/184704928-b6a4f393-a847-4091-94c6-a673363d69ce.png)

3. Database
![Screenshot (1103)](https://user-images.githubusercontent.com/108452991/184705080-d189d16c-463e-4304-a2a5-b904c4e393f6.png)

4. Database table page 
![Screenshot (1104)](https://user-images.githubusercontent.com/108452991/184705246-8cd3dcdb-61de-4ec2-bfb7-5102bc1c21e3.png)



