<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP Practice - Functions</title>
        <link rel="stylesheet" href="../php_practice.css?v=<?php echo time(); ?>">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>
    <header>
            <h1>Functions</h1>
        </header>
        <section>
            <div id="nav"></div>
                <script>
                    $.get("../navigation.html", function(data){
                        $("#nav").replaceWith(data);
                    });
                </script>
                <article class="main">
                    <h3>Functions</h3>
                        <p>Now that we have gotten a little familiar with declaring variables and the basics of PHP, we will learn about functions. A function is a block of code that can be used over and over instead of rewriting codes. Let's write a function called <em>introduction</em> with the infamous <em>"Hello world!"</em> string. In order for this function to output the string, we would need to call it. As shown below, we call the function by the function name, followed by paranthesis.</p>
                        <div class="code">
                            <code>
                                function introduction() {<br>
                                &emsp;echo "Hello world!";<br>
                                }<br>
                                introduction();
                            </code>
                        </div>
                        <p>Output:</p>
                        <div class="outputs">
                            <code>
                                <?php
                                    function introduction() {
                                        echo "Hello world!";
                                    }
                                    introduction();
                                ?>
                            </code>
                        </div>
                        <h4>Functions with Arguments</h4>
                        <p>Our previous example of functions had no <em>arguments</em>. Notice that the parenthesis are empty. When we want to pass a value for the function to evaluate, we will add an <em>argument</em> Let's create a function for my family's name. <strong>$fName</strong> will NOT be declared or defined until we call the function and <em>pass</em> in a value.</p>
                        <p>By passing in a value, we will call the function and put in the first name.</p>
                        <code>
                            function sayFamily($fName) {<br>
                            &emsp;echo $fname. " Say";<br>
                            }<br>
                            sayFamily("Johnny");&emsp;&emsp;//The argument here is "Johnny"<br> 
                            sayFamily("Sasuke");<br>
                            sayFamily("Kera");<br>
                            sayFamily("Jooni");
                        </code>
                        <p>Shown above, I called/invoked the sayFamily function with different arguments. Each time I called it, I passed in a <em>different</em> value. Here's the output from the function:</p>
                        <code>
                            <?php
                                function sayFamily($fName) {
                                    echo $fName. " Say<br>";
                                }
                                sayFamily("Johnny");
                                sayFamily("Sasuke");
                                sayFamily("Kera");
                                sayFamily("Jooni");
                            ?>
                        </code>
                        <p>For more on functions, go to <a href="https://www.w3schools.com/php/php_functions.asp" target="blank">w3schools.com</a></p>
            </article>
        </section>

        <footer>
            <p>2022 | Dany Seth | Lincoln, RI | <a class="footer_links" href="https://www.facebook.com/DanyMarie209/" target="blank"> Facebook</a> | 
            <a class="footer_links" href="https://www.instagram.com/dany.marie1989/" target="blank"> Instagram</a></p>
        </footer>
    </body>
</html>