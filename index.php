<? header("Location: http://medicine.missouri.edu/catsa/"); ?>
<? session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>University of Missouri School of Medicine - Clinical Advising Tool For Students &amp; Advisors - Home Page</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/checklist.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/ui-lightness/jquery-ui.css" type="text/css" media="screen" />

<? include("inc/db.php"); ?>
<? include("inc/top.php"); ?>
</head>
<body>
<div id="mainContainer">
  <table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" width="650" style="background-color: #000000;"><a href="/"><img src="images/main_logo.jpg" alt="Clinical Advising Tool for Students &amp; Advisors (CATSA)" border="0" /></a></td>
    <td valign="top" width="300" style="background-color: #000000;"><a href="http://som.missouri.edu" target="_blank"><img src="images/top_right.jpg" alt="School of Medicine" border="0" class="floatRight" /></a></td>
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
      <td valign="top" colspan="2">
      <div id="mainContent" style="width: 870px;">
          <!-- START CONTENT -->
          <h1>M3-M4 Clinical Advising</h1>
          <br />
          <img src="images/home.jpg" alt="" style="float: right; margin-left: 20px; border: 5px solid #DEDEDE;" /> <span id="welcome">The Clinical Advising Tool for Students and Advisors (CATSA): A Structured Approach to Residency Preparation and Application for Students and Advisors</span><br />
          <br />
          
          Students select a clinical advisor during late fall-early spring of their M3 year.  Clinical advisors in specific specialty areas work closely with students, guiding them through the residency preparation and application process. In addition, advisors meet with their advisees to discuss/review electives and sign "Add/Drop forms" when schedules change. <br />
          <br />
          It is during the beginning of the fourth year that advisors typically become most active with their advisees.  Seniors begin working on their Medical Student Performance Evaluation (MSPE, a.k.a. Dean's Letter), and begin the application process for residency programs. <br />
          <br />
          A principal goal of academic advising is to ensure that each student optimizes his or her path to their specialty of choice, utilizing the diverse resources offered by the <a href="http://medicine.missouri.edu">MU School of Medicine</a>. <br />
          <br />
        </div>
        <br />
        <br />
        <br />
        <br /></td>
    </tr>
  </table>
  

     
  <? include("inc/footer.php"); ?>
  
  </div> 
  </div>
</body>
</html>