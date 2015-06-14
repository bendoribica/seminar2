<?php
include_once 'jezik.php';
include 'authdostupne2.php';

$dbc = mysqli_connect( 'localhost', 'root', '', 'seminar2baza' ) or die('Pogreška kod spajanja na bazu podataka.');
$popis = mysqli_query($dbc,"SELECT * FROM sobe");
                while($row =  mysqli_fetch_array($popis,MYSQLI_ASSOC))
                {
                        $rez[] = $row;
                }

?>

<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php echo $lang['PAGE_TITLE']; ?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="grid.css" />
	<link rel="stylesheet" href="cssswitch/style.css">
</head>
<body>
	<div id="header">
		<div>
			<div class="logo">
				<a href="index.php"><?php echo $lang['LOGO_NAME']; ?></a>
			</div>
			<ul id="navigation">
				<li>
					<a href="index.php"><?php echo $lang['MENU_HOME']; ?></a>
				</li>
				<li class="active">
					<a href="dostupne.php"><?php echo $lang['MENU_ROOMS']; ?></a>
				</li>
				
				<li>
					<a href="onama.php"><?php echo $lang['MENU_ABOUT_US']; ?></a>
				</li>
				
				<li>
					<a href="kontakt.php"><?php echo $lang['MENU_CONTACT']; ?></a>
				</li>
								
				<li>
					<a href="dostupne.php?lang=en"><img src="images/en.png" /></a>
					<a href="dostupne.php?lang=hr"><img src="images/hr.png" /></a>
				</li>
				</ul>
				
		</div>
	</div>


	
<div id=contents>
	<div class="features">
<h1><?php echo $lang['HOME_PRON']; ?></h1>
<form action="logout.php" >
<button class="btn" type="submit">Logout</button> 
</form>

<?php
 if (isset($_SESSION['rola'])) {
    if ($_SESSION['rola']=='admin'){
	
	echo"<a href='unos.php'><button class='btn' type='submit'>Unos</button></a>";
}

}

 ?>

</h1>	
<?php   foreach ($rez as $variable => $value): ?>


			
						
			<div>
				<div class="column column-7">
				<p>
				
				<img src="slike/<?php echo $value['naziv_slike']?>" alt="Img" height="250" width="300">
				
				</p>
				<p>
				<?php echo "ID=".$value['id']?>
				<?php echo $value['adresa_sobe']?>
				</p>
				</div>
				<div class="column column-5">
				<p>
				<h2><?php echo $value['kvart_sobe']?></h2>
				</p>
				<p>
				<?php echo $value['opis_sobe']?>
				</p>
				<h3>Cijena</h3>
				<p>
				<?php echo $value['cijena_sobe']?>
				</p>
				<p>
				<h3><?php echo $lang['CONTACT_PHONE']; ?></h3>
				</p>
				<p>
				<?php echo $value['telefon_sobe']?>
				</p>
				<div class="container">
    
				</p>
				
				</div>
			</div>
		
			</div>
			
	

			
<?php endforeach; ?>			
			</div>		
	</div>	
			
			


	
	
	
	
	<div id="footer">
		<div class="clearfix">
			<div id="connect">
				<a href="https://www.facebook.com/" target="_blank" class="facebook"></a>
			</div>
			<p>
				<?php echo $lang['FOOTER']; ?>
			</p>
		</div>
	</div>
</body>
</html>