<?
session_start();
if(isset($_SESSION["user"]))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Ingredients Link - Order Tracking System (OTS) - Reports/title>
<link rel="stylesheet" type="text/css" href="style.css" />

<? include("include/phpgrid.php"); ?>
<? include("db.php"); ?>
<? include("inc/top.php"); ?>
</head>


<body>
<div id="mainContainer">
<table border="0" cellspacing="0" cellpadding="0" width="100%">
<tr>    
	<td valign="top">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
		<tr>

		<td valign="top" style="background-color: #ededed;"><a href="index.html"><img src="/images/ost_banner.jpg" alt="Order Tracking System" border="0" style="float: left;" /></a>
        
 		<div style="float: right; width: 200px; padding-right: 15px; font-family: Arial, Helvetica, sans-serif; text-align: right;">
        <b><? echo $username; ?></b>&nbsp;&nbsp;|&nbsp;&nbsp;
        <b><? echo $userRole; ?></b><br />
        <b>(<a href="exe/logout.php">logout</a>)</b>
        </div>      
        
        <div style="clear: both;"></div>
        
        
        </td>
		</tr>
        <tr>
        <td><? include("inc/menu.php"); ?></td>
		</tr>
<tr>
<td valign="top" width="100%">


<div id="mainContent">
<table cellpadding="0" cellspacing="0" width="100%">
<tr>
<td valign="top" width="100%">
<!-- printer:start -->
<!-- START CONTENT -->
<h1>Reports</h1>

Since you are logged in as an <b>Administrator</b> you have special rights to create and view custom reports from the system.  
<p />



<br /><br /><br /><br /><br />
<br /><br /><br /><br /><br />
</td>
</tr>
</table>
<!-- END CONTENT -->

</div>
</td>
</tr>
</table>

</td>
</tr>


<tr>
<td colspan="3">

<div style="background-color: #303030; height: 22px; width: 100%; text-align: center; font-size: 11px; color: #CCCCCC; font-family: Arial; padding-top: 8px;">&copy 2009 - Ingredients Link
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://www.ingredientslink.com/" target="_blank">Ingredients Link</a>

&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="http://www.skydev-tech.com" target="_blank">SkyDev Technologies</a>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="/images/icons/valid-xhtml.gif" />
&nbsp;&nbsp;&nbsp;&nbsp;
<img src="/images/icons/php-power-micro.png" />
&nbsp;&nbsp;&nbsp;&nbsp;
<img src="/images/icons/gridpowered.png" />

</div>
</td>
</tr>


</table>
</div>

<?
} else {

header("location: login.php");
}
?>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-3474072-19");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>