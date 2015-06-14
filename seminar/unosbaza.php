<?php 
$dbc = mysqli_connect( 'localhost', 'root', '', 'seminar2baza' ) or die('Pogreška kod spajanja na bazu podataka.');

$kvart=$_POST[kvart];
$opis=$_POST[opis];
$adresa=$_POST[adresa];
$cijena=$_POST[cijena];
$naziv=$_POST[naziv];
$telefon=$_POST[telefon];

if (!$dbc) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="INSERT INTO sobe (kvart_sobe, opis_sobe, adresa_sobe, cijena_sobe, naziv_slike,telefon_sobe) 
VALUES
('$kvart','$opis','$adresa','$cijena','$naziv','$telefon')";

if (mysqli_query($dbc, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($dbc);
}
 
 
mysqli_close($dbc);
header( 'Location: /seminar/dostupne2.php' ) ;
?>