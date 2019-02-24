<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Devoir</title>
	<style >	
	

	table,th,td{text-align: center;
	border: 2px dashed black; }
		</style>
	
</head>

<body>
<center>	
<i text-align="center">Le Tableau demander avec PHP </i>
<br>
<br>
<br>


<table border="1" width="20%" >
	
			<th colspan="4"> <a href="hmd.jpg"> <img src="hmd.jpg" title="Clique moi" style="height: 200px; width:170px;" > </a> </th>

	<?php 
				$pers = array('Prenom'  => 'Mohamed','Nom' =>'El Jili' ,'Age' =>'20' ,'Telephone' =>'781724888' , 'E-MAIL' => 'eljilimed@gmail.com','Id_Slacke' =>'El Jili','Id_GetHub' =>'Eljili'
				);
				?>
				
<?php  foreach ($pers as $p => $p_value) {
?>


	
	<tr>
		
					<td> <?php echo $p    ; ?></td>
		 			<td> <?php echo  $p_value ;?></td>


		 			</tr>

<?php } ?>

</table>
</center>
</body>
</html>