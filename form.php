<?php


$servername = "localhost";
$username = "wordpress";
$password = "NwEnDVuo";
$db = "wordpress";

$conn= new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST["country"]))
{
$country=$conn->real_escape_string($_POST["country"]);
$sql1="SELECT city FROM wp_map WHERE country='$country'";
$result1= $conn->query($sql1);	


	while($row1 = $result1->fetch_array())
	{
	$rows1[] = $row1;
	}

}

$sql = "SELECT DISTINCT(country) FROM wp_map";
$result= $conn->query($sql);

while($row = $result->fetch_array())
{
$rows[] = $row;
}


$conn->close();
?>
<html>
<body>


<?php
if(isset($_POST["country"]))
{ 
?>
<h3>Select Country</h3>
<form action="" method="post">
    <select name="country">
    <?php echo '<option value="'.$_POST["country"].'">'.$_POST["country"].'</option>';
         foreach($rows as $row)
		echo '<option value="'.$row['country'].'">'.$row['country'].'</option>';
	?>
    </select>
    <input type="submit" name="submit" value="Go"/>
</form>
<h3>Select City</h3>
<form action="map.php" method="post">
<select name="city">
        <?php foreach($rows1 as $row1)
		echo '<option value="'.$row1['city'].'">'.$row1['city'].'</option>';
	?>
</select>
<input type="hidden" name="country1" value="<?php echo $_POST["country"]; ?>"/>
<input type="submit" name="submit" value="Go"/>
</form>

<?php 
}
else
{  ?>
<h3>Select Country</h3>
<form action="" method="post">
    <select name="country">
        <?php foreach($rows as $row)
		echo '<option value="'.$row['country'].'">'.$row['country'].'</option>';
	?>
    </select>
    <input type="submit" name="submit" value="Go"/>
</form>
<?php	
}
?>

</body>
</html> 
