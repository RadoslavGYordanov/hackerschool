<?php
   /*
   Plugin Name: Google Map Generator
   Description: a plugin to read from database and update map information
   Version: 1.1
   Author: Radoslav Yordanov
   License: GPL2
   */

add_action('template_redirect','load_map');
function load_map(){

if(is_page('test-page'))
{
$servername = "localhost";
$username = "wordpress";
$password = "NwEnDVuo";
$db = "wordpress";

$conn= new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

$sql = "SELECT * FROM wp_map";
$result= $conn->query($sql);




if ($result->num_rows > 0) 
{
    // output data of each row
$array = array();
$counter=0;
	while($row = $result->fetch_assoc())
	{
		$array[] = $row;
		$counter++;
 	}

 }
    else 
	{
    	//echo "0 results";
	} 

$conn->close();

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
        var myLatLng = {lat: 42.682781, lng: 23.302511};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 3,
          center: myLatLng
        });
	var contentString;
	var infowindow;
	var marker;

<?php 
	for($i=0;$i<$counter;$i++){
        //$name = $array[$i]["Title"];
	//$street = $array[$i]["Street"];
	$country = $array[$i]["country"];
	$city = $array[$i]["city"];
        //$addr = $location['location_address'];
        $map_lat = $array[$i]["lat"];
        $map_lng = $array[$i]["lang"];
        ?>

       contentString="<?php echo "<strong>$city</strong><br>$country<br>" ?>";
   var infowindow_<?php echo $i ?> = new google.maps.InfoWindow({
          content: contentString
   });

   myLatLng = {lat: <?php echo $map_lat?>, lng: <?php echo $map_lng?>};
   var marker_<?php echo $i ?> = new google.maps.Marker({
          position: myLatLng,
          map: map
        });

	marker_<?php echo $i ?>.addListener('click', function() {
	    infowindow_<?php echo $i ?>.open(map, marker_<?php echo $i ?>);
	  });


<?php } //end for loop ?>
 }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdyUqpuYjPYQDQUBwoThtAd6xciyBuIQA&callback=initMap">
    </script>
  </body>
</html>

<?php } 
} ?>
