<?
session_start();
if(isset($_SESSION["user"]))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>M4 - News & Announcements - University of Missouri School of Medicine - Clinical Advising Tool For Students & Advisors</title>
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


<h2>M4 Students</h2>
<span style="position: relative; top: -16px; font-weight: bold; font-size: 11px;">Class of 2014</span>
<br /><br />

<u><b>April 9, 2014</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2014/Student Loans Best Practices webinar.pdf" target="_blank">Student Loans Best Practices Webinar</a></li>
<br /><br />


<u><b>March 24, 2014</u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2014/Graduation requirements email.pdf" target="_blank">Graduation & Degree Verification Details</a></li>
<br /><br />


<u><b>March 12, 2014</u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2014/Exit Counseling reminder email.pdf" target="_blank">Exit Counseling Reminder</a></li>
<br /><br />

<u><b>February 7, 2014</u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2014/Exit Counseling - Financial Aid email.pdf" target="_blank">Financial Aid Exit Counseling Email and Packet</a></li>
<br /><br />

<u><b>February, 2, 2014</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2014/Email ROL Details.pdf" target="_blank">Rank Order List Details Email</a></li>
<li style="margin-left: 15px;"><a href="/docs/news/2014/Match Issues 2014DrBrown PP (3).pdf" target="_blank">Match Issues Dr. Brown’s Power Point</a></li>
<li style="margin-left: 15px;"><a href="/docs/news/2014/NRMP PP ROL 2014.pdf" target="_blank">NRMP Rank Order List Power Point</a></li>
<br /><br />


<u><b>January 23, 2014</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2014/January 23, 2014 Email M4 Class meeting.pdf" target="_blank">M4 Class meeting email</a></li>
<li style="margin-left: 15px;"><a href="/docs/news/2014/Match Issues 2014_FINAL.pdf" target="_blank">M4 Class meeting Match Issues Power Point</a></li>
<br /><br />

<u><b>January 21, 2014</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2014/Diploma Announcement.pdf" target="_blank">Diplomas Announcement</a></li>
<br /><br />

<u><b>January 16, 2014</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2014/Grad Announcements email.pdf" target="_blank">Graduation Announcement Email</a></li>
<li style="margin-left: 15px;"><a href="/docs/news/2014/Graduation Announcements flyer.pdf" target="_blank">Graduation Announcements Flyer</a></li>
<br /><br />

<u><b>January 15, 2014</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2014/VA access from home.pdf" target="_blank">VA remote access email</a></li>
<li style="margin-left: 15px;"><a href="/docs/news/2014/Access Gateway (CAG) Certificate Updates.pdf" target="_blank">VA Remote Access Certificate</a></li>
<br /><br />

<u><b>January 14, 2014</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2014/M3 Reflection Requirement email.pdf" target="_blank">M3 Reflection Requirement email</a></li>
<br /><br />

<u><b>December 24, 2013</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2013/interview-progress.pdf" target="_blank">Interview Progress E-mail</a></li>
<br /><br />

<u><b>November 12, 2013</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2013/Residency Interviews ect 11-12.pdf" target="_blank">Residency Interviews, Etc.</a></li>
<br /><br />

<u><b>November 5, 2013</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2013/NRMP Registration reminder.pdf" target="_blank">NRMP Registration Reminder</a></li>
<br /><br />

<u><b>October 3, 2013</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2013/Match do's and dont's.pdf" target="_blank">The Match Do's and Don'ts</a></li>
<br /><br />

<u><b>September 24, 2013</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2013/FW_  2014 Main Residency Match Twitter Chat on Thursday.pdf">NRMP Twitter Chat Announcement</a></li>
<br /><br />

<u><b>September 15, 2013</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2013/NRMP OPEN.pdf" target="_blank">NRMP Registration Open Email</a></li>
<li style="margin-left: 15px;"><a href="/docs/news/2013/NRMP Letter.pdf" target="_blank">Letter from NRMP</a></li>
<br /><br />

<u><b>September 12, 2013</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2013/MSPE 9-12-13.pdf" target="_blank">MSPE Update</a></li>
<br /><br />

<u><b>August 26, 2013</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2013/August 26 MSPE.pdf" target="_blank">MSPE Announcement</a></li>
<br /><br />

<u><b>August 8, 2013</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2013/Update Information M3 and M4.pdf" target="_blank">Information Update Request</a></li>
<br /><br />

<u><b>August 5, 2013</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2013/IM Chairmans Letter 2013.pdf" target="_blank">Internal Medicine Chairman's Letter Request </a></li>
<br /><br />

<u><b>July 29, 2013</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2013/COMPASS course description for students 062513FINAL.docx" target="_blank">COMPASS Course Description for Students</a></li>
<br /><br />

<u><b>July 15, 2013</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2013/MSPE Website Update.pdf" target="_blank">MSPE Website Update</a></li>
<li style="margin-left: 15px;"><a href="/docs/news/2013/Photos.pdf" target="_blank">Residency Application & Class Composite Photo Information</a></li>
<br /><br />

<u><b>July 12, 2013</b></u><br />
<a href="/docs/news/2013/ERAS FAQs email.pdf" target="_blank">ERAS FAQs email</a><br />
<li style="margin-left: 15px;"><a href="/docs/news/2013/ERAS FAQs.pdf" target="_blank">ERAS FAQs</a></li>
<br /><br />


<u><b>July 11, 2013</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2013/M4 rotations in Child Health.pdf">M4 rotations in Child Health email</a></li>
<br /><br />

<u><b>July 10, 2013</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2013/MSPE OPEN.docx">MSPE Open</a></li>
<br /><br />

<u><b>June 28, 2013</b></u><br />
<a href="/docs/news/2013/Graves_MSPE announcement.pdf" target="_blank">MSPE Announcement</a>
<li style="margin-left: 15px;"><a href="/docs/news/2013/M-4 Timeline_05_2013.pdf" target="_blank">M4 Timeline</a></li>
<li style="margin-left: 15px;"><a href="/docs/news/2013/Appendix E.pdf" target="_blank">Appendix E</a></li>
<li style="margin-left: 15px;"><a href="/docs/news/2013/COMMITTEE GUIDELINES FOR CLASS EVALUATION ON THE MSPE_2013.pdf" target="_blank">MSPE Committee Guidelines</a></li>
<br /><br />

<u><b>June 27, 2013</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2013/Shumate - enrollment reminders.pdf">M4 Enrollment Reminders</a></li>
<br /><br />



<u><b>June 17, 2013</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2013/M3&4BulletinBlocks9&15.pdf" target="_blank">M3/M4 June 2013 Bulletin</a></li>
<br /><br />


<u><b>June 14, 2013</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2013/student-lounge.pdf" target="_blank">Student Lounge and Call Room Access</a></li>
<br /><br />



<u><b>June 12, 2013</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2013/lockers.pdf" target="_blank">Reminder about Student Lockers & Assignment</a></li>
<br /><br />


<u><b>May 30, 2013</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/PrivateVsGrad.pdf" target="_blank">Private Student Loan vs PLUS Loan for Graduate Students</a></li>
<br /><br />


<u><b>May 23, 2013</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/2013/May 23, 2013 Budgeting for your M4 year.pdf" target="_blank">Budgeting for your M4 Year email</a></li>
<li style="margin-left: 15px;"><a href="/docs/news/2013/WEB Budgeting 2013-2014.pdf" target="_blank">WEB Budgeting</a></li>
<br /><br />




<u><b>May 20, 2013</b></u><br />
<span style="font-size: 11px;">Class of 2014 M4 Orientation Meeting Follow-up</span>
<li style="margin-left: 15px;"><a href="/docs/news/Planning your M4 Year Power point.pdf" target="_blank">Planning your M4 Year Power Point</a></li>
<li style="margin-left: 15px;"><a href="/docs/news/Residency Application Fees.pdf" target="_blank">Residency Application Fees</a></li>
<li style="margin-left: 15px;"><a href="/docs/6-eras/ERAS Helpful info.pdf" target="_blank">ERAS Helpful Info</a></li>
<br /><br />


<u><b>April 2, 2013</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/VA req email.pdf" target="_blank">VA Electronic Medical Records  Access</a></li><br />
<br />


<u><b>March 22, 2013</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/CATSA Feedback Survey Class of 2014.pdf" target="_blank">CATSA Feedback Request</a></li>
<br /><br />

<u><b>March 19, 2013</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/Add_Drop Reminders Class of 2014.pdf" target="_blank">Add/Drop Reminders</a></li>
<br /><br />

<u><b>March 4, 2013</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/M4 Year Registration.pdf" target="_blank">M4 Year Registration</a></li>
<li style="margin-left: 15px;"><a href="/docs/news/M4 Year for M3s Presentation1314.pdf" target="_blank">M4 Year Registration Power Point</a></li>
<br /><br />


<u><b>February 28, 2013</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/Class 2013 Registration Meeting recording.pdf" target="_blank">Fourth Year Registration Class Meeting recording</a></li><br />
<br />


<u><b>February 6, 2013</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/M4 registration meeting announcement.pdf" target="_blank">Fourth Year Registration Class Meeting</a></li>
<li style="margin-left: 15px;"><a href="/docs/news/M4 registration class meeting details.pdf" target="_blank">Fourth Year Registration Meeting Details</a></li><br />
<br />


<u><b>February 5, 2013</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/Hotel Rate Discounts.pdf" target="_blank">Special Hotel Rates for CS Exam</a></li>
<br /><br />

<u><b>January 28, 2013</b></u><br />
<li style="margin-left: 15px;"><a href="/docs/news/January 28 -M4 registration meeeting announcement.pdf" target="_blank">M4 Registration Class meeting Email</a></li>
<br /><br />


<u><b>January 7, 2013</b></u><br />
<strong>Visiting Students Application Service (VSAS)</strong><br />
<li style="margin-left: 15px;"><a href="/docs/news/M3s Preparing for M4 Rotations.pdf" target="_blank">VSAS Email</a></li>
<li style="margin-left: 15px;"><a href="/docs/news/VSAS Student Handout 2013.pdf" target="_blank">VSAS Student Handout 2013</a></li>
<li style="margin-left: 15px;"><a href="/docs/news/Student Screenshots 2013.ppt" target="_blank">Student Screenshots 2013 (Power Point)</a></li>


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