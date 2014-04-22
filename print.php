<?
session_start();
if(isset($_SESSION["user"]))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>University of Missouri School of Medicine - Clinical Advising Tool For Students &amp; Advisors - Print Report</title>
<link rel="stylesheet" type="text/css" href="css/style-p.css" />
<link rel="stylesheet" type="text/css" href="css/checklist.css" />
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/ui-lightness/jquery-ui.css" type="text/css" media="screen" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.progressbar.min.js"></script>
<script type="text/javascript">
			$(document).ready(function() {
				$("#pb1").progressBar({ max: 3, textFormat: 'fraction'});
				$("#pb2").progressBar({ max: 3, textFormat: 'fraction'});
				$("#pb3").progressBar({ max: 3, textFormat: 'fraction'});
				$("#pb4").progressBar({ max: 5, textFormat: 'fraction'});
				$("#pb5").progressBar({ max: 6, textFormat: 'fraction'});
				$("#pb6").progressBar({ max: 14, textFormat: 'fraction'});
				$("#pb7").progressBar({ max: 5, textFormat: 'fraction'});
				$("#pb8").progressBar({ max: 5, textFormat: 'fraction'});
				$("#pb9").progressBar({ max: 14, textFormat: 'fraction'});
				$("#pb10").progressBar({ max: 3, textFormat: 'fraction'});
				$("#pb11").progressBar({ max: 6, textFormat: 'fraction'});
				$("#pb12").progressBar({ max: 6, textFormat: 'fraction'});
			});

</script>
<? include("inc/db.php"); ?>
<? include("inc/top.php"); ?>
</head>
<body>
<div id="mainContainer">
<table border="0" cellspacing="0" cellpadding="0" width="100%">
<tr>
  <td valign="top">
  <table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
      <td valign="top" width="80%"><table cellpadding="0" cellspacing="0" width="100%">
          <tr>
            <td valign="top" width="100%"><div id="mainContent">
              
              <!-- START CONTENT -->
              
              <h1>CATSA Summary</h1>
              <br />
              <? $query123 = "SELECT * FROM relationships WHERE ". $userRole ."_id='$userID' LIMIT 1";
  $result123 = mysql_query($query123);
  if ($result123) {
    while ($row = mysql_fetch_array ($result123)) {
		$query666 = mysql_query("SELECT * FROM users WHERE id='$row[2]'");
		$data_set666 = mysql_fetch_array($query666);
		$user666 = $data_set666['company'];
		
		$query777 = mysql_query("SELECT * FROM users WHERE id='$row[3]'");
		$data_set777 = mysql_fetch_array($query777);
		$user777 = $data_set777['company'];
		
		$query888 = mysql_query("SELECT * FROM users WHERE id='$row[4]'");
		$data_set888 = mysql_fetch_array($query888);
		$user888 = $data_set888['company'];
		
	?>
              <table width="90%">
                <tr>
                  <td width="50%"><? if ($userID == "$row[2]") { ?>
                    <img src="images/roles/student-on.jpg" alt="Student" />
                    <? } else { ?>
                    <img src="images/roles/student-off.jpg" alt="Buyer" />
                    <? } ?></td>
                  <td width="50%"><? if ($userID == "$row[3]") { ?>
                    <img src="images/roles/advisor-on.jpg" alt="Advisor" />
                    <? } else { ?>
                    <img src="images/roles/advisor-off.jpg" alt="Advisor" />
                    <? } ?></td>
                </tr>
                <tr>
                  <td><? if ($row[2] == "0") { ?>
                    <span style="color: #FF0000;"><b>You currently do not have a Student</b></span>. <br />
                    Please contact your site <a href="mailto:thompsonstev@health.missouri.edu">Administrator</a>.
                    <? } else { ?>
                    <b><? echo $user666; ?></b><br />
                    <b>User Name:</b> <? echo $data_set666['username']; ?><br />
                    <b>Full Name:</b> <? echo $data_set666['first_name']; ?>&nbsp;<? echo $data_set666['last_name']; ?><br />
                    <b>Phone:</b> <? echo $data_set666['phone']; ?><br />
                    <br />
                    <? } ?></td>
                  <td><? if ($row[3] == "0") { ?>
                    <span style="color: #FF0000;"><b>You currently do not have a Advisor</b></span>. <br />
                    Please contact your site <a href="mailto:thompsonstev@health.missouri.edu">Administrator</a>.
                    <? } else { ?>
                    <b><? echo $user777; ?></b><br />
                    <b>User Name:</b> <? echo $data_set777['username']; ?><br />
                    <b>Full Name:</b> <? echo $data_set777['first_name']; ?>&nbsp;<? echo $data_set777['last_name']; ?><br />
                    <b>Phone:</b> <? echo $data_set777['phone']; ?><br />
                    <br />
                    <? } ?></td>
                  <td></td>
                </tr>
              </table>
              <? } } ?>
              <br />
              <br />
              <hr />
              <br />
              <br />
              <?

  $query123 = "SELECT * FROM relationships WHERE student_id='$studentid' LIMIT 1";
  $result123 = mysql_query($query123);
  if ($result123) {
    while ($row = mysql_fetch_array ($result123)) {
		$queryMaster = mysql_query("SELECT * FROM master WHERE relationship_id='$row[0]'");
		$data_set_Master = mysql_fetch_array($queryMaster);
		$section1 = $data_set_Master['4'];
		$section2 = $data_set_Master['5'];
		$section3 = $data_set_Master['6'];
		$section4 = $data_set_Master['7'];
		$section5 = $data_set_Master['8'];
		$section6 = $data_set_Master['9'];
		$section7 = $data_set_Master['10'];
		$section8 = $data_set_Master['11'];
		$section9 = $data_set_Master['12'];
		$section10 = $data_set_Master['13'];
		$section11 = $data_set_Master['14'];	
		$section12 = $data_set_Master['15'];
		
	
?>
             
             


<div style="float: right;">
                <? if ($section1 == 3) { ?>
                <img src="/images/checkmark_c.jpg" alt="Section Completed" />
                <? } else { ?>
                <img src="/images/notcomplete.jpg" alt="Section Not Complete" />
                <? } ?>
              </div>
              <span class="dashBoardTitle">1.) CV</span>&nbsp;<a href="/status.php?step=1"><span style="font-size: 12px;">Summary &raquo;</span></a> <br />
              <br />
              <div class="dashBoardSection">Section Progress:<br />
                <span class="progressBar" id="pb1"><? echo $section1; ?></span> <br />
              </div>
              <?
                if ($userRole == "adviser") {
		$query1 = mysql_query("SELECT * FROM s_cv WHERE student_id='$studentid'");
		} else { 
		$query1 = mysql_query("SELECT * FROM s_cv WHERE student_id='$userID'");
		}
		
		$data_set1= mysql_fetch_array($query1);
		$step1 = $data_set1['3'];
		$step2 = $data_set1['4'];
		$step3 = $data_set1['5'];
		
		?>
              <ul>
                <li <? if (($step1 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Do you have a draft of your CV prepared?</li>
                <li <? if (($step2 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Has your CV been proof read?</li>
                <li <? if (($step3 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Is your CV complete?</li>
              </ul>
              <br />
              <br />
 
              
              
              
              <div style="float: right;">
                <? if ($section2 == 3) { ?>
                <img src="/images/checkmark_c.jpg" alt="Section Completed" />
                <? } else { ?>
                <img src="/images/notcomplete.jpg" alt="Section Not Complete" />
                <? } ?>
              </div>
              <span class="dashBoardTitle">2.) Electives and Off-Site Rotations</span>&nbsp;<a href="/status.php?step=2"><span style="font-size: 12px;">Summary &raquo;</span></a> <br />
              <br />
              <div class="dashBoardSection">Section Progress:<br />
                <span class="progressBar" id="pb2"><? echo $section2; ?></span> <br />
              </div>
              <?
                if ($userRole == "adviser") {
		$query2 = mysql_query("SELECT * FROM s_electives WHERE student_id='$studentid'");
		} else { 
		$query2 = mysql_query("SELECT * FROM s_electives WHERE student_id='$userID'");
		}
		
		$data_set2= mysql_fetch_array($query2);
		$step1 = $data_set2['3'];
		$step2 = $data_set2['4'];
		$step3 = $data_set2['5'];
		
		?>
              <ul>
                <li <? if (($step1 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Does applicant have necessary coursework to graduate?</li>
                <li <? if (($step2 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Should applicant complete away rotation(s)?</li>
                <li <? if (($step3 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Are there selectives/electives that you should take to prepare for residency?</li>
              </ul>
              <br />
              <br />
              <div style="float: right;">
                <? if ($section3 == 3) { ?>
                <img src="/images/checkmark_c.jpg" alt="Section Completed" />
                <? } else { ?>
                <img src="/images/notcomplete.jpg" alt="Section Not Complete" />
                <? } ?>
              </div>
              <span class="dashBoardTitle">3.) Personal Statements</span>&nbsp;<a href="/status.php?step=3"><span style="font-size: 12px;">Summary &raquo;</span></a> <br />
              <br />
              <div class="dashBoardSection">Section Progress:<br />
                <span class="progressBar" id="pb3"><? echo $section3; ?></span> <br />
              </div>
              <?
                if ($userRole == "adviser") {
		$query3 = mysql_query("SELECT * FROM s_personal WHERE student_id='$studentid'");
		} else { 
		$query3 = mysql_query("SELECT * FROM s_personal WHERE student_id='$userID'");
		}
		
		$data_set3= mysql_fetch_array($query3);
		$step1 = $data_set3['3'];
		$step2 = $data_set3['4'];
		$step3 = $data_set3['5'];

		
		?>
              <ul>
                <li <? if (($step1 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Is the personal statement written?</li>
                <li <? if (($step2 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Has the personal statement been proofed?</li>
                <li <? if (($step3 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Does there need to be more than one personal statement, ie for different programs?</li>
              </ul>
              <br />
              <br />
              <div style="float: right;">
                <? if ($section4 == 5) { ?>
                <img src="/images/checkmark_c.jpg" alt="Section Completed" />
                <? } else { ?>
                <img src="/images/notcomplete.jpg" alt="Section Not Complete" />
                <? } ?>
              </div>
              <span class="dashBoardTitle">4.) Letters of Recommendation (LoR)</span>&nbsp;<a href="/status.php?step=4"><span style="font-size: 12px;">Summary &raquo;</span></a> <br />
              <br />
              <div class="dashBoardSection">Section Progress:<br />
                <span class="progressBar" id="pb4"><? echo $section4; ?></span> <br />
              </div>
              <?
                if ($userRole == "adviser") {
		$query4 = mysql_query("SELECT * FROM s_letters WHERE student_id='$studentid'");
		} else { 
		$query4 = mysql_query("SELECT * FROM s_letters WHERE student_id='$userID'");
		}
		
		$data_set4= mysql_fetch_array($query4);
		$step1 = $data_set4['3'];
		$step2 = $data_set4['4'];
		$step3 = $data_set4['5'];
		$step4 = $data_set4['6'];
		$step5 = $data_set4['7'];
		
		?>
              <ul>
                <li <? if (($step1 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Has applicant confirmed with faculty willingness to write strong letter?</li>
                <li <? if (($step2 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Have LOR's been received by the OME?</li>
                <li <? if (($step3 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Have LOR's been uploaded to ERAS?</li>
                <li <? if (($step4 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Have LOR's been assigned to each program?</li>
                <li <? if (($step5 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Have letters been finalized and released by applicant in ERAS?</li>
              </ul>
              <br />
              <br />
              <div style="float: right;">
                <? if ($section5 == 6) { ?>
                <img src="/images/checkmark_c.jpg" alt="Section Completed" />
                <? } else { ?>
                <img src="/images/notcomplete.jpg" alt="Section Not Complete" />
                <? } ?>
              </div>
              <span class="dashBoardTitle">5.) Medical Student Performance Evaluation (MSPE)</span>&nbsp;<a href="/status.php?step=5"><span style="font-size: 12px;">Summary &raquo;</span></a> <br />
              <br />
              <div class="dashBoardSection">Section Progress:<br />
                <span class="progressBar" id="pb5"><? echo $section5; ?></span> <br />
              </div>
              <?
                if ($userRole == "adviser") {
		$query5 = mysql_query("SELECT * FROM s_mspe WHERE student_id='$studentid'");
		} else { 
		$query5 = mysql_query("SELECT * FROM s_mspe WHERE student_id='$userID'");
		}
		
		$data_set5= mysql_fetch_array($query5);
		$step1 = $data_set5['3'];
		$step2 = $data_set5['4'];
		$step3 = $data_set5['5'];
		$step4 = $data_set5['6'];
		$step5 = $data_set5['7'];
		$step6 = $data_set5['8'];		
		?>
              <ul>
                <li <? if (($step1 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Unique Characteristics</li>
                <li <? if (($step2 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Preclinical Comments</li>
                <li <? if (($step3 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Advisor Review</li>
                <li <? if (($step4 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Submitted to Committee</li>
                <li <? if (($step5 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Finalized by Committee</li>
                <li <? if (($step6 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Accepted</li>
              </ul>
              <br />
              <br />
              
              
              
              
          <? 
		  $querycheck = mysql_query("SELECT * FROM s_eras WHERE student_id='$studentid'");
		  $resultcheck = mysql_fetch_array($querycheck); 	  
		  ?> 
          <? if ($resultcheck["status"] == "1") { ?>
              <div style="float: right;">
                <? if ($section6 == 14) { ?>
                <img src="/images/checkmark_c.jpg" alt="Section Completed" />
                <? } else { ?>
                <img src="/images/notcomplete.jpg" alt="Section Not Complete" />
                <? } ?>
              </div>
              <span class="dashBoardTitle">6.) Electronic Residency Application Service (ERAS)</span>&nbsp;<a href="/status.php?step=6"><span style="font-size: 12px;">Summary &raquo;</span></a><br />
              <br />
              <div class="dashBoardSection">Section Progress:<br />
                <span class="progressBar" id="pb6"><? echo $section6; ?></span> <br />
              </div>
              <br />
              <br />
              <?
                if ($userRole == "adviser") {
		$query6 = mysql_query("SELECT * FROM s_eras WHERE student_id='$studentid'");
		} else { 
		$query6 = mysql_query("SELECT * FROM s_eras WHERE student_id='$userID'");
		}
		
		$data_set6= mysql_fetch_array($query6);
		$step1 = $data_set6['3'];
		$step2 = $data_set6['4'];
		$step3 = $data_set6['5'];
		$step4 = $data_set6['6'];
		$step5 = $data_set6['7'];
		$step6 = $data_set6['8'];
		$step7 = $data_set6['9'];
		$step8 = $data_set6['10'];
		$step9 = $data_set6['11'];
		$step10 = $data_set6['12'];
		$step11 = $data_set6['13'];
		$step12 = $data_set6['14'];
		$step13 = $data_set6['15'];
		$step14 = $data_set6['16'];		
		?>
              <ul>
                <li <? if (($step1 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Register with ERAS</li>
                <li <? if (($step2 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Complete ERAS profile</li>
                <li <? if (($step3 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Take Photo</li>
                <li <? if (($step4 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Request MU School of Medicine Transcript</li>
                <li <? if (($step5 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Request Letters of Recommendation</li>
                <li <? if (($step6 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Enter & Finalize Personal Statement(s)</li>
                <li <? if (($step7 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Monitor Status of Letters of Recommendation Received by OME</li>
                <li <? if (($step8 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Complete Application</li>
                <li <? if (($step9 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Certify Application</li>
                <li <? if (($step10 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Apply to programs</li>
                <li <? if (($step11 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Assign documents to programs</li>
                <li <? if (($step12 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Pay ERAS fees</li>
                <li <? if (($step13 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Monitor program document downloads via ADTS</li>
                <li <? if (($step14 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Update MyERAS profile if needed</li>
              </ul>
              <br />
              <br />
              
              <? } ?>
              
              
              
              <div style="float: right;">
                <? if ($section7 == 5) { ?>
                <img src="/images/checkmark_c.jpg" alt="Section Completed" />
                <? } else { ?>
                <img src="/images/notcomplete.jpg" alt="Section Not Complete" />
                <? } ?>
              </div>
              <span class="dashBoardTitle">7.) Residency Programs</span>&nbsp;<a href="/status.php?step=7"><span style="font-size: 12px;">Summary &raquo;</span></a> <br />
              <br />
              <div class="dashBoardSection">Section Progress:<br />
                <span class="progressBar" id="pb7"><? echo $section7; ?></span> <br />
              </div>
              <?
                if ($userRole == "adviser") {
		$query7 = mysql_query("SELECT * FROM s_residency WHERE student_id='$studentid'");
		} else { 
		$query7 = mysql_query("SELECT * FROM s_residency WHERE student_id='$userID'");
		}
		
		$data_set7= mysql_fetch_array($query7);
		$step1 = $data_set7['3'];
		$step2 = $data_set7['4'];
		$step3 = $data_set7['5'];
		$step4 = $data_set7['6'];
		$step5 = $data_set7['7'];		
		?>
              <ul>
                <li <? if (($step1 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Do you know which programs you want to apply to?</li>
                <li <? if (($step2 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Have you identified programs that are "safe" choices for you?</li>
                <li <? if (($step3 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Are there any MU "friendly" programs?</li>
                <li <? if (($step4 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Have you identified the most/least competitive programs?</li>
                <li <? if (($step5 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Have you identified the programs that would be a "good" match for you?</li>
              </ul>
              <br />
              <br />
              
              
              <? 
		  $querycheck = mysql_query("SELECT * FROM s_military WHERE student_id='$studentid'");
		  $resultcheck = mysql_fetch_array($querycheck); 	  
		  ?> 
          <? if ($resultcheck["status"] == "1") { ?>
              <div style="float: right;">
                <? if ($section8 == 5) { ?>
                <img src="/images/checkmark_c.jpg" alt="Section Completed" />
                <? } else { ?>
                <img src="/images/notcomplete.jpg" alt="Section Not Complete" />
                <? } ?>
              </div>
              <span class="dashBoardTitle">8.) Military</span>&nbsp;<a href="/status.php?step=8"><span style="font-size: 12px;">Summary &raquo;</span></a> <br />
              <br />
              <div class="dashBoardSection">Section Progress:<br />
                <span class="progressBar" id="pb8"><? echo $section8; ?></span> <br />
              </div>
              <?
                if ($userRole == "adviser") {
		$query8 = mysql_query("SELECT * FROM s_military WHERE student_id='$studentid'");
		} else { 
		$query8 = mysql_query("SELECT * FROM s_military WHERE student_id='$userID'");
		}
		
		$data_set8= mysql_fetch_array($query8);
		$step1 = $data_set8['3'];
		$step2 = $data_set8['4'];
		$step3 = $data_set8['5'];
		$step4 = $data_set8['6'];
		$step5 = $data_set8['7'];		
		?>
              <ul>
                <li <? if (($step1 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Submit Application</li>
                <li <? if (($step2 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Submit CV</li>
                <li <? if (($step3 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Register with ERAS (if not applicable click complete)</li>
                <li <? if (($step4 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Schedule Interviews</li>
                <li <? if (($step5 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Rank Programs (if not applicable click complete)</li>
              </ul>
              <br />
              <br />
              <? } ?>
              
              <? 
		  $querycheck = mysql_query("SELECT * FROM s_early WHERE student_id='$studentid'");
		  $resultcheck = mysql_fetch_array($querycheck); 	  
		  ?> 
          <? if ($resultcheck["status"] == "1") { ?>
              <div style="float: right;">
                <? if ($section9 == 14) { ?>
                <img src="/images/checkmark_c.jpg" alt="Section Completed" />
                <? } else { ?>
                <img src="/images/notcomplete.jpg" alt="Section Not Complete" />
                <? } ?>
              </div>
              <span class="dashBoardTitle">9.) Early Match</span>&nbsp;<a href="/status.php?step=9"><span style="font-size: 12px;">Summary &raquo;</span></a> <br />
              <br />
              <div class="dashBoardSection">Section Progress:<br />
                <span class="progressBar" id="pb9"><? echo $section9; ?></span> <br />
              </div>
              <?
                if ($userRole == "adviser") {
		$query9 = mysql_query("SELECT * FROM s_early WHERE student_id='$studentid'");
		} else { 
		$query9 = mysql_query("SELECT * FROM s_early WHERE student_id='$userID'");
		}
		
		$data_set9= mysql_fetch_array($query9);
		$step1 = $data_set9['3'];
		$step2 = $data_set9['4'];
		$step3 = $data_set9['5'];
		$step4 = $data_set9['6'];
		$step5 = $data_set9['7'];
		$step6 = $data_set9['8'];
		$step7 = $data_set9['9'];
		$step8 = $data_set9['10'];
		$step9 = $data_set9['11'];
		$step10 = $data_set9['12'];
		$step11 = $data_set9['13'];	
		$step12 = $data_set9['14'];
		$step13 = $data_set9['15'];
		$step14 = $data_set9['16'];	
		?>
              <br />
              <b>San Francisco Match</b><br />
              
              <ul>
                <li <? if (($step1 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>CAS application complete</li>
                <li <? if (($step2 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>CAS Distribution List and payment</li>
                <li <? if (($step3 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Request Undergrad Transcript</li>
                <li <? if (($step4 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Request Med School Transcript</li>
                <li <? if (($step5 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Request USMLE Transcript</li>
                <li <? if (($step6 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Notify OME of SF Match Participation</li>
                <li <? if (($step7 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Provide OME with SF Applicant #</li>
                <li <? if (($step8 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Letters of Reference (3)</li>
                <li <? if (($step9 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Mail CAS application packet</li>
                <li <? if (($step10 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Submit Rank Order List</li>
                <li <? if (($step11 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Apply to PGY1 Programs</li>
           </ul>
           
           <br />
           
           <b>Urology Match</b><br />
           <ul>
           
                
                <li <? if (($step12 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Register with ERAS</li>
                <li <? if (($step13 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Contact non ERAS participating programs</li>
                <li <? if (($step14 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Complete Preference List</li>
              </ul>
              <br />
              <br />
              <? } ?>
              
              <? 
		  $querycheck = mysql_query("SELECT * FROM s_integrated WHERE student_id='$studentid'");
		  $resultcheck = mysql_fetch_array($querycheck); 	  
		  ?> 
          <? if ($resultcheck["status"] == "1") { ?>
              <div style="float: right;">
                <? if ($section10 == 3) { ?>
                <img src="/images/checkmark_c.jpg" alt="Section Completed" />
                <? } else { ?>
                <img src="/images/notcomplete.jpg" alt="Section Not Complete" />
                <? } ?>
              </div>
              <span class="dashBoardTitle">10.) Integrated Residency Program</span>&nbsp;<a href="/status.php?step=10"><span style="font-size: 12px;">Summary &raquo;</span></a> <br />
              <br />
              <div class="dashBoardSection">Section Progress:<br />
                <span class="progressBar" id="pb10"><? echo $section10; ?></span> <br />
              </div>
              <?
                if ($userRole == "adviser") {
		$query10 = mysql_query("SELECT * FROM s_integrated WHERE student_id='$studentid'");
		} else { 
		$query10 = mysql_query("SELECT * FROM s_integrated WHERE student_id='$userID'");
		}
		
		$data_set10= mysql_fetch_array($query10);
		$step1 = $data_set10['3'];
		$step2 = $data_set10['4'];
		$step3 = $data_set10['5'];
		?>
              <ul>
                <li <? if (($step1 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Submit Application</li>
                <li <? if (($step2 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Register With NRMP</li>
                <li <? if (($step3 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Certify Rank Order List in NRMP</li>
              </ul>
              <br />
              <br />
              <? } ?>
              <div style="float: right;">
                <? if ($section11 == 6) { ?>
                <img src="/images/checkmark_c.jpg" alt="Section Completed" />
                <? } else { ?>
                <img src="/images/notcomplete.jpg" alt="Section Not Complete" />
                <? } ?>
              </div>
              <span class="dashBoardTitle">11.) Interviews</span>&nbsp;<a href="/status.php?step=11"><span style="font-size: 12px;">Summary &raquo;</span></a> <br />
              <br />
              <div class="dashBoardSection">Section Progress:<br />
                <span class="progressBar" id="pb11"><? echo $section11; ?></span> <br />
              </div>
              <?
                if ($userRole == "adviser") {
		$query11 = mysql_query("SELECT * FROM s_interviews WHERE student_id='$studentid'");
		} else { 
		$query11 = mysql_query("SELECT * FROM s_interviews WHERE student_id='$userID'");
		}
		
		$data_set11= mysql_fetch_array($query11);
		$step1 = $data_set11['3'];
		$step2 = $data_set11['4'];
		$step3 = $data_set11['5'];
		$step4 = $data_set11['6'];
		$step5 = $data_set11['7'];
		$step6 = $data_set11['8'];
		?>
              <ul>
                <li <? if (($step1 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Scheduled Interviews</li>
                <li <? if (($step2 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Make Travel Arrangements</li>
                <li <? if (($step3 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Review Interview Questions</li>
                <li <? if (($step4 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Confirm Travel Arrangement</li>
                <li <? if (($step5 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Confirm Directions</li>
                <li <? if (($step6 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Confirm Interview Time</li>
              </ul>
              <br />
              <br />
              <? 
		  $querycheck = mysql_query("SELECT * FROM s_nrmp WHERE student_id='$studentid'");
		  $resultcheck = mysql_fetch_array($querycheck); 	  
		  ?> 
          <? if ($resultcheck["status"] == "1") { ?>
              <div style="float: right;">
                <? if ($section12 == 6) { ?>
                <img src="/images/checkmark_c.jpg" alt="Section Completed" />
                <? } else { ?>
                <img src="/images/notcomplete.jpg" alt="Section Not Complete" />
                <? } ?>
              </div>
              <span class="dashBoardTitle">12.) National Residency Matching Program (NRMP)</span>&nbsp;<a href="/status.php?step=12"><span style="font-size: 12px;">Summary &raquo;</span></a> <br />
              <br />
              <div class="dashBoardSection">Section Progress:<br />
                <span class="progressBar" id="pb12"><? echo $section12; ?></span> <br />
              </div>
              <?
                if ($userRole == "adviser") {
		$query12 = mysql_query("SELECT * FROM s_nrmp WHERE student_id='$studentid'");
		} else { 
		$query12 = mysql_query("SELECT * FROM s_nrmp WHERE student_id='$userID'");
		}
		
		$data_set12= mysql_fetch_array($query12);
		$step1 = $data_set12['3'];
		$step2 = $data_set12['4'];
		$step3 = $data_set12['5'];
		$step4 = $data_set12['6'];
		$step5 = $data_set12['7'];
		$step6 = $data_set12['8'];
		?>
              <ul>
                <li <? if (($step1 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Register with NRMP</li>
                <li <? if (($step2 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Pay fees NRMP</li>
                <li <? if (($step3 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Add programs NRMP</li>
                <li <? if (($step4 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Code for Couples Match NRMP</li>
                <li <? if (($step5 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Rank Programs NRMP</li>
                <li <? if (($step6 == 1)) { ?>style="text-decoration: line-through;"<? } ?>>Certify Rank Order List NRMP</li>
              </ul>
              <br />
              <br />
              <? } ?>
              <? } } ?>
              <br />
              <br />
              <br />
              <br /></td>
          </tr>
        </table>
        
        <!-- END CONTENT -->
      </div>
    
      </td>
    
    
      <td valign="top"></td>
    </tr>
  </table>
  </td>
</tr>
<?
} else {

header("location: login.php");
}
?>
</body>
</html>