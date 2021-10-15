<!DOCTYPE html>
<html>
        <head>                
                <style>
                        .menu{height=auto;}
                </style>
                <title>Simple Market</title>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css"/>
                <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
                <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> 


        </head>
        <body>
                <div data-role="page">
                        <div data-role="panel" data-display="overlay" data-position="right" id="rightPanel">
                                <div data-role="listview" data-insert="true">
                                        <ul>
                                                <li><a href="https://teach.park.edu/~igueits6197/part-6/takephoto.php" >Take a photo</a></li>
                                                <li><a href="https://teach.park.edu/~igueits6197/part-6/location.php" >Current location</a></li>
                                                <p><a data-role="button" data-rel="close" data-icon="delete"></a></p>
                                        </ul>
                                </div>
                        </div>
                        <div data-role="header">
                                <div data-role="navbar">
                                        <ul>
                                                <li><h1 width>Simple Market</h1></li>
                                                <li><a href="#rightPanel" data-role="button" data-icon="bars" name="menu"></a></li>
                                        </ul>
                                </div>
                        </div>
                        <div data-role="content">
                                <h2>Featured Item</h2>
                                <?php
                                        include("getfeature.php");
                                ?>
                        </div>
                        <div data-role="footer">
                                <div data-role="navbar">
                                        <ul>
                                                <li><a href="https://teach.park.edu/~igueits6197/part-5/home.php" data-icon="home" data-position="fixed"></a></li>
                                                <li><a href="https://teach.park.edu/~igueits6197/part-5/categories.php">See More Ads</a></li>
                                                <li><a href="https://teach.park.edu/~igueits6197/part-5/addcontent.html">Place an Ad</a></li>
                                        </ul>
                                
                                </div>
                        </div>
                </div>
        </body>
</html>