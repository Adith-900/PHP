<?php 
    echo strlen("Entha mone parubaadi!");
?>
<br/><br>
<?php 
    echo strpos("Entha mone parubaadi!" , "mone");
?>	
<br/><br>
<?php 
    $email='siddharth@yaHoo.com';
	$domain_name=strstr($email, 'H');
	echo $domain_name;
?>	
<br/><br>
<?php
    echo strcmp("Hello World!", "Hello World!"). "<br>";
	echo strcmp("Hello World!", "hello world!"). "<br>";
	echo strcmp("hello World!", "Hello World!"). "<br>";
?>
<br/><br>
<?php
    echo substr("Hello World",6)."<br>";
	echo substr("Hello World",10)."<br>";
	echo substr("Hello World",3)."<br>";
	echo substr("Hello World",-8)."<br>";
	echo substr("Hello World, Welcome to the world of coding",18)."<br>";
?>
<br/><br/>
<?php
    echo substr_replace("Hello World", "Earth", 6);
?>
<br/><br/>

<?php
    echo strtolower("HelLo WoRlD");
?>
<br/></br>
<?php
    echo strtoupper("HelLo WoRlD");
?>
<br/></br>
<?php
    $str="geeks";
	echo strrev($str);
?>
<br/></br>
<?php
    echo ucfirst("hello world, How are you");
?>
<br/></br>
<?php
    echo ucwords("helLo World, how are you");
?>

	