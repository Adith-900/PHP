<?php
    if($_REQUEST["name"] || $_REQUEST["age"] ){
	    echo "Welcome". $_REQUEST['name']."<br/>";
		echo "You are ". $_REQUEST['age']. "years old.";
		exit();
	}
?>

<html>
    <body>
	    <form action="<?php $_PHP_SELF ?>" method="POST">
		Name: &nbsp;<input type="text" name="name"/><br/><br/>
		Age: &nbsp;&nbsp;&nbsp; <input type="text" name="age"/><br><br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" />
		</form>
	</body>
</html>