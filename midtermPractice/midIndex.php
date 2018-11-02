<?php
/*
Planning:
    create a form
    handle form data
    generate a calendar
    randomly show things on the calendar(based on user input)
    show summary of user's form
    
    step 1:
    generate a calendar every time the page loads
    
    step 2:
    show the right number of dates based on month selected
    
    step 3:
    show random images in calendar (3 different images)
    
    step 4:
    show the specific number of random images based on user input
    
    step 5:
    show different images based on user input
    
*/

print_r($_POST);

$months = array(
    'January' => 31,
    'February'=> 28,
    'November'=> 30,
    'December'=> 31,
    );
    
    $countriesAndImages = array(
        'France' => array('acapulco', 'cabos', 'cancun', 'chichenitza', 'huatulco'),
        'Mexico' => array('chicago', 'hollywood', 'las_vegas', 'ny', 'washington_dc'),
        'USA' => array('bordeaux', 'le_havre', 'lyon', 'montepellier','paris')
        );
        
    function getImageForCountry($country){
        global $countriesAndImages;
        $imgName = "./img/$counrty/" . array_pop($countriesAndImages["USA"]) . ".png";
        return $imgURL;
    }
    function createRandomMappings($numDaysInMonth, $numSiteSeeingDays){
        global $countriesAndImages;
        $mappings = array();
        
        
        // initialize all the days to be false
        for($i = 0; $i < $numDaysInMonth; $i++){
            array_push($mappings, false);
        }
        
        // set the siteSeeingDays to have images
        for($i = 0; $i < $numSiteSeeingDays; $i++){
            $mappings[$i] = array(
                'img' => getImageForCountry("USA")
                );
        }
        
        shuffle($mappings);
        return $mappings;
        
        
    }
    
    function generateCalendar() {
        global $months;
        
        
        $month = $_POST['month'];
        $daysInMonth = $months[$month];
        
        echo 'Days = $daysInMonth !!!!!!!!! <br/>';
        
        echo "<table>";
        // to place 3 random images in the calendar
        // create an array of 31 elements (or 30,28) depending on month
        // set the first 3 elements to be arrays
            //{'img'=> http://slkdjkfljsdlfjs.com.jpg}
            //
        
        $mappings = createRandomMappings($daysInMonth, 3);
        
        echo "Mappings: >...............................<br>";
        print_r($mappings);
        echo "<br>";
        
        $date = 1;
        
        for($week = 0; $week < 5; $week++){
            echo "<tr>";
            for($day = 0; $day < 7; $day++){
                echo "<td>";
                echo "$date";
                if($mappings[$date-1]){
                    echo "<img src='" . $mappings[$date-1]['img'] . "'>";
                }
                echo "</td>";
                $date++;
                
                if($date > $daysInMonth)
                    break;
                
            }
            echo "</tr>";
            
            if($date > $daysInMonth)
                break;
        }
        echo "</table>";
    }
    
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <style>
            table td {
                padding: 30px;
                border: 1px solid black;
                }
        </style>
            
                
    </head>
    <body>
        <h1> Winter Vacation Planner </h1>
        <form method="post">
            <select name="month">
                <option value="November">November</option>
                <option value="December">December</option>
                <option value="January">January</option>
                <option value="February">February</option>
            </select>
            <input type="submit" name="travel-info-submit-btn">
            
        </form>
        <h1> Itinerary </h1>
        <?php generateCalendar(); ?>
    </body>
</html>