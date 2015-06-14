<?php

if ($_SESSION['rola']!='admin')  {
	if($_SESSION['rola']!='student'){
	header( 'Location: /seminar/dostupne.php' ) ; }
}
?>