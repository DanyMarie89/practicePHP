<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP Practice - Destruct</title>
        <link rel="stylesheet" href="../php_practice.css?v=<?php echo time(); ?>">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>
        <header>
            <h1>Destructor</h1>
        </header>
        <section>
            <div id="nav"></div>
                <script>
                    $.get("../navigation.html", function(data){
                        $("#nav").replaceWith(data);
                    });
                </script>

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

                                function __destruct() {<br>
                                    &emsp;&emsp;echo "Name: " {$this->name};<br>
                                    &emsp;&emsp;echo "Model: " {$this->model};<br>
                                    &emsp;&emsp;echo "Year: " {$this->year};<br>
                                    &emsp;&emsp;}<br>
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
                                echo "Name: Honda<br>Model: Civic<br>Year: 1998";
                                echo "Name: Subaru<br> Model: Outback<br>Year: 2003";
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