<?
session_start();
if(isset($_SESSION["user"]))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Status - University of Missouri School of Medicine - Clinical Advising Tool For Students & Advisors</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/checklist.css" />
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/ui-lightness/jquery-ui.css" type="text/css" media="screen" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script type="text/javascript" src="js/ui.core.js"></script>
<script type="text/javascript" src="js/ui.datepicker.js"></script>
<script type="text/javascript" src="js/jquery.progressbar.min.js"></script>

<script type="text/javascript">
			$(document).ready(function() {
				$("#pb1").progressBar({ max: 3, textFormat: 'fraction'});
			});
</script>



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
      




<?
$page = basename($_SERVER['REQUEST_URI']);
?>

<? if (($page == "status.php?step=1")) { ?>
<? include("steps/1-cv.php"); ?>
<? } ?>

<? if ($page == "status.php?step=2") { ?>
<? include("steps/2-electives.php"); ?>
<? } ?>

<? if ($page == "status.php?step=3") { ?>
<? include("steps/3-personal.php"); ?>
<? } ?>

<? if ($page == "status.php?step=4") { ?>
<? include("steps/4-letters.php"); ?>
<? } ?>

<? if ($page == "status.php?step=5") { ?>
<? include("steps/5-mspe.php"); ?>
<? } ?>

<? if ($page == "status.php?step=6") { ?>
<? include("steps/6-eras.php"); ?>
<? } ?>

<? if ($page == "status.php?step=7") { ?>
<? include("steps/7-residency.php"); ?>
<? } ?>

<? if ($page == "status.php?step=8") { ?>
<? include("steps/8-military.php"); ?>
<? } ?>

<? if ($page == "status.php?step=9") { ?>
<? include("steps/9-early.php"); ?>
<? } ?>

<? if ($page == "status.php?step=10") { ?>
<? include("steps/10-integrated.php"); ?>
<? } ?>

<? if ($page == "status.php?step=11") { ?>
<? include("steps/11-interviews.php"); ?>
<? } ?>

<? if ($page == "status.php?step=12") { ?>
<? include("steps/12-nrmp.php"); ?>
<? } ?>

<? if ($page == "status.php?step=13") { ?>
<? include("steps/13-soap.php"); ?>
<? } ?>






<br /><br />

</div>
</td>
</tr>
</table>
</div>
<br />




</td>
<td valign="top">

<? include("inc/right-steps.php"); ?>
     
       </td>
</tr>
</table>

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