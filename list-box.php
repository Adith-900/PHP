<html>
    <body>
        <form action="" method="POST">
            Choose Your Favorite Fruit
            <select name="f">
                <option value="">(Please Select)</option>
                <option value="Grape">Grape</option>
                <option value="Banana">Banana</option>
                <option value="Chicku">Chicku</option>
                <option value="Apple">Apple</option>
                <option value="Orange">Orange</option>
                <option value="Pine Apple">Pine Apple</option>
            </select>
            <input type="submit" value="SELECT">
        </form>
    </body>
</html>
<?php
if($_POST)
{
    echo "<h2> You have indicated that you like &nbsp;" .$_POST['f']."</h2>";
}
?>