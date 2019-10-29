<?php
$prenom ="Jeremy"; 
$age= "19";			
$myBool = true;		
$moyenne= "14.8";	


?>


<html>
	<table>
		<tr>
		<th>Type</th>
		<th>Nom</th>
		<th>Valeur</th>
		</tr>
		
		<tr>
		<td>chaine de caractères</td>
		<td>$prenom</td>
		<td><?php echo "$prenom" ?></td>
		</tr>
		
		<tr>
		<td>Entier</td>
		<td>$age</td>
		<td><?php echo "$age" ?></td>
		</tr>
		
		<tr>
		<td>Booléen</td>
		<td>$myBool</td>
		<td><?php echo "$myBool" ?></td>
		</tr>

		<tr>
		<td>Nombre à virgule flottante</td>
		<td>$moyenne</td>
		<td><?php echo "$moyenne " ?></td>
		</tr>





	</table>
</html>
