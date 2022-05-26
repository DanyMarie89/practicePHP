<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP Practice - Required Information and Validation</title>
        <link rel="stylesheet" href="../php_practice.css?v=<?php echo time(); ?>">    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    </head>
    <body>
    <header>
        <h1>Forms:</h1>
        <h5 style="margin-top: -50px;">Required Information and Validation</h5>
    </header>
    <div id="nav"></div>
        <script>
            $.get("../navigation.html", function(data){
                $("#nav").replaceWith(data);
            });
        </script>
    <section>
        <article class="main">
            <h3>Form Security</h3>
            <p>The form element is submitted using the method="<em>post/get</em>". As we seen previously with our <a href="../forms/simple.php" style="text-decoration: none;"><strong>&rarr;basic form</strong></a> structure we declared <em>action</em> with just the <em>welcome.php</em> page. This way of posting leaves users information vulnerable for hackers.</p>
            <p>In order for us to protect information, we will use <em>htmlspecialchars</em> to avoid such exploitations.</p>
            <code>
            &lt;form method="post"<br> action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF]);?>">
            </code>
            <p>With form validation, on the outside it looks the same and takes information and outputs to user the same way. Behind the scenes, it looks a bit different than our form from the previous page.</p>
            <code>
                <a href="../forms/code_validation.php" style="text-decoration: none;"><strong>CLICK HERE TO SEE COMPLETED CODE</strong> </a>(Photo Only)
            </code>
            <?php
                $name = $email = $phone = $comment = "";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = user_info($_POST["name"]);
                    $email = user_info($_POST["email"]);
                    $phone = user_info($_POST["phone"]);
                    $comment = user_info($_POST["comment"]);
                }

                function user_info($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
            ?>
            <h4>Information Validation Form</h4>
            <form method="post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                Name: <input type="text" name="name"><br>
                Email: <input type="text" name="email"><br>
                Phone: <input type="tel" name="phone"><br>
                Comment:<br> <textarea name="comment" rows="3" cols="30"></textarea><br>
                <input type="submit" name="submit" value="Submit">
            </form>
            <h5 style="text-align: left; margin-left: 35%;">
            <?php
                echo "Name: $name<br>";
                echo "Email: $email<br>";
                echo "Phone: $phone<br>";
                echo "Comments: $comment<br>";
            ?>
            </h5>
            <p>Learn more about form validation at <a href="https://www.w3schools.com/php/php_form_validation.asp" style="text-decoration: none;"><strong>&rarr;w3schools<strong></a></p>
            
            
        </article>
    </section>

    <footer>
    <p>2022 | Dany Seth | Lincoln, RI | <a class="footer_links" href="https://www.facebook.com/DanyMarie209/" target="blank"> Facebook</a> | 
    <a class="footer_links" href="https://www.instagram.com/dany.marie1989/" target="blank"> Instagram</a></p>
    </footer>
    </body>
</html>