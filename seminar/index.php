<?php
include_once 'jezik.php';
?>

<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php echo $lang['PAGE_TITLE']; ?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="grid.css" />
</head>
<body>
	<div id="header">
		<div>
			<div class="logo">
				<a href="index.php"><?php echo $lang['LOGO_NAME']; ?></a>
			</div>
			<ul id="navigation">
				<li class="active">
					<a href="index.php"><?php echo $lang['MENU_HOME']; ?></a>
				</li>
				<li>
					<a href="dostupne.php"><?php echo $lang['MENU_ROOMS']; ?></a>
				</li>
				
				<li>
					<a href="onama.php"><?php echo $lang['MENU_ABOUT_US']; ?></a>
				</li>
				
				<li>
					<a href="kontakt.php"><?php echo $lang['MENU_CONTACT']; ?></a>
				</li>
				
				<li>
					<a href="index.php?lang=en"><img src="images/en.png" /></a>
					<a href="index.php?lang=hr"><img src="images/hr.png" /></a>
				</li>
				</ul>
				
		</div>
	</div>

	
	<div id="contents">
	
	<div class="clearfix">
			
			<div>
			<div class="column column-6">
				<h1><?php echo $lang['HOME_SMJESTAJ']; ?></h1>
				<h2><?php echo $lang['HOME_FINDEASY']; ?></h2>
				<p>
					<?php echo $lang['HOME_FIND']; ?><span><a href="dostupne.php" class="btn"><?php echo $lang['HOME_DONTWORRY']; ?></a><b><p><?php echo $lang['HOME_PRONADIMM']; ?></b></p></span>
				</p>
				</div>
				
    
				
				<div class="column column-6">
				<img src="slike/head.jpg" alt="Img" height="342" width="368">
			</div>
			
			
			</div>
		</div>
		<div id="tagline" class="clearfix">
			<h1><?php echo $lang['HOME_PRON']; ?></h1>
			<div>
				<p>
				<?php echo $lang['HOME_TEX1']; ?>
				</p>
				<p>
					<?php echo $lang['HOME_TEX2']; ?>
				</p>
				<p>
					<?php echo $lang['HOME_TEX3']; ?>
				</p>
			</div>
			<div>
				<p>
				<?php echo $lang['HOME_TEX4']; ?>
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