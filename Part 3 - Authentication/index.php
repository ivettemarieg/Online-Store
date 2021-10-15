<!DOCTYPE html>
<html>
    <head>
        <title>Welcome</title>        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css"/>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

    </head>
    <body>
        <div data-role="page" id="homepage">
            <div data-role="header"><h1 class="simple">Welcome to the Simple Market!</h1></div>
            <div data-role="content">
                <img class="bigfoot" src="bigfoot.jpg"></br>
                <form class = "login" action="authenticate.php" method="post">  
                        <input class="entries" type="text" name="username" placeholder="Username"></br>
                        <input class="entries" type="password" name="password" placeholder="Password"></br>
                        <button class="entries" type="submit" name="submit">Submit</button>
                </form>
            </div> 
            <div data-role="footer"></div>
        </div>
    </body>
</html>