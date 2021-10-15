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
                                <form action="authenticate.php" method="post">
                                    <input type="text" name="username" placeholder="Username"></br>
                                    <input type="text" name="password" placeholder="Password"></br>
                                    <button type="submit" name="submit">Submit</button>
                                </form>
                        </div>

                </div>
        </body>
</html>