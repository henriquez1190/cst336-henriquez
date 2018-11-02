<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        
        
    </head>
    <body>
        <?php
        for ($i=0; $i<9; $i++) {
        $num = rand(0,10);
        echo "<table>
            <tr> 
                <td>$num</td> 
            </tr> 
        </table>";
        
        }
        ?>
    </body>
</html>