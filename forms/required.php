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
            <h3>Creating Forms Using POST / GET</h3>
            <p>When creating this form, we will need to create a seperate page to send the data to. That page is one named <em>welcome.php</em> below.</p>
            <code>
                &lt;form action="welcome.php" method="get"><br>
                Name: &lt;input type="text" name="name">&lt;br><br>
                E-mail: &lt;input type="text" name="email">&lt;br><br>
                &lt;input type="submit"><br>
                &lt;/form>
            </code>
            <p>When we fill out the form and click the submit button, the information will be sent over to the <em>welcome.php</em> page. For the message to be displayed, place code in the <em>welcome</em> page shown below:</p>
            <code>
                (<em>Any welcome message you want</em>) followed by their name from <strong>GET</strong> method<br>
                &lt;?php echo $_GET["name"]; ?>&lt;br><br>
                (<em>Any message you want</em>) followed by their email from <strong>GET</strong> method<br>
                &lt;?php echo $_GET["email"]; ?>
            </code>
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