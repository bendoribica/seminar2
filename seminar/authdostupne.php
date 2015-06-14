<?php
if (isset($_SESSION['rola'])) {
    if (($_SESSION['rola']=='admin')|| ($_SESSION['rola']=='student')){
	
	header( 'Location: /seminar/dostupne2.php' ) ;
}

}

?>