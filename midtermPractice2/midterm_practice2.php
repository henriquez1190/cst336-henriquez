<?php

// connect to our mysql database server

function getDatabaseConnection() {
    $host = "localhost";
    $username = "henriquez1190";
    $password = "Zaraki11!@"; // best practice: define this in a separte file
    $dbname = "midterm"; 
    
    // Create connection
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $dbConn; 
}

function createList($town_id, $town_name, $county_id, $population) {
    
    // construct the proper SQL INSERT statement
    $dbConn = getDatabaseConnection(); 

    $sql = "INSERT INTO `populationList` (`town_id`, `town_name`, `county_id`, `population`) VALUES (NULL, '$town_id', '$town_name', '$county_id', '$population', NOW());"; 
    
    $statement = $dbConn->prepare($sql); 
    $result = $statement->execute(); 
    
    if (!$result) {
      return null; 
    }
    
    $last_id = $dbConn->lastInsertId();

    
    // fetch the newly created object from database
    
    $sql = "SELECT * from midterm WHERE town_id = $town_id"; 
    $statement = $dbConn->prepare($sql); 
    
    $statement->execute(); 
    $records = $statement->fetchAll(); 
    $newRec = $records[0]; 
    
    return $newRec; 
    
}

function displayList() {
    $dbConn = getDatabaseConnection(); 
    
    $sql = "SELECT * from midterm WHERE 1";  
    
    echo "POST: "; 
    print_r($_POST);
    echo "<br/>"; 
    
    if(isset($_POST['search']) && !empty($_POST['search'])) {
      
      $sql .= " AND (line1 LIKE '%{$_POST['search']}%' OR line2 LIKE '%{$_POST['search']}%')"; 
     
    }
    
    if(isset($_POST['meme-type']) && !empty($_POST['meme-type'])) {
      $sql .= " AND meme_type = '{$_POST['meme-type']}'"; 
    }
    
    if(isset($_POST['order-by-date'])) {
      $sql .= " ORDER BY create_date"; 
      
      if ($_POST['order-by-date'] == 'newest-first') {
        $sql .= " DESC"; 
      }
    }

    
    echo "sql: $sql <br/>"; 

    $statement = $dbConn->prepare($sql); 
    
    $statement->execute(); 
    $records = $statement->fetchAll();
    
}
    displayList();
?>
