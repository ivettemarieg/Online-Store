<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <link rel="stylesheet" type="text/css" href="main.css">
        <title>Simple Market Home Menu</title>
        <h1 class="store">Simple Market</h1> </div>
    </head>
    <body>        
        <div class="c-grid">
            <div class="featured_title"><h1> Featured Item </h1></div>
            <div class="getfeature">    
                <?php
                    include('getfeature.php');
                ?>
            </div>

            <div class="categor_title"><h1> Shop by Categories</h1></div>
            <div class="categories">
                    <div class="inner-grid">
                        <div class="pets"><a href="category.php?cat=1">Pets</a></div>
                        <div class="vehicles"><a href="category.php?cat=2">Vehicles</a></div>
                        <div class="tech"><a href="category.php?cat=3">Technology Items</a></div>
                        <div class=hItems><a href="category.php?cat=4">Household Items</a></div>
                        <div class="wanted"><a href="category.php?cat=5">Wanted</a></div>
                    </div>
            </div>

            <div class="addPost"><a href="addcontent.html"> Post Your Own! </a></div>
        </div>

    </body>
</html>