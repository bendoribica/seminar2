<?php
	if (session_status() == PHP_SESSION_NONE)
		session_start();
	if( isset( $_POST['username'] ) && isset( $_POST['pass'] ) )
	{
		$user = $_POST['username'];
		$pass = $_POST['pass'] ;
		$logiran='ne';
		
		$dbc = mysqli_connect( 'localhost', 'root', '', 'seminar2baza' ) or die('Pogreška kod spajanja na bazu podataka.');
		
		$sql="SELECT * FROM users WHERE user='$user' and JMBAG='$pass'";
		$result=mysqli_query($dbc,$sql);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

		$rola=$row['rola'];
		
		if ($rola=='admin'){
			$_SESSION['rola']=$rola;
			header("location: unos.php");
		} elseif ($rola=='student'){
			$_SESSION['rola']=$rola;
			header("location: dostupne2.php");
		} else {
			header("location: dostupne.php");
		}
		
		mysqli_close($dbc);
	}
	
?>