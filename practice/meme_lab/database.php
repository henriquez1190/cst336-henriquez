<?php

function getDatabaseConnection() {
    if(true) {
        $host = "localhost";
        $username = "henriquez1190";
        $password = "Zaraki11!@"; // best practice: define this in a separte file
        $dbname = "meme_lab"; 
    } else {
        $host = "us-cdbr-iron-east-01.cleardb.net";
        $username = "bc28d2e6421fb1";
        $password = "81ae6c57"; // best practice: define this in a separte file
        $dbname = "heroku_3faf88fa6486092";
    }
    
    // Create connection
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $dbConn; 
}
?>

