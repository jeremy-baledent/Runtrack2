<?php
$nombre = 0;

while ($nombre<100)
{
$nombre=$nombre+1;

if (($nombre>=0)&&($nombre<=20))
{
	echo "<i>$nombre</i>";
	echo "<br/>";	
}

else if ($nombre==42)
{
echo "laPlateforme_";
echo "<br/>";	
}

else if (($nombre>=25)&&($nombre<=50))
{
	echo "<u>$nombre</u>";
	echo "<br/>";
	
}


else
{

	echo "$nombre";
	echo "<br/>";	
}
}




?>