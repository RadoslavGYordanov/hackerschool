<?php 

$json_string=file_get_contents("https://restcountries.eu/rest/v1/all");
$parsed_json=json_decode($json_string,TRUE);


$servername = "localhost";
$username = "wordpress";
$password = "NwEnDVuo";
$db = "wordpress";

$conn= new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql1="TRUNCATE TABLE wp_country";
$conn->query($sql1);


foreach ($parsed_json as $arr)
{
	$country=$conn->real_escape_string($arr["name"]);
	if($arr["capital"]!=NULL)
	{
		$capital=$conn->real_escape_string($arr["capital"]);
	}
	else
	{
		$capital="No capital";
	}	
	if(isset($arr["latlng"][0]))
	{
		$lat=$conn->real_escape_string($arr["latlng"][0]);
	}
	else
	{
		$lat=0;
	}
	if(isset($arr["latlng"][1]))
	{
		$lng=$conn->real_escape_string($arr["latlng"][1]);
	}
	else
	{
		$lng=0;
	}

	if(!($lat==0 && $lng==0))
	{
	$sql="INSERT INTO wp_country (lat, lng, country, capital) VALUES ('$lat', '$lng', '$country', '$capital')";
	$conn->query($sql);
	}

}

$conn->close();

include 'form1.php';



?>
