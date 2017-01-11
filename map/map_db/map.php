<?php $servername = "localhost";
$username = "wordpress";
$password = "NwEnDVuo";
$db = "wordpress";

$conn= new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

$city=$conn->real_escape_string($_POST["city"]);
$country=$conn->real_escape_string($_POST["country1"]);

$sql = "SELECT * FROM wp_map WHERE country='$country' AND city='$city'";
$result= $conn->query($sql);

$row = $result->fetch_array();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Google Map</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
	width: 100%;
	
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>

      function initMap() {
        var myLatLng = {lat: <?php echo $row['lat'] ?>, lng: <?php echo $row['lang']?>};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: myLatLng
        });
	var contentString="<?php echo "<strong>$country</strong><br>City:$city<br>" ?>";
	var infowindow = new google.maps.InfoWindow({
          content: contentString
  	 });
	var marker = new google.maps.Marker({
          position: myLatLng,
          map: map
        });

	marker.addListener('click', function() {
	    infowindow.open(map, marker);
	  });





 			}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdyUqpuYjPYQDQUBwoThtAd6xciyBuIQA&callback=initMap">
    </script>
  </body>
</html>
