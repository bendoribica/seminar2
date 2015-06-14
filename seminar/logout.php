<?php
	session_start();
	session_destroy();
	
	header( 'Location: /seminar/dostupne.php' ) ;
?>