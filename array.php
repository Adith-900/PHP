<html>
    <body>
        <h2>Array Operations</h2>
        <form action="" method="post">
            <?php
            echo "<br><input type=radio name=arr value=dis>Display Array";
            echo "<br><input type=radio name=arr value=srt>Sorted Array";
            echo "<br><input type=radio name=arr value=usrt>Without Duplicate";
            echo "<br><input type=radio name=arr value=pop>Delet Last";
            echo "<br><input type=radio name=arr value=rev>Array Reverse";
            echo "<br><input type=radio name=arr value=rev>Array Search";
            echo "<br><input type=Submit>";
            $names=array("Raju","Kiran", "Basheer","Kumar", "Jhon" , "Shani","Athira", "Kiran", "Shivani");
            ?>           
        </form>
    </body>
</html>

<?php
if($_POST)
{
    $val=$_POST['arr'];
    switch($val)
    {
        case "dis": foreach($names as $value)
        echo "<br".$value;
        break;
        case "str": sort($names);
        foreach($names as $value)
        echo "<br>".$value;
        break;
        case "usrt": $uarray=array_unique($names);
        foreach($uarray as $value)
        echo "<br>".$value;
        break;
        case "pop": array_pop($names);
        foreach($names as $value)
        echo "<br>".$value;
        break;
        case "rev": $revarr=array_reverse($names);
        foreach($revarr as $value)
        echo "<br>".$value;
        break;

        case "sear": echo"<br>".array_search("Jhon",$names,true);
        break;

    }
}
?>