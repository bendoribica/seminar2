<?php
include_once 'jezik.php';
include 'authunos.php';

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

<div class="clearfix">
	
<h1><?php echo $lang['UNOS_PRON']; ?><a href="dostupne2.php" class="btn"><?php echo $lang['UNOS_PRON23']; ?></a><a href="logout.php" class="btn">Logout</a></h1>

</div>
<div class="features">
<div class="column column-7">
<img src="slike/door.jpg" alt="Img" height="342" width="368">
</div>

<div class="column column-5">
<p>
</p>
<h2><?php echo $lang['UNOS_PRON2']; ?></h2>

<form action="unosbaza.php" method="post">
<?php echo $lang['UNOS_PRON3']; ?>  <input type="text" name="kvart" /><br><br>
<?php echo $lang['UNOS_PRON4']; ?>   <input type="text" name="opis" /><br><br>
<?php echo $lang['UNOS_PRON5']; ?> <input type="text" name="adresa" /><br><br>
<?php echo $lang['UNOS_PRON6']; ?> <input type="text" name="cijena" /><br><br>
<?php echo $lang['UNOS_PRON7']; ?> <input type="text" name="naziv" /><br><br>
Telefon: <input type="text" name="telefon" /><br><br>


<p class="login button"> 
		   <button type="submit"><?php echo $lang['LOGIN_NEXT']; ?></button>
	</p>
	
</form>
	</div>
	
	<div class="column column-7">
<form action="brisanjebaza.php" method="post">
<?php echo $lang['KON_PRM']; ?><input type="text" name="id" /><br><br>
<p class="login button"> 
		   <button type="submit"><?php echo $lang['LOGIN_NEXT']; ?></button>
	</p>
</div>
	
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