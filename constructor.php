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
            <h1>Constructor</h1>
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
                            <li><a class="active" href="constructor.php">Constructor</a></li>
                            <li><a href ="destruct.php">Destruct</a></li>
                        </div>
                    </button>
                </div>
            </div>  

                <article class="main">
                    <h3>Constructor</h3>
                        <p>A constructor is a special method that is used to automatically call an object. Instead of creating multiple methods to set name, year, or model of the class car, we can use a <em>constructor</em>.</p>
                        <p>When we initialize objects with a constructor, we do the same thing as when we create our methods. The <em>key</em> difference is we name the method with two underscores followed by the word <em>contstruct</em>, like so: <strong>function __construct($name, $year, $model)</strong>. For this particular object, we are passing three arguments into the constructor:</p>
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
                                &emsp;&emsp;function get_name() {<br>
                                &emsp;&emsp;&emsp;return $this->name;<br>
                                &emsp;&emsp;}<br>
                                &emsp;&emsp;function get_year() {<br>
                                &emsp;&emsp;&emsp;return $this->year;<br>
                                &emsp;&emsp;}<br>
                                &emsp;&emsp;function get_model() {<br>
                                &emsp;&emsp;&emsp;return $this->model;<br>
                                &emsp;&emsp;}<br>
                            }
                        </code>
                        <p>Notice we no longer need to repeatedly create a method for set_name. Our program will automatically create our object from the constructor. Now, lets create our Cars object. Can you tell the difference from how we previously initialized our variables?</p>
                        
                        <code>
                            $subaru = new Cars("Subaru", 2003, "Outback");<br>
                            echo "Name: " .$subaru->get_name().; <br>
                            echo "Model: " .$subaru->get_model().;<br>
                            echo "Year: " .$subaru->get_year();
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

                                    function get_name() {
                                        return $this->name;
                                    }
                                    function get_year() {
                                        return $this->year;
                                    }
                                    function get_model() {
                                        return $this->model;
                                    }
                                }

                                $subaru = new Cars("Subaru", 2003, "Outback");
                                echo "Name: " .$subaru->get_name(). "<br>";
                                echo "Model: " .$subaru->get_model(). "<br>";
                                echo "Year: " .$subaru->get_year();
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