<?
session_start();
if(isset($_SESSION["user"]))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>M2 - News & Announcements - University of Missouri School of Medicine - Clinical Advising Tool For Students & Advisors</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script type="text/javascript" src="/js/jqtransformplugin/jquery.jqtransform.js"></script>
<link rel="stylesheet" type="text/css" href="/js/jqtransformplugin/jqtransform.css" />
<? include("inc/db.php"); ?>
<? include("inc/top.php"); ?>

<style>
table.nounderline a { text-decoration: none; color: #59879a; font-size: 11px; }
table.nounderline a:hover { text-decoration: none; color: #7aabbf; font-size: 11px; }

table.nounderline strong { font-size: 11px; }
</style>

</head>

<body>
<object> 
	<map name="image_map" id="image_map"> 
	  <area coords="540,86,698,119" href="http://medicine.missouri.edu/" onclick="window.open(this.href); return false;" alt="University of Missouri School of Medicine" /> 
	</map>
</object>

<div id="mainContainer">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <tr>
      <td valign="top" colspan="2"><a href="/"><img src="images/main-banner-new2b.jpg" alt="Clinical Advising Tool for Students &amp; Advisors (CATSA)" border="0" usemap="#image_map" /></a></td>
    </tr>
    <tr>
      <td><? if(isset($_SESSION["user"])) { ?>
        <? include("inc/menu.php"); ?>
        <? } else { ?>
        <? include("inc/menu2.php"); ?>
        <? } ?></td>
      <td><? include("inc/userinfo.php"); ?></td>
    </tr>
    <tr>
      <td valign="top" width="600">
      
      <div id="mainContent"> 
<h1>News & Announcements</h1>



<table class="nounderline">
<tr>
<td valign="top" style="width: 325px;">
<a name="m4"></a>
<h2>M2 Students</h2>
<span style="position: relative; top: -16px; font-weight: bold; font-size: 11px;">Class of 2016</span>
<br /><br />


<b><u>February 12, 2014</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2014/Family Medicine Clerkship - Information.pdf" target="_blank">Family Medicine Clerkship</a></li>
<br /><br />

<b><u>January 27, 2014</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2014/M3 Scramble Preference email.pdf" target="_blank">M3 Enrollment Information</a></li>
<br /><br />



</td>
</tr>
</table>





<br /><br /><br /><br /><br /><br /><br />


</div>
</td>


<td valign="top">
      
      <? include("inc/right-steps.php"); ?>
          
          </td>
          
          
</tr>

</table>

<br /><br /><br /><br /><br /><br />

<? include("inc/footer.php"); ?>

<?
} else {

header("location: login.php");
}
?>


</body>
</html>