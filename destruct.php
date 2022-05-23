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
            <h1>Destructor</h1>
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
                            <li><a class="active" href ="destruct.php">Destruct</a></li>
                        </div>
                    </button>
                </div>
            </div>  

                <article class="main">
                    <h3>Destructor</h3>
                        <p>As the name suggests, the destruct method is the opposite of the constructor method. The destructor method gets called automatically when the script/program has <em>stopped</em>. As we previously worked on, we called our <em>get</em> method three times to get the name, model, and year of the car. Lets first take a look at the destruct method.</p>
                        <code>
                            class Cars {<br>
                                &emsp;&emsp;public $name;<br>
                                &emsp;&emsp;public $year;<br>
                                &emsp;&emsp;public $model;<br><br>

                                &emsp;&emsp;function __construct($name, $year, $model) {<br>
                                &emsp;&emsp;&emsp;$this->name = $name;<br>
                                &emsp;&emsp;&emsp;$this->year = $year;<br>
                                &emsp;&emsp;&emsp;$this->model = $model;<br>
                                &emsp;&emsp;}<br>

                                function __destruct() {
                                    echo "Name: " {$this->name};
                                    echo "Model: " {$this->model};
                                    echo "Year: " {$this->year};
                                }
                            }
                        </code>

                        <p>When we created our object, we didn't have to call the constructor each time to set each variable. We passed in three arguments and called the get method one by one. Here's our output:</p>
                        
                        <code>
                            <?php
                                class Cars {
                                    public $name;
                                    public $year;
                                    public $model;

                                    function __construct($name, $year, $model) {
                                        $this->name = $name;
                                        $this->year = $year;
                                        $this->model = $model;
                                    }

                                    function __destruct() {
                                        echo "Name: {$this->name}<br>";
                                        echo "Model: {$this->model}<br>";
                                        echo "Year: {$this->year}<br>";
                                    }

                                }
                                $honda = new Cars("Honda", 1998, "Civic");
                                $subaru = new Cars("Subaru", 2003, "Outback");
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