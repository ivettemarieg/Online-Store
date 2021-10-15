<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css"/>
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>        
        <title>Posting Page</title>
    </head>
    <body>
        <div data-role="page">
            <div data-role="header"><h1>Take a photo</h1></div>
            <div data-role="content" class="ui-content">
                <form action="upload_file.php" method="post" enctype="multipart/form-data">
                    <h2> press Browse to take photo</h2>
                    <input type="file" name="fileToUpload" accept="image/*" capture="user" id="fileToUpload"> 
                    <h2> press Upload to save to the cloud</h2>
                    <input type="submit" value="Upload">
                </form>
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