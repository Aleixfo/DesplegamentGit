<?php 

session_start();

if(isset($_SESSION['contador'])){

    $_SESSION['contador']++;
	echo 'Numero de visitas: ' . $_SESSION['contador'];

}else {
	$_SESSION['contador'];
	echo 'Benvingut per primera vegada';
}


?>
