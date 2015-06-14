<?php

if ($_SESSION['rola']!='admin'){
	header( 'Location: /seminar/dostupne.php' ) ;
}
?>