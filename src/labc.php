<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>labc</title>
</head>
<body>
<?php echo $_SERVER['HTTP_USER_AGENT']; ?>
<br>
<?php
	$date = date("d-m-Y");
	echo 'adresse ip est '.$date;?>
    <br>
    <?php
    echo 'adresse ip est '.$_SERVER["REMOTE_ADDR"]; // getenv("REMOTE_ADDR"); pour apache
    ?>
    
<div>
	<?php
	include("adresse.txt");
	?>
    <CENTER>
	<?php
	echo "Dernière modification le ";
	echo date( "d/m/Y à H\hi", filemtime( "adresse.txt" ) );
	
	echo "<P> Autre methode: ";	
	$jour = date("j",filemtime( "adresse.txt" ));
	$mois = date("n",filemtime( "adresse.txt" ));
	$annee = date("Y",filemtime( "adresse.txt"  ));
	$heure = date("H\hi",filemtime( "adresse.txt"  ));
	$moisfrancais = array ( 1 => "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre");
	echo ("Dernière modification le ".$jour." ".$moisfrancais[$mois]." ".$annee." à ".$heure); 
	/*l'anti slash devant le h */
	// permet d'afficher h
	# au lieu de l'heure....
	?>
</CENTER>
</div>
</body>
</html>