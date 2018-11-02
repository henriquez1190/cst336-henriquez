<?php

session_start();

$pas = array();
array_push($pas, ( $_SESSION['number']));

echo  $_SESSION['number']

?>
<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <style>
        	main, #output {
        		text-align:center;
        		width:800px;
        		border-radius:20px;
        		margin: 0 auto;
        	}
        	main {
        		 background-color: lightpink;
        	}
        
        </style>
    </head>
    <body>
        <main>
            <form action="index.php" method="post">
                <h1>
                    Custom Password Generator
                </h1>
                How many passwords? 
                <input type="text" name="number" size="2"> (No more than 8)
                <br>
                <br>
                <strong>Password Length</strong>
                <br>
                <input type="radio" name="length" value="6" id="six" >
                <label for="six"> 6 Characters</label>
                
                <input type="radio" name="length" value="8" id="eight" >
                <label for="eight"> 8 Characters</label>
                
                <input type="radio" name="length" value="10" id="ten" >
                <label for="ten"> 10 Characters</label>
                <br>
                <br>
                <input type="checkbox" name="include" > Include digits (up to 3 digits will be part of the password)
                <br>
                <br>
                <input type="submit" value="Create Passwords!">
                <br>
                <br>
                <br>
                <input type="submit" value="Display Password History">
                <br>
                <br>
                
            </form>
        </main>
    </body>
</html>