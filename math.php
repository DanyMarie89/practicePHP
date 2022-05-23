<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP Practice with HTML & CSS</title>
        <link rel="stylesheet" href="php_practice.css?v=<?php echo time(); ?>">
    </head>
    <body>
    <header>
        <h1>Math</h1>
    </header>
    <section>
        <div class="navBar">
            <a href="php_practice.php">Home</a>
                <div class="dropdown">
                    <button class="dropButton">Procedural PHP
                        <i class="fa fa-caret-down"></i>
                            <div class="dropContent">
                                <li><a href="dataTypes.php">Data Types</a>
                                <li><a href="variables.php">Variables</a></li>
                                <li><a href="scopes.php">Scopes</a></li>
                                <li><a href="math.php">Math</a></li>
                                <li><a href="conditional.php">Conditional</a></li>
                                <li><a href="functions.php">Functions</a></li>
                            </div>
                        </button>
                    </div>
                    <div class="dropdown">
                    <button class="dropButton">OOP PHP
                        <i class="fa fa-caret-down"></i>
                        <div class="dropContent">
                            <li><a href="objects.php">Objects</a></li>
                            <li><a href="constructor.php">Constructor</a></li>
                            <li><a href ="destruct.php">Destruct</a></li>
                        </div>
                    </button>
                </div>
            </div>  

                <article class="main">
                    <h3>Math Functions</h3>
                        <p>PHP has math functions that allow us to complete basic mathematical (<em>or complicated if you want</em>) problems with integers or floats. From finding minimum and maximum numbers in an array to rounding numbers.</p>
                        <h4>min() and max() Functions</h4>  
                        <p>The min() function finds the minimum value in an array, while max() finds the maximum value in an array.</p>
                        <code>echo(min(10, 20, 30));&emsp;&emsp;// returns 10<br>
                        echo(max(10, 20, 30));&emsp;&emsp;//returns 30</code>
                           
                        <h4>abs() Function</h4>
                            <p>The abs() function returns the absolute value of any number that is given or assigned to the variable.</p>
                            <code>echo(abs(-15.5)&emsp;&emsp;// returns 15.5</code>
                        <h4>sqrt() Function</h4>
                            <p>The sqrt() function takes the number and returns the square root of the number that is given.</p>
                                <code>echo(sqrt(100));&emsp;&emsp;// returns 10</code>
                        <h4>round() Function</h4>
                            <p>The round() function rounds the number to the nearest integer.</p>
                            <code>echo(round(10.5);&emsp;&emsp;// returns 11</code>
                            <p>These are just he few math functions reviewed. You may look up more of the math functions online if interested.</p>
                </article>
            </section>
        <footer>
            <p>2022 | Dany Seth | Lincoln, RI | <a class="footer_links" href="https://www.facebook.com/DanyMarie209/" target="blank"> Facebook</a> | 
            <a class="footer_links" href="https://www.instagram.com/dany.marie1989/" target="blank"> Instagram</a></p>
        </footer>
    </body>
</html>