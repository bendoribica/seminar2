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
				
				<li>
					<a href="onama.php"><?php echo $lang['MENU_ABOUT_US']; ?></a>
				</li>
				<li class="active">
					<a href="kontakt.php"><?php echo $lang['MENU_CONTACT']; ?></a>
				</li>
				<li>
					<a href="kontakt.php?lang=en"><img src="images/en.png" /></a>
					<a href="kontakt.php?lang=hr"><img src="images/hr.png" /></a>
				</li>
				</ul>
				
		</div>
	</div>
	<div id="contents">
		<div class="section">
			<h1><?php echo $lang['MENU_CONTACT']; ?></h1>
			<p>
			<?php echo $lang['CONTACT_MSG']; ?>
			</p>
			<form name="contactform" method="post" action="send_form_email.php">
 
<table width="450px">
 
<tr>
 
 <td valign="top">
 
  <label for="first_name">First Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="first_name" maxlength="50" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top"">
 
  <label for="last_name">Last Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="last_name" maxlength="50" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="email">Email Address *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="email" maxlength="80" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="telephone">Telephone Number</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="telephone" maxlength="30" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="comments">Comments *</label>
 
 </td>
 
 <td valign="top">
 
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 
 </td>
 
</tr>
 
<tr>
 
 <td colspan="2" style="text-align:center">
 
  <input type="submit" value="Submit">
 
 </td>
 
</tr>
 
</table>
 
</form>

		</div>
		<div class="section contact">
			<p>
				<?php echo $lang['CONTACT_PHONE']; ?> <span>01-2567-638</span>
			</p>
			<p>
				<?php echo $lang['CONTACT_MSG2']; ?> <span><?php echo $lang['LOGO_NAME']; ?>,<br> Konavovska 2, 10000 Zagreb</span>
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