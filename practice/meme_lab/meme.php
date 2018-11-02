<!DOCTYPE html>

<html>

  <head>

    <title>A Meme</title>

    <style>

      #meme-div{

      width: 450px;

      height: 450px;

      background-size: 100%;

      text-align: center;

      position: relative;

      }

      h2 {

        position: absolute;

        left: 0;

        right: 0;

        margin: 15px 0;

        padding: 0 5px;

        font-family: impact;

        color: white;

        text-shadow: 1px 1px black;

      }

      #line1 {

         top: 0;

       }

      #line2 {

         bottom: 0;

       }

    </style>

  </head>

  <body>

    <h1>Your Meme</h1>

    <!--The image needs to be rendered for each new meme

    so set the div's background-image property inline -->

    <div id="meme-div" style="background-image:url(https://upload.wikimedia.org/wikipedia/commons/f/ff/Deep_in_thought.jpg);">

      <h2 id="line1">Why is that humans bake cookies? </h2>

      <h2 id="line2">Yet cook bacon?</h2>

    </div>

  </body>

</html>