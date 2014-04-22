<?
session_start();
if(isset($_SESSION["user"]))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>News & Announcements - University of Missouri School of Medicine - Clinical Advising Tool For Students & Advisors</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script type="text/javascript" src="/js/jqtransformplugin/jquery.jqtransform.js"></script>
<link rel="stylesheet" type="text/css" href="/js/jqtransformplugin/jqtransform.css" />
<? include("inc/db.php"); ?>
<? include("inc/top.php"); ?>

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
<h1>Contacts</h1>
<br />

<h3 style="margin: 0px;">Office</h3>
School of Medicine Advising Office<br />
MU School of Medicine - MA215<br />
573-882-9219<br />
<a href="mailto:rachowj@health.missouri.edu">Email</a>
<br /><br /> <br />




<h3 style="margin: 0px;">ERAS</h3>
<a href="mailto:tuckern@health.missouri.edu?subject=ERAS%20Question">Naomi Tucker</a>: 882-2921<br />
<a href="mailto:neffse@health.missouri.edu?subject=ERAS%20Question">Suzanne Neff</a>:  882-3490 
<br /><br /><br />

<h3 style="margin: 0px;">Dr. Brown's Assistant MSPE & NRMP</h3>
<a href="mailto:gravesg@health.missouri.edu?subject=Appointment%20Request">Gina Graves</a>: 884-5146
<br /><br /><br />

<h3 style="margin: 0px;">Careers in Medicine & Faculty Advisor Assignments</h3>
<a href="mailto:Rachowj@health.missouri.edu">Jen Rachow</a>: 884-0759<br />
<a href="mailto:martinat@health.missouri.edu">Alison Martin</a>: 882-9219
<br /><br  /><br />

<h3 style="margin: 0px;">Financial Aid & Graduation Requirements</h3>
<a href="mailto:marksc@health.missouri.edu">Cheri Marks</a>: 882-5604
<br /><br /><br />

<h3 style="margin: 0px;">Fourth Year Electives</h3>
<a href="mailto:shumatea@health.missouri.edu">Amy Shumate</a>: 882-2925
<br /><br /><br />

<h3 style="margin: 0px;">Graduation Details (regalia)</h3>
<a href="mailto:gentrylr@health.missouri.edu?subject=Graduation%20Regalia">Lindsey Gentry</a>: 882-5647<br />
<a href="mailto:martinat@health.missouri.edu?subject=Graduation%20Regalia%20-%20Commencement%20Details">Alison Martin</a>: 882-9219
<br /><br /><br />

<h3 style="margin: 0px;">Notary</h3>
<a href="mailto:zinnw@health.missouri.edu">Wanda Zinn</a>:	882-0279<br />
<a href="mailto:neffse@health.missouri.edu">Suzanne Neff</a>: 882-3490
<br /><br /><br />

<h3 style="margin: 0px;">Clinical Advisor List</h3>
<a href="/docs/Advisor List.pdf" target="_blank">2013 Advisor List</a>



<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />


</div>
</td>


<td valign="top">
      
      <? include("inc/right-steps.php"); ?>
          
          </td>
          
          
</tr>



<? include("inc/footer.php"); ?>

<?
} else {

header("location: login.php");
}
?>


</body>
</html>