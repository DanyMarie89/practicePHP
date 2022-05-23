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
            <h1>Variables</h1>
        </header>
        <section>
            <div class="navBar">
                    <a href="php_practice.php">Home</a>
                    <div class="dropdown">
                        <button class="dropButton">Procedural PHP
                            <i class="fa fa-caret-down"></i>
                            <div class="dropContent">
                                <li><a href="dataTypes.php">Data Types</a>
                                <li><a class="active" href="variables.php">Variables</a></li>
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
                    <h3>Variables and Declaring a Variable</h3>
                        <p>Variables are used to declare data types in programming. These variables are used to instruct the computer to do specific things in programming. Variables, as the name mentions, can be changed and they also have different data types.</p>
                        <p>When declaring variables in PHP, we don't have to use the data type with our variable names. We simply use the syntax <strong>$variableName = dataType</strong>. The keywords are not case sensitive <em>but</em> variable names are! Here is an example:</p>
                        <p><em>echo</em> is the keyword we use to output PHP code to the computer.<br>
                        echo | EcHo | ECHO, are all the same and can be used to output our code.</p>
                        <p>Variable names are different and are case sensitive. So if we wanted to create a string variable with the name $myName, we cannot call $myname.</p>
                        <p>Let's go ahead and look at some examples below:</p>
                        <code>
                            <p>$myName = "Dany Seth";<br>
                            $myAge = 32;<br>
                            $randomFloat = 14.99;<br>
                            $hasKids = true;<br>
                            $kidsArray = array("Sasuke", "Kera", "Jooni");
                            </p>
                        </code>
                        <p>Sample Output:</p>
                        <code>
                            <?php
                                $myName = "Dany Seth";
                                $myAge = 32;
                                $randomFloat = 14.99;
                                $hasKids = true;
                                $kidsArray = array("Sasuke", "Kera", "Jooni");
                                echo "Hello my name is " .$myName. " and I am " .$myAge. " years old.". "Boolean returns true or false: I have three kids, is this true? ";
                                if ($hasKids == true) {
                                    echo "That is true! ";
                                }
                                echo "Their names are ";
                                foreach ($kidsArray as $kids) {
                                    echo $kids .", ";
                                }
                            ?>
                        </code>
                </article>
        </section>

        <footer>
            <p>2022 | Dany Seth | Lincoln, RI | <a class="footer_links" href="https://www.facebook.com/DanyMarie209/" target="blank"> Facebook</a> | 
            <a class="footer_links" href="https://www.instagram.com/dany.marie1989/" target="blank"> Instagram</a></p>
        </footer>
    </body>
</html>