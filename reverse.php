<html>
    <body>
	    <form action="" method="post">
		Enter the string:<input type="text" name="str"/><br>
		<input type="submit" value="Reverse"/><br>
		</form>
	</body>
</html>

<?php
if($_POST)
{
    $str=$_POST['str'];
	reverse($str);
}
function reverse($str)
{
    $length=strlen($str);
	for($i=($length-1);$i>=0;$i--)
	{
	echo$str[$i];
	}
}
?>