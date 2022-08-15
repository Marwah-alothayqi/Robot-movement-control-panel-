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
