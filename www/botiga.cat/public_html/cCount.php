<?php 

if(isset($_COOKIE['contador'])){

	setcookie('contador', $_COOKIE['contador']+1, time()+24*31);
	echo 'Numero de visitas: ' . $_COOKIE['contador'];

}else {
	setcookie('contador',1 , time()+24*31);
	echo 'Benvingut per primera vegada';
}


?>

