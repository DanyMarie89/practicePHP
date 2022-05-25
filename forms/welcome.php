<!DOCTYPE html>
<html lang='en'>
    <head>
        <title>Form Welcome Page</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet/javascript" href="php_practice.css?v=<?php echo time(); ?>">
    </head>
    <header><h1>My first Form</h1></header>
    <body>
        <div id="nav"></div>
           <script>
               $.get("../navigation.html", function(data){
                   $("#nav").replaceWith(data);
               });
            </script>
            <h3>You've created your first form, 
            <?php
                echo $_POST["name"];
                echo "!";
            ?>
            </h3>
    </body>
</html>
