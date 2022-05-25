<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP Practice - Forms</title>
        <link rel="stylesheet" href="../php_practice.css?v=<?php echo time(); ?>">    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    </head>
    <body>
    <header>
        <h1>HTML Forms</h1>
    </header>
    <div id="nav"></div>
        <script>
            $.get("../navigation.html", function(data){
                $("#nav").replaceWith(data);
            });
        </script>
    <section>
        <article class="main">
            <h3>Creating Forms Using POST / GET</h3>
            <form action='welcome.php' method='post'>
                Name: <input type='text' name='name'><br>
                Email:  <input type='text' name='email'><br>
                <input type ='submit'>
            </form>
            
        </article>
    </section>

    <footer>
    <p>2022 | Dany Seth | Lincoln, RI | <a class="footer_links" href="https://www.facebook.com/DanyMarie209/" target="blank"> Facebook</a> | 
    <a class="footer_links" href="https://www.instagram.com/dany.marie1989/" target="blank"> Instagram</a></p>
    </footer>
    </body>
</html>
</html>