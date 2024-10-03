<html>
    <body>
	    <h1 align="center">BIO DATA</h1>
		<form action="" method="post">
		Name:<input type="text" name="name"/><br>
		Date of Birth: <input type="text" name="dob"/><br>
		Gender:<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="female">Female<br>
		Educational qualification:<select name="qualification">
		<option value="Plus Two">Plus Two</option>
		<option value="UG">Degree</option>
		<option value="PG">PG</option>
		</select><br>
		
		Name of father: <input type="text" name="fname"/><br>
		Name of mother: <input type="text" name="mname"/><br>
		Phone Number:<input type="number" name="phone"><br>
		<input type="submit" value="Submit"/><br>
		</form>
		
	</body>
</html>



<?php
if($_POST)
{
    $name=$_POST['name'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$qualification=$_POST['qualification'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$phone=$_POST['phone'];
	
	echo"<br><br><b>Personal Details<br>";
	echo "................................<br>";
	echo"Name:$name<br>";
	echo"Date of Birth:$dob<br>";
	echo"Gender: $gender<br>";
	echo"Qualification:$qualification<br>";
	echo"Name of father: $fname<br>";
	echo"Name of mother:$mname<br>";
	echo"Phone number:$phone<br><b>";
}
?>