<DOCTYPE html>
    <html>
    <head>                
                <style>
                        .menu{height=auto;}
                </style>
                <title>Place An Ad</title>
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
                                                <li><h1 width>Place An Ad</h1></li>
                                                <li><a href="#rightPanel" data-role="button" data-icon="bars" name="menu"></a></li>
                                        </ul>
                                </div>
                        </div>
                        <div data-role="content" class="ui-content">
                            <form id="form1" name="form1" method="post" action="ad_record.php">
                                
                                <label>Category Code</label>
                                <select name="cat_code" data-native-menu="false">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>

                                <label for="cat_name">Category Name</label>
                                <select name="cat_name" data-native-menu="false">
                                    <option value="pet">PETS</option>
                                    <option value="vehicles">VEHICLES</option>
                                    <option value="tech">TECHNOLOGY ITEMS</option>
                                    <option value="house">HOUSEHOLD ITEMS</option>
                                    <option value="wanted">WANTED</option>
                                </select>
                                
                                <label for="feature_item">Featured</label>
                                <select name="feature_item" id="feature_item" data-role="slider">
                                    <option value="0">NO</option>
                                    <option value="1">YES</option>
                                </select>
                                <label>Post Description</label>
                                <input type="text" name="content" id="content" placeholder="Enter a Description"/>

                                <button type="submit">Submit</button>

                            </form>

                        </div>
                        <div data-role="footer">
                                <div data-role="navbar">
                                        <ul>
                                                <li><a href="https://teach.park.edu/~igueits6197/part-5/home.php" data-icon="home" data-position="fixed"></a></li>
                                                <li><a href="https://teach.park.edu/~igueits6197/part-5/categories.php">See More Ads</a></li>
                                                <li><a href="https://teach.park.edu/~igueits6197/final-project/index.php">Place an Ad</a></li>
                                        </ul>
                                
                                </div>
                        </div>
                </div>
        </body>
    </html>
