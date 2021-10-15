<!DOCTYPE html>
<html>
        <head>
                <title>Simple Market</title>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css"/>
                <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
                <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>        
        </head>
        <body>
                <div data-role="page">
                        <div data-role="header"><h1>Simple Market</h1></div>
                        <div data-role="content">
                                <h2>Featured Item</h2>
                                <?php
                                        include("getfeature.php");
                                ?>
                        </div>
                        <div data-role="footer">
                                <div data-role="navbar">
                                        <ul>
                                                <li><a href="https://teach.park.edu/~igueits6197/part-4/index.php" data-icon="home" data-position="fixed"></a></li>
                                                <li><a href="https://teach.park.edu/~igueits6197/part-4/categories.php">See More Ads</a></li>
                                                <li><a href="https://teach.park.edu/~igueits6197/part-4/addcontent.html">Place an Ad</a></li>
                                        </ul>
                                
                                </div>
                        </div>
                </div>
        </body>
</html>