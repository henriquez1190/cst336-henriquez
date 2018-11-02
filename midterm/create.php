<?php

function createQuote($text, $author) {

    // construct the proper SQL INSERT statement
    $dbConn = getDatabaseConnection(); 

    $sql = "INSERT INTO `q_quotes` (`quoteid`, `quote`, `author`) VALUES (NULL, '$text', '$author')"; 
    
    $statement = $dbConn->prepare($sql); 
    $result = $statement->execute(); 
    
    if (!$result) {
      return null; 
    }
    
    $last_id = $dbConn->lastInsertId();

    
    // fetch the newly created object from database
    
    $sql = "SELECT * from q_quotes WHERE id = $last_id"; 
    $statement = $dbConn->prepare($sql); 
    
    $statement->execute(); 
    $records = $statement->fetchAll(); 
    $newQuote = $records[0]; 
    
    return $newQuote; 
    
}
if (isset($_POST['text']) && isset($_POST['author'])) {
  $quoteObj = createQuote($_POST['text'], $_POST['author']); 
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/styles.css">
        <title> </title>
    </head>
    <body>
        <h1> Create a new quote: </h1>
        <form method ="post" action="cst336_midterm.php">
        Text:
        <input type="text" name="text" > <!-- this is supposed to create a new quote but i can't get it to work
                                            or at least I don't think it's working right-->
        <br>
        <br>
        Author:
        <input type="text" name="author">
        <br>
        <br>
        
        <input name="create-quote" type="submit">
        </form>
    </body>
</html>