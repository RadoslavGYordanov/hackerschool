<?php


echo "<form action=\"\" method=\"post\">
Enter a number: <input type=\"text\" name=\"num\"><br>
<input type=\"submit\" value=\"Choose\">";




function isPrime($num)
{
	$prime=1;
	if($num==1)
	{	
		$prime=0;
	}	
	elseif($num==2)
	{
		$prime=1;
	}
	else
	{
		for($i=2;$i<sqrt($num)+1;$i+=1)
		{
			if($num%$i==0)
			{	
				$prime=0;
				break;
			}			
		}
	}
	return $prime;
}
if(isset($_POST['num']))
{
$num1 = $_POST['num'];

if(isPrime($num1))
	echo "</br>$num1 is prime.";
else
	echo "</br>$num1 isn't prime.";
}

?>

