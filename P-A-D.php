<html>
    <body>
	    <h3>Enter the Number</h3><br>
		<form action="" method="post">
		<input type="text" name="number"/>
		<input type="submit"/>
		</form>
	</body>
</html>

<?php
if($_POST)
{
    $no=$_POST['number'];
	$sum=0;
	for($i=1; $i<$no;$i++)
	{
	    if($no % $i==0)  
		$sum = $sum + $i;
	  
	}
	if($sum==$no)
    echo "Perfect Number";
	else if($sum>$no)
	echo "Abundant Number";
	else
	echo "Deficient Number";
	
}