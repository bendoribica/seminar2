<?php
include_once 'jezik.php';
include 'authdostupne.php';
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
	<div id="contents">
		<div class="features">
			<h1><?php echo $lang['HOME_PRON']; ?></h1>
			<p>
			<?php echo $lang['DOST_1']; ?>
			</p>
			
			<div>
			<div class="column column-8">
			<h2>Login</h2>
				<img src="slike/login.jpg" alt="Img" height="200" width="250">
				
				</div>
				<div class="column column-4">
    
	<form action="login.php" method="post">
		<p> 
          <label for="username" class="uname" data-icon="u" >Username:</label>
          <input id="username" name="username" required="required" type="text" placeholder="Username"/>
		  
     </p>
     <p> 
          <label for="password" class="youpasswd" data-icon="p">Password:</label>
          <input id="pass" name="pass" required="required" type="password" placeholder="Password" /> 
     </p>
     
     <p class="login button"> 
		   <button type="submit"><?php echo $lang['LOGIN_NEXT']; ?></button>
	 </form>
	</div>
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