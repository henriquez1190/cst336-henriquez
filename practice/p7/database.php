<?php
// connect to our mysql database server''


function getDatabaseConnection() {
    $host = "localhost";
    $username = "henriquez1190";
    $password = "Zaraki11!@"; // best practice: define this in a separte file
    $dbname = "c9"; 
    
    // Create connection
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbConn; 
}
// temporary test code
//$dbConn = getDatabaseConnection(); 

?>