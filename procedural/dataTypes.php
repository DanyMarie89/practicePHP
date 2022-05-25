<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP Practice - Data Types</title>
        <link rel="stylesheet" href="../php_practice.css?v=<?php echo time(); ?>">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>
    <header>
            <h1>Data Types</h1>
        </header>
        <section>
            <div id="nav"></div>
                <script>
                    $.get("../navigation.html", function(data){
                        $("#nav").replaceWith(data);
                    });
                </script>

            <article class="main">
                <h3>What are data types?</h3>
                    <p>From its name, data types are the types of data we use to declare our variables. PHP supports these types of datas:</p>
                    <p>String | Integer | Float | Boolean | Array | Object | NULL | Resource</p>
                    <p>The data types we use most often are the first 5 listed above. With that being said, we will go through those in the next page (<em>variables</em>).</p>
                    <p>Before looking at variables, lets get to know these data types a little bit more.</p>
                    <p><em>String</em> type data is a sequence of characters that are placed inside double quotes (<em>" "</em>) or single quotes (<em>' '</em>).</p>
                    <p>An <em>integer</em> data type is a non-decimal number that starts from -2,147,483,648 and 2,147,489,687</p>
                    <p><em>Float</em> data type is also a number type <em>but</em> it is in form of a decimal.</p>
                    <p>A <em>boolean</em> returns a true or false value.</p>
                    <p>Lastly, the <em>array</em> stores data in a list.</p>
            </article>
        </section>

        <footer>
            <p>2022 | Dany Seth | Lincoln, RI | <a class="footer_links" href="https://www.facebook.com/DanyMarie209/" target="blank"> Facebook</a> | 
            <a class="footer_links" href="https://www.instagram.com/dany.marie1989/" target="blank"> Instagram</a></p>
        </footer>
    </body>
</html>