<html>
    <body bgcolor="yellow">
        <h2>Last visited time on the webpage</h2>
        <br>
        <?php
        $intm=60*60*24*60 + time();
        setcookie('lastVisit', date("G:i - m/d/y"),$intm);
        if(isset($_COOKIE['lastVisit']))
        {
            $visit=$_COOKIE['lastVisit'];
            echo "Your last visit was- ".$visit;
        }

        else
        echo "You have got some state cookies!";
    ?>

    </body>
</html>