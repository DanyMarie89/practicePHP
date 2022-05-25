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
        <h1>Conditionals</h1>
    </header>
        <section>
            <div id="nav"></div>
            <script>
                $.get("../navigation.html", function(data){
                    $("#nav").replaceWith(data);
                });
            </script>

            <article class="main">
                <h3>Conditional Statements</h3>
                <p>Conditional statements allow us to perform specific actions with different conditions in our statements by using if - if else statements. Conditional statements will become rather useful in our programming.</p>
                <h4>if/if-else/else-if Statement</h4> 
                <p>The if statement is used to execute a code if a condition is met.</p>
                <code>if ($weather < 80 && $weather > 65) {<br>
                    &emsp;echo "It may get chilly, bring a sweater with you.";<br>
                    &emsp;} else if ($weather > 80) {<br>
                    &emsp;&emsp;&emsp;echo "It's pretty warm today, you don't need a sweater.";<br>
                    &emsp;} else { <br> 
                    &emsp;&emsp;echo "It's HOT today.. let's go swimming";<br>
                    &emsp;}
                </code>
                <p>You cannot see here, but I've already declared the weather to be <em>75 degrees</em>. What do you think the output will be? The answer is below:</p>
                    <?php
                        $weather = 75;
                        if ($weather < 80 && $weather > 65) {
                            echo "It may get chilly, bring a sweater with you.";
                        } elseif ($weather > 80 ) {
                            echo "It's pretty warm today, you don't need a sweater.";
                        } else {
                            echo "It's HOT today.. let's go swimming";
                        }
                    ?>
                <h4>Switch Statement</h4>
                <p>A switch statement is similar to the if-else statement. In a switch statement, the output is decided from one variable. Here, we use the number grade for the switch to evaluate. When using the switch method, we start with the keyword <em>switch</em> followed by the variable we want to evaluate in between brackets. The variable will be compared with each case and output when the case matches switch.</p>
                <code>
                    $grade = 92;<br>
                    switch ($grade) { <br> 
                    &emsp;case $grade >= 94:<br>
                    &emsp;&emsp;echo "A";<br>
                    &emsp;&emsp;break;<br>
                    &emsp;case $grade >= 90 && $grade < 94:<br>
                    &emsp;&emsp;echo "A-";<br>
                    &emsp;&emsp;break;<br>
                    &emsp;case $grade < 90 && $grade >=87:<br>
                    &emsp;&emsp;echo "B+";<br>
                    &emsp;&emsp;break;<br>
                    &emsp;case $grade < 84 && $grade >=87:<br>
                    &emsp;&emsp;echo "B";<br>
                    &emsp;&emsp;break;<br>
                    &emsp;case $grade < 84 && $grade >=80:<br>
                    &emsp;&emsp;echo "B-";<br>
                    &emsp;&emsp;break;<br>
                    }
                </code>
                <p>I've already declared the grade number to be a 92 as shown above. When the case matches, it'll <em>echo</em> the corresponding value.</p>
                <code class="code">
                    <?php
                        $grade = 92;
                        switch ($grade) {
                            case $grade >= 94:
                                echo "A";
                                break;
                            case $grade >= 90 && $grade < 94:
                                echo "A-";    
                                break;
                            case $grade < 90 && $grade >=87:
                                echo "B+";
                                break;
                            case $grade >=84 && $grade < 87:
                                echo "B";
                                break;
                            case $grade < 84 && $grade >= 80:
                                echo "B-";
                                break;
                            default: 
                                echo "You need to try harder!";
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