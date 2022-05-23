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
            <h1>Classes and Objects</h1>
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
                            <li><a class="active" href="objects.php">Objects</a></li>
                            <li><a href="constructor.php">Constructor</a></li>
                            <li><a href ="destruct.php">Destruct</a></li>
                        </div>
                    </button>
                </div>
            </div>  

                <article class="main">
                    <h3>Classes and Objects</h3>
                        <p>Think of object oriented programming as a blueprint of something. A class is the blueprint and an object is what completes the blueprint. Let's take a look at methods and properties that create this blueprint aka defining objects:</p>

                        <code>
                            class Cars {<br>
                                &emsp;&emsp;public $name;<br>
                                &emsp;&emsp;public $year;<br>
                                &emsp;&emsp;public $model;<br><br>

                            function set_name($name) {<br>
                                &emsp;&emsp;$this->name = $name;<br>
                            }<br>
                            function get_name() {<br>
                                &emsp;&emsp;return this->name;<br>
                                &emsp;&emsp;}<br>
                            }
                            function set_year($year) {<br>
                                &emsp;&emsp;$this->year = $year;<br>
                            }<br>
                            function get_year() {<br>
                                &emsp;&emsp;return this->year;<br>
                            }<br>
                            function set_model($model) {<br>
                                &emsp;&emsp;$this->model = $name;<br>
                            }<br>
                            function set_name($name) {<br>
                                &emsp;&emsp;$this->name = $name;<br>
                            }<br>
                        }
                        </code>

                        <p>As shown above, we've created methods (<em>functions</em>) to set the name, year, and model for a car. To output the object, we need to call the methods and pass in values. Lets pass in a 1988 Honda Civic:</p>

                        <code>
                            $honda = new Cars();<br>
                            $honda->set_name("Honda");<br>
                            $honda->set_year(1988);<br>
                            $honda->set_model("Civic");<br>
                        </code>
                        <p>When you want to print out the car object, you will <em>echo</em> and call the function get_name, get_year, and get_model: </p>
                        <code>
                            <?php
                                class Cars {
                                    public $name;
                                    public $year;
                                    public $model;
                                    
                                    function set_name($name) {
                                        $this->name = $name;
                                    }
                                    function get_name() {
                                        return $this->name;
                                    }
                                    function set_year($year) {
                                        $this->year = $year;
                                    }
                                    function get_year() {
                                        return $this->year;
                                    }
                                    function set_model($model) {
                                        $this->model = $model;
                                    }
                                    function get_model() {
                                        return $this->model;
                                    }
                                }
                                $honda = new Cars();
                                $honda->set_name("Honda");
                                $honda->set_year(1988);
                                $honda->set_model("Civic");
                                echo "Car: " .$honda->get_name(). "<br>";
                                echo "Model: " .$honda->get_model(). "<br>";
                                echo "Year: " . $honda->get_year();    
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