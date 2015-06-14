<?php 
$dbc = mysqli_connect( 'localhost', 'root', '', 'seminar2baza' ) or die('Pogreška kod spajanja na bazu podataka.');

if (!$dbc) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="DELETE FROM `sobe` WHERE id='$_POST[id]'";
$result=mysqli_query($dbc,$sql);
if(! $result){
	die('Location: /seminar/dostupne2.php');
}else{
('Location: /seminar/dostupne2.php');
}
	



/*
if (mysqli_query($dbc, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($dbc);
}
 */
 
mysqli_close($dbc);
header( 'Location: /seminar/dostupne2.php' ) ;
?>