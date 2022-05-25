<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP Practice with HTML & CSS</title>
        <link rel="stylesheet" href="../php_practice.css?v=<?php echo time(); ?>">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>
        <header>
            <h1>My First PHP Program</h1>
        </header>
        <div id="nav"></div>
           <script>
               $.get("../navigation.html", function(data){
                   $("#nav").replaceWith(data);
               });
            </script>

            <article class="main">
                <h2>Dany Seth</h2>
                <img id="me" src="../photos/Us.jpg" alt="photo of author">
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