<!DOCTYPE html>
<html>
    <head>
        <title> Dinner Selector </title>
    </head>
    <body>
        <main>
            <fieldset>
                <legend>Dining out or eating in:</legend>
                <form>
                    <input id="in" type="radio" name="diningIn" value="in">
                    <label for="diningIn">Eating in</label>
                    
                    <input id="out" type="radio" name="diningOut" value="out">
                    <label for="diningOut">Dining out</label>
                    
                    <input id="idk" type="radio" name="surpriseMe" value="random">
                    <label for="surpriseMe">Suprise me!</label>
                    
                </form>
                
            </fieldset>
            <fieldset>
                <legend>Pick a food group:</legend>
                <form>
                    <main>
            <form action="index.php" method="post">
                
                <input type="text" name="number" size="2"> (No more than 8)
                <br>
                <br>
                <strong>Password Length</strong>
                <br>
                <input type="radio" name="group" value="beef" id="beef" >
                <label for="beef">Beef</label>
                
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
            </fieldset>
        </main>
    </body>
</html>