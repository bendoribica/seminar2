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
				<li>
					<a href="index.php"><?php echo $lang['MENU_HOME']; ?></a>
				</li>
				<li>
					<a href="dostupne.php"><?php echo $lang['MENU_ROOMS']; ?></a>
				</li>
				
				<li class="active">
					<a href="onama.php"><?php echo $lang['MENU_ABOUT_US']; ?></a>
				</li>
				<li>
					<a href="kontakt.php"><?php echo $lang['MENU_CONTACT']; ?></a>
				</li>
				<li>
					<a href="onama.php?lang=en"><img src="images/en.png" /></a>
					<a href="onama.php?lang=hr"><img src="images/hr.png" /></a>
				</li>
				</ul>
				
		</div>
	</div>
	<div id="contents">
		<div id="about">
			<h1><?php echo $lang['HOME_HEAD1']; ?></h1>
			<h2><?php echo $lang['HOME_HEAD2']; ?></h2>
			<p>
			<?php echo $lang['HOME_TEX5']; ?>
			</p>
			<h2><?php echo $lang['HOME_HEAD3']; ?></h2>
			<p>
			<?php echo $lang['HOME_TEX6']; ?>
			</p>
			<h2><?php echo $lang['HOME_HEAD4']; ?></h2>
			<p>
			<?php echo $lang['HOME_TEX7']; ?>
			</p>
			
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