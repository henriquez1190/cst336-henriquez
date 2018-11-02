<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <?php
        $firstName = "Hector";
        $lastName = "Enriquez";
        $fullName = $firstName . " " .$lastName;
        echo "<div>$fullName</div>";
        ?>
        
        <?php
        $n = 20943;
        $n = number_format($n,2); 
        echo $n  . "<br><br>";

        $n = rand(5,15);   
        echo $n  . "<br><br>";

        $n = "hElLo WoRlD!";
        echo strtoupper($n)  .  "<br><br>";
        ?>

    </head>
    <body>

    </body>
</html>