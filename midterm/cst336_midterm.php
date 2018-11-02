<?php
function getDatabaseConnection() {
    $host = "localhost";
    $username = "henriquez1190";
    $password = "Zaraki11!@"; // best practice: define this in a separte file
    $dbname = "midterm2"; 
    
    // Create connection
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    return $dbConn; 
}

function displayQuote() {
    $dbConn = getDatabaseConnection(); 
    
    $sql = "SELECT * from q_quotes WHERE 1";  
    
    //echo "POST: "; 
    //print_r($_POST);
    echo "<br/>"; 
    
    //echo "sql: $sql <br/>"; 

    $statement = $dbConn->prepare($sql); 
    
    $statement->execute(); 
    $records = $statement->fetchAll(); 
    
    foreach ($records as $record) {
       echo  '<h1 class="text">' . $record["quote"] . '</h2>'; 
       echo  '<h2 class="author">' . $record["author"] . '</h2>'; 
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/styles.css">
        <title> </title>
    </head>
    <body>
        <?php displayQuote(); ?>
        <h1></h1>
        <h2></h2>
        <br>
        <br>
        <br>
        <a href="/work/midterm/create.php">Create</a>
    </body>
</html>