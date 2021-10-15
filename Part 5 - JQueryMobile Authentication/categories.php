<!DOCTYPE html>
<html>
        <head>
                <title>Shop By Categories</title>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
                <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
                <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>        
        </head>
        <body>
            <div data-role="page">
                <div data-role="header"><h1>Shop By Categories</h1></div>
                <div data-role="content">
                <div data-role="listview" data-inset="true">
                    <li><a href="getcontent.php?cat=1">Pets</a></li>
                    <li><a href="getcontent.php?cat=2">Vehicles</a></li>
                    <li><a href="getcontent.php?cat=3">Technology Items</a></li>
                    <li><a href="getcontent.php?cat=4">Household Items</a></li>
                    <li><a href="getcontent.php?cat=5">Wanted</a></li>
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