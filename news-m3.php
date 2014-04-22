<?
session_start();
if(isset($_SESSION["user"]))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>M3 - News & Announcements - University of Missouri School of Medicine - Clinical Advising Tool For Students & Advisors</title>
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


<h2>M3 Students</h2>
<span style="position: relative; top: -16px; font-weight: bold; font-size: 11px;">Class of 2015</span>
<br /><br />


<b><u>March 26, 2014</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2014/M4 Enrollment.pdf" target="_blank">M4 Enrollment email</a></li>
<br /><br />


<b><u>March 18, 2014</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2014/M4 Child health rotations details.pdf" target="_blank">M4 Child Health Rotation Contacts</a></li>
<br /><br />


<b><u>March 7, 2014</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2014/M4 registration 3-7-14.pdf" target="_blank">M4 Registration Dates & Details</a></li>
<br /><br />



<b><u>February 28, 2014</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2014/M4 Registration Email.pdf" target="_blank">M4 registration email</a></li>
<br /><br />

<b><u>February 19, 2014</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2014/February 24 2014 class meeting.pdf" target="_blank">February 24 Class Meeting</a></li>
<br /><br />


<b><u>February 17, 2014</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2014/Internal Medicine Integrated Residency Application.pdf" target="_blank">Internal Medicine Integrated Residency Application</a></li>
<br /><br />


<u><b>February 12, 2014</u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2014/Fourth year Registration-VSAS.pdf" target="_blank">M4/VSAS Reminders Email</a></li>
<br /><br />


<u><b>January 28, 2014</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2014/Psychiatry Intergrated Residency Meeting.pdf" target="_blank">Psychiatry Integrated Residency Meeting</a></li>
<br /><br />


<u><b>January 27, 2014</u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2014/Indian Health Service Elective.pdf" target="_blank">Indian Health Service Externship Application</a></li>
<br /><br />



<u><b>January 21, 2014</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2014/Fourth Year Registration Class meeting.pdf" target="_blank">Fourth Year registration class meeting</a></li>
<br /><br />

<u><b>January 17, 2014</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2014/Neurology Integrated Residency meeting.pdf" target="_blank">Neurology Integrated Residency Meeting</a></li>
<br /><br />



<u><b>January 15, 2014</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2014/January 23, 2014 Email M4 Class meeting.pdf" target="_blank">Mandatory Class Meeting</a></li>
<li style="margin-left: 15px;"><a href="/docs/news/2014/VA access from home.pdf" target="_blank">VA remote access email</a></li>
<li style="margin-left: 15px;"><a href="/docs/news/2014/Access Gateway (CAG) Certificate Updates.pdf" target="_blank">VA Remote Access Certificate</a></li>
<br /><br />


<u><b>January 13, 2014</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2014/IM Integrated Residence.pdf" target="_blank">Internal Medicine Integrated Residency Meeting</a></li>
<br /><br />

<u><b>January 8, 2014</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2014/FCM Integraded resicency email.pdf" target="_blank">Family Medicine Integrated Residency Email</a></li>
<li style="margin-left: 15px;"><a href="/docs/news/2014/FCM IR Meeting Flyer.pdf" target="_blank">Family Medicine Integrated Residency Meeting</a></li>
<br /><br />


<u><b>January 7, 2014</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2014/Shumate fourth year rotations jan 2014.pdf" target="_blank">Fourth Year Rotations Email</a></li>
<li style="margin-left: 15px;"><a href="/docs/news/2014/VSAS Student Presentation 2014.pdf" target="_blank">VSAS Presentation</a></li>
<li style="margin-left: 15px;"><a href="/docs/news/2014/VSAS Student Handout 2014.pdf" target="_blank">VSAS Handout</a></li>
<br /><br />


<u><b>October 14, 2013</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2013/Legacy Teachers Annoncement.pdf" target="_blank">Legacy Teachers Announcement</a></li>
<li style="margin-left: 15px;"><a href="/docs/news/2013/2014 Student brochure.pdf" target="_blank">Legacy Teachers Brochure</a></li>
<br /><br />


<u><b>August 8, 2013</b></u><bt />
<li style="margin-left: 15px;"><a href="/docs/news/2013/Update Information M3 and M4.pdf" target="_blank">Information Update Request</a></li>
<br /><br />


<u><b>July 8, 2013</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2013/How to Access PowerChart from iPad-iPhone for Medical Students-ss06.17.1.pdf" target="_blank">How to Setup and Access PowerChart from iPhone/iPad</a></li>
<li style="margin-left: 15px;"><a href="/docs/news/2013/Adding the Medical Student Heading in PowerNote.pdf" target="_blank">Adding the Medical Student Heading in PowerNote</a></li>
<br /><br />


<u><b>June 17, 2013</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2013/M3&4BulletinBlocks9&15.pdf" target="_blank">M3/M4 June 2013 Bulletin</a></li>
<li style="margin-left: 15px;"><a href="/docs/news/2013/m3-followup.pdf" target="_blank">M3 Class Meeting Follow-up Information</a></li>
<br /><br />


<u><b>June 14, 2013</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2013/m3-announcement-clerkships.pdf" target="_blank">Announcement Concerning Handling of Clerkship Problems</a></li>
<li style="margin-left: 15px;"><a href="/docs/news/2013/student-lounge.pdf" target="_blank">Student Lounge and Call Room Access</a></li>
<br /><br />



<u><b>June 12, 2013</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2013/lockers.pdf" target="_blank">Reminder about Student Lockers & Assignment</a></li>
<br /><br />


<u><b>May 30, 2013</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/PrivateVsGrad.pdf" target="_blank">Private Student Loan vs PLUS Loan for Graduate Students</a></li>
<br /><br />


<u><b>May 23, 2013</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2013/Budgeting for your M3 year.pdf" target="_blank">Budgeting for your M3 Year email</a></li>
<li style="margin-left: 15px;"><a href="/docs/news/2013/WEB Budgeting 2013-2014.pdf" target="_blank">WEB Budgeting</a></li>
<br /><br />




<b><u>May 20, 2013</u></b><br />
<span style="font-size: 11px;">Class of 2015 M3 Orientation Meeting</span>
<li style="margin-left: 15px;"><a href="/docs/news/Orientation_Schedule_FINAL_2013.pdf" target="_blank">Orientation Schedule</a></li>
<li style="margin-left: 15px;"><a href="/docs/news/AHA HeartCode ACLS  BLS Flyer.pdf" target="_blank">AHA HeartCode ACLS BLS Flyer</a></li>
<br /><br />


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