<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP Practice - Scopes</title>
        <link rel="stylesheet" href="../php_practice.css?v=<?php echo time(); ?>">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>
    <header>
        <h1>Scopes</h1>
    </header>
    <section>
        <div id="nav"></div>
           <script>
               $.get("../navigation.html", function(data){
                   $("#nav").replaceWith(data);
               });
            </script>


            <article class="main">
                <h3>Global, Local, and Static</h3>
                    <p>A global scope is a variable that is declared <em>outside</em> of a function but can only be accessed outside of a function. Let's create our variable and see an example.</p>
                    <code>
                        <\?php<br>
                        $x = 5;   //global scope<br>
                        &emsp;function testGlobal() {<br>
                        &emsp;&emsp;// using <em>x</em> inside this function will generate an   error<br>
                        &emsp;&emsp;echo "Variable x outside function is: $x";<br>
                        &emsp;&emsp;testGlobal();<br>
                        &emsp;}<br>
                        &emsp;echo "Variable x outside the function is: $x";<br>
                        ?><br>
                    </code>
                    <?php
                        $x = 5;
                        function testGlobal() {
                            echo "Variable x outside of function is $x";
                        }
                        testGlobal();
                        
                        echo "<p>&#8593;See error message from above when trying to access variable <em>from</em> a function.&#8593;</p>";
                        echo "This is variable from outside of the function: ";
                        echo $x;
                    ?>
                    </div>
                    
                    <p>A local scope is a variable that is within the boundaries of the function. Before we had the variable before declaring our function <em>testGlobal</em>. Here, we will declare the variable within the function and show an example of the actual output.</p>
                    <code><\?php<br>
                        &emsp;function testLocal() {<br>
                        &emsp;&emsp;$x = 5;<br>
                        &emsp;&emsp;echo "This variable is from inside the function: $x";
                        }<br>
                        &emsp;&emsp;testLocal();<br>
                        &emsp;&emsp;echo "Variable x outside the function is: $x";<br>
                        ?>
                    </code>
                    <?php
                     function testLocal() {
                        $x = 5;
                        echo "This variable is from inside the function: $x";
                        }
                        echo "<br>";
                        testLocal();
                    ?>                
                </article>
            </section>

        <footer>
            <p>2022 | Dany Seth | Lincoln, RI | <a class="footer_links" href="https://www.facebook.com/DanyMarie209/" target="blank"> Facebook</a> | 
            <a class="footer_links" href="https://www.instagram.com/dany.marie1989/" target="blank"> Instagram</a></p>
        </footer>
    </body>
</html>