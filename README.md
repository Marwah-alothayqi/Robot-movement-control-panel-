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
*This code is responsible for displaying the desired character when button pressed. 
*Then it's insert that character to database table
# To insert data to database table you need to :
*create database and table in database 
*make a connection to database before inserting data 
*sql query to insert data 

