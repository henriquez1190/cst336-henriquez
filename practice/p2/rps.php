<!DOCTYPE html>
<html>

<head>
    <title> RPS </title>
    <style type="text/css">
        body {
            background-color: black;
            color: white;
            text-align: center;
        }

        .row {
            display: flex;
            justify-content: center;
        }

        .col {
            text-align: center;
            margin: 0 70px;
        }

        .matchWinner {
            background-color: yellow;
            margin: 0 70px;
        }

        #finalWinner {
            margin: 0 auto;
            width: 500px;
            text-align: center;
        }
        
        hr {
            width:33%;
        }        
    </style>
</head>

<body>
    
    <h1> Rock, Paper, Scissors </h1>
    <!--
    <div class="row">
        <div class="col">
            <h2>Player 1</h2>
        </div>
        <div class="col">
            <h2>Player 2</h2>
        </div>
    </div>
    
    <div class="row">
        <div class='col'><img src='/work/practice/p2/rps/scissors.png' alt='scissors' width='150'></div>
        <div class='col, matchWinner'><img src='/work/practice/p2/rps/rock.png' alt='rock' width='150'></div>
    </div>
    <hr>

    <div class="row">
        <div class='col'><img src='/work/practice/p2/rps/rock.png' alt='rock' width='150'></div>
        <div class='col, matchWinner'><img src='/work/practice/p2/rps/paper.png' alt='paper' width='150'></div>
    </div>
    <hr>
    
    <div class="row">
        <div class='col, matchWinner'><img src='/work/practice/p2/rps/paper.png' alt='paper' width='150'></div>
        <div class='col'><img src='/work/practice/p2/rps/rock.png' alt='rock' width='150'></div>
    </div>
    <hr>

    <div id="finalWinner">

        <h1>The winner is Player 2</h1>

    </div>
    
    Images source: https://www.kisspng.com/png-rockpaperscissors-game-money-4410819/ -->
    
    <?php
    
    $rock = 0;
    $paper = 1;
    $scis = 2;
    
    $randVal = rand(0,2);
    
    
    function rps($value) {
        for($i; $i<1; $i++){
            if($value == 0){
                echo '<img src= "/work/practice/p2/rps/rock.png" alt="rock" title="Rock" width= "150" />';
            } else if ($value == 1) {
                echo '<img src= "/work/practice/p2/rps/paper.png" alt="paper" title="Paper" width= "150" />';
            } else {
                echo '<img src= "/work/practice/p2/rps/scissors.png" alt="scissors" title="Scissors" width= "150" />';
            }
        }//for
        
     
    }//rps()
    rps($rock);
    rps($scis);
    rps($paper);
    ?>
</body>

</html>
