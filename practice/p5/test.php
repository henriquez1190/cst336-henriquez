<?php
    if(isset($_POST['number'])){
        $_POST['number'];
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <form action="test.php" method="post">
            How many passwords? 
            <input type="text" name="number" size="2"> (No more than 8)
                       
        </form>
    </body>
</html>