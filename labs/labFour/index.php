<?php
    $backgroundImage = "/work/labs/labFour/Slider/img/sea.jpg";
    
    if(isset($_GET['keyword'])) {
        //echo "You searched for: " . $_GET['keyword'];
        include "Slider/api/pixabayAPI.php";
        //$keyword = $_GET['keyword'];
        $imageURLs = getImageURLs($_GET['keyword']);
        //print_r($imageURLs);
        $backgroundImage = $imageURLs[array_rand($imageURLs)];
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Image Carousel </title>
        <!--<meta charset="utf-8"> -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
        <style>
            @import url("/work/labs/labFour/Slider/css/styles.css");
            body {
                background-image: url('<?=$backgroundImage ?>');
            }
        </style>
    </head>
    <body>
        <br/> <br/>
        <?php
            if(!isset($imageURLs)){
                echo "<h2> Type a keyword to display a slideshow <br/> with random images from Pixabay.com </h2>";
            } else {
                //for ($i =0; $i < 5; $i++){
                //    do {
                //        $randomIndex = rand(0, count($imageURLs));
                //    }
                //    while (isset($imageURLs[$randomIndex]));
                    
                //    echo "<img src='" . $imageURLs[rand(0, count($imageURLs))] . "' width='200' >";
                //    unset($imageURLs[$randomIndex]);
                //}
            }
        ?>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- indicators -->
            <ol class="carousel-indicators">
                <?php
                for ($i = 0; $i < 5; $i++) {
                    echo "<li data-target='#carousel-example-generic' data-slide-to='$i'";
                    echo ($i == 0)?" class='active'": "";
                    echo "></li>";
                }
                ?>
            </ol>
            <!-- wrapper -->
            <div class="carousel-inner" role="listbox">
                <?php
                    for ($i =0; $i < 5; $i++){
                        do {
                            $randomIndex = rand(0, count($imageURLs));
                        }
                        while (isset($imageURLs[$randomIndex]));
                    
                        echo '<div class="carousel-item';
                        echo ($i == 0)?"active": "";
                        echo '">';
                        echo '<img src="' . $imageURLs[$randomIndex] . '">';
                        echo '</div>';
                        unset($imageURLs[$randomIndex]);
                    }
                ?>
                
            </div>
            
            <!-- controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        
        </div>
        <form>
            <input type="text" name="keyword" placeholder="Keyword"/> <!-- value="=$_GET['keyword']?>"/> -->
            <input type="radio" id="lhorizontal" name="layout" value="horizontal">
            <label for="Horizontal"></label><label for="lhorizontal"> Horizontal </label>
            <input type="radio" id="lvertical" name="layout" value="vertical">
            <label for="Vertical"></label><label for="lvertical"> Vertical </label>
            <select name="category">
                <option value="">Select One</option>
                <option value="ocean">Sea</option>
                <option>Forest</option>
                <option>Mountain</option>
                <option>Snow</option>
            </select>
            <input type="submit" value="Submit" />            
        </form>
        
        <br/> <br/>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>