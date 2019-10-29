<?php


$nombre = 1;
echo $nombre;	
echo "<br />";	

while($nombre<100)
{
$nombre=$nombre +1;

if(($nombre % 3 ==0)&&($nombre % 5==0))
{
echo "FizzBuzz";
echo "<br />";	
	
}
else if ($nombre % 3 ==0)
{
echo "Fizz";
echo "<br />";	
}
else if ($nombre % 5 ==0)
{
echo "Buzz";
echo "<br />";	
}
else
{
echo $nombre;	
echo "<br />";		
}
}


?>	