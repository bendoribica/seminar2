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
					<a href="novosti.php"><?php echo $lang['MENU_NEWS']; ?></a>
				</li>
				<li>
					<a href="onama.php"><?php echo $lang['MENU_ABOUT_US']; ?></a>
				</li>
				<li>
					<a href="kontakt.php"><?php echo $lang['MENU_CONTACT']; ?></a>
				</li>
				<li>
					<a href="novosti.php?lang=en"><img src="images/en.png" /></a>
					<a href="novosti.php?lang=hr"><img src="images/hr.png" /></a>
				</li>
				</ul>
				
		</div>
	</div>
	<div id="contents">
		<div class="main">
			<h1>Novosti</h1>
			<ul class="news">
				<li>
					<div class="date">
						<p>
							<span>05</span>
							2015
						</p>
					</div>
					<h2>Novosti: Otvoreno novo mjesto za smještaj <span>Benjamin Ratković</span></h2>
					<p>
					14.05.2015 otovoreno je novo mjesto za studente na Borongaju. U dogovoru s ministarstvom, 
					napravljen je zasebni odvojak, gdje će moći biti smješteni i srednjoškolci.
					</p>
				</li>
				<li>
					<div class="date">
						<p>
							<span>04</span>
							2015
						</p>
					</div>
					<h2>Novosti: Prijave za nove smještaje <span>Davor Jug</span></h2>
					<p>
					Od 4-og	mjeseca 2015 počeli smo sa mogućnoštu prijavljivanja smještaja za sve koju mogu ponuditi
					studentima smještaj. Potrebno se ulogirati, popuniti podatke te ispuniti sve potrebno o vašem smještaju.
					</p>
				</li>
				
			</ul>
		</div>
		<div class="sidebar">
			<h1>Popular Posts</h1>
			<ul class="posts">
				<li>
					<h4 class="title"><a href="post.html">Making It Work</a></h4>
					<p>
						I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.
					</p>
				</li>
				<li>
					<h4 class="title"><a href="post.html">Designs and Concepts</a></h4>
					<p>
						I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.
					</p>
				</li>
				<li>
					<h4 class="title"><a href="post.html">Getting It Done!</a></h4>
					<p>
						I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.
					</p>
				</li>
			</ul>
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