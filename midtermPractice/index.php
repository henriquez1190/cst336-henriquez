<?php
    if(isset($_POST['months'])){
        $month;
        $m = $_POST['months'];
        if($m== "1"){
            $month = 'November';
        }
    } else {
        echo 'NO';
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <title> Winter Vacation Planner </title>
        <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <style>
            @import url("css/styles.css");
        </style>-->       
    </head>
    <body>
        <div>
            <h1> <strong>Winter Vacation Planner!</strong> </h1>
        </div>
        <div id="wrapper">
            <form method="post">
                Select Month:
                <select name="months">
                    <option>Select</option>
                    <option value="1">November</option>
                    <option value="2">December</option>
                    <option value="3">January</option>
                    <option value="4">February</option>
                </select>
                <br>
                <br>
                Number of Locations: 
                <input type="radio" name="locationsNumber" value="3" id="13">
                <label for="13"> Three </label>
                <input type="radio" name="locationsNumber" value="4" id="14">
                <label for="14"> Four </label>
                <input type="radio" name="locationsNumber" value="5" id="15">
                <label for="15"> Five </label>
                <br>
                <br>
                Select Country:
                <select name="country">
                    <option>USA</option>
                    <option>Mexico</option>
                    <option>France</option>
                </select>
                <br>
                <br>
                Visit locations in alphabetical order: 
                <input type="radio" name="order" value="asc" id="order_asc">
                <label for="order_asc"><strong>A-Z</strong></lable>
                <input type="radio" name="order" value="desc" id="order_desc">
                <label for="order_desc"><strong>Z-A</strong></label>
                <br>
                <br>
                <input type="submit" value="Create Itinerary">
            </form>
        </div>
        <script src="js/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>