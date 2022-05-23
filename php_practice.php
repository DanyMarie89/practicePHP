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
            <h1>My First PHP Program</h1>
        </header>
        <section>
            <div class="navBar">
                <a class="active" href="php_practice.php">Home</a>
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
                        </div>
                    </button>
                </div>
            </div>  

            <article class="main">
                <h2>Dany Seth</h2>
                <img id="me" src="photos\Us.jpg" alt="photo of author">
                <p>Welcome! My name is Dany Seth and I am currently a full-time student at RIC. Before attending RIC, I've recieved an AS degree in Computer Studies.
                </p>
                <p>This page is for the purpose of learning PHP for an internship role that I've accepted at OSJL. This will also be a place where I can keep track of what I've learned and where I can brush up on my HTML and CSS knowledge.</p>
                <p>Thank you for taking your time to read. Please take a look around and enjoy.</p>
            </article>
        </section>

        <footer>
        <p>2022 | Dany Seth | Lincoln, RI | <a class="footer_links" href="https://www.facebook.com/DanyMarie209/" target="blank"> Facebook</a> | 
            <a class="footer_links" href="https://www.instagram.com/dany.marie1989/" target="blank"> Instagram</a></p>
        </footer>
    </body>
</html>