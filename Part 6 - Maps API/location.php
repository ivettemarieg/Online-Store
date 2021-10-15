<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css"/>
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>        
        <title>Current Location</title>
    </head>
    <body>
        <div data-role="page">
            <div data-role="header"><h1>Current Location</h1></div>
            <div data-role="content" class="ui-content">
                <p id="demo">Click the button to get your position.</p>
                <button onClick="getLocation()">Get Location</button>
                <div id="mapholder"></div>
                    <script src="https://maps.google.com/maps/api/js?key="></script>
                    <script>
                        var x = document.getElementById("demo");
                        function getLocation() {
                            if (navigator.geolocation) {
                                navigator.geolocation.getCurrentPosition(showPosition, showError);
                            } else { 
                                x.innerHTML = "Geolocation is not supported by this browser.";
                            }
                        }
                        function showPosition(position) {
                            var lat = position.coords.latitude;
                            var lon = position.coords.longitude;
                            var latlon = new google.maps.LatLng(lat, lon)
                            var mapholder = document.getElementById('mapholder')
                            mapholder.style.height = '250px';
                            mapholder.style.width = '300px';

                            var myOptions = {
                            center:latlon,zoom:14,
                            mapTypeId:google.maps.MapTypeId.ROADMAP,
                            mapTypeControl:false,
                            navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
                            }

                            var map = new google.maps.Map(document.getElementById("mapholder"), myOptions);
                            var marker = new google.maps.Marker({position:latlon,map:map,title:"You are here!"});
                        }

                        function showError(error) {
                            switch(error.code) {
                                case error.PERMISSION_DENIED:
                                    x.innerHTML = "User denied the request for Geolocation."
                                    break;
                                case error.POSITION_UNAVAILABLE:
                                    x.innerHTML = "Location information is unavailable."
                                    break;
                                case error.TIMEOUT:
                                    x.innerHTML = "The request to get user location timed out."
                                    break;
                                case error.UNKNOWN_ERROR:
                                    x.innerHTML = "An unknown error occurred."
                                    break;
                            }
                        }
                    </script>
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