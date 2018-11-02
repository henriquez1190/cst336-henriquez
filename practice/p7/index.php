<?php
    include "database.php";
    $dbConn = getDatabaseConnection("c9");
    function db(){
        global $dbConn;
        
        //$namedParameters() = array();
        if($_GET['order'] == "A"){
            $sql = "SELECT * FROM p1_quotes WHERE quote LIKE '%" . $_GET['keyword']."%' AND category = '" .$_GET['category']. "' ORDER BY quote ASC";
        }
      else if($_GET['order'] == "Z"){
                        $sql = "SELECT * FROM p1_quotes WHERE quote LIKE '%" . $_GET['keyword']."%' AND category = '" .$_GET['category']. "' ORDER BY quote DESC";

        }
        else{
        $sql = "SELECT * FROM p1_quotes WHERE quote LIKE '%" . $_GET['keyword']. "%' AND category = '" .$_GET['category']."'";
        }
        $stmt = $dbConn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($records as $record){
            echo $record['quote'];
            echo "<br>";
        }
    }
    
    function displayCategories() {
        global $dbConn;
        $sql = "SELECT DISTINCT category FROM p1_quotes";
        $stmt = $dbConn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($records as $record){
           echo "<option value = '".$record['category']."'>" .$record["category"] ."</option>";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Quote Finder </title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <style>
            
            body {
                text-align: center;
                font-size: 2em;
            }
        
        
        </style>
    </head>
    <body>
        <div class="jumbotron">
            <h1> Famous Quote Finder </h1>
        </div>
        <form>
            Enter Quote Keyword
            <input type="text" name="keyword" >
            <br>
            <br>
            Category:
            <select name = "category">
                <option value="">Select one</option>
                <?php
                
                displayCategories();
                ?>
                
                
            </select>
            
            <!--<select name="category">
                <option value> Select One</option>
                <option>Humor</option>
                <option>Life</option>
                <option>Motivation</option>
                <option>Philosophy</option>
                <option>Reflection</option>
            </select>
        
            -->
            <br>
            <br>
            Order
            <br>
            <input type = "radio" name = "order" value = "A"> A-Z
            <br>
            <input type = "radio" name = "order" value = "Z"> Z-A
            <br>
            <br>
            <input type="submit" value="Display Quotes!">
        </form>
        <?php
        db();
        ?>
    </body>
</html>