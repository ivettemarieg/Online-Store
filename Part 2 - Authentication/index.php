<!DOCTYPE html>

<html>
    <head>
        <title>Welcome</title>        
        <style>
            body{
                background-color: #74EBD5;
                background-image: linear-gradient(90deg, #74EBD5 0%, #9FACE6 100%);

            }
            .simple{
                text-align: center;
                font-size: 50px;
                color: rgb(228, 236, 238);
                text-decoration: underline;
            }
            .home{
                display: flex;
                justify-content: center;
                align-items: center;
                text-decoration: none;
                background-color: #330867;
                border-color: #330867;
                border-width:5px;  
                border-style: solid;
                border-radius: 12px;
                font-size: 50px;
                color:white;
            }

            .home:hover{
                background-color: white;
                border-color: white;
                color: #330867;
            }

            .bigfoot{
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 50%;
                border-radius: 25px;
            }
            
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

    </head>
    <body>
        <div data-role="page" id="homepage">
            <div data-role="header"><h1 class="simple">Welcome to the Simple Market!</h1></div>
            <div data-role="content"><img class="bigfoot" src="bigfoot.jpg"></div> 
            <div data-role="footer">
                <h4><a class="home" href="https://teach.park.edu/~igueits6197/part-1">Home</a></h4>
            </div>
        </div>
    </body>
</html>