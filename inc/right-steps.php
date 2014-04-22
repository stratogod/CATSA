<script>
function countdowns()   {
	NewWindow=window.open("/countdowns.php","",'width=430,height=450,menubar=no,scrollbars=yes')
   }
</script>

<script type="text/javascript" src="/js/jquery.countdown.js"></script>
<script type="text/javascript">
$(function () {
	var austDay = new Date();
	austDay = new Date(austDay.getFullYear() + 1, 6 - 1, 10);
	$('#defaultCountdown').countdown({until: new Date(2014, 3-1, 21 + 1, -13)});
	//$('#defaultCountdown').countdown({until: +600000}); 
	$('#year').text(austDay.getFullYear());
});
</script>



<div id="rightMenu">
<br />
<center><b>Match Day - March 21, 2014 Countdown</b>
</center>
<br />
<div id="defaultCountdown"></div>
<br />
<center>
<strong>More Match Day Countdowns</strong><br />
<a href="javascript:countdowns()">Ophthalmology</a>&nbsp;|&nbsp;
<a href="javascript:countdowns()">Urology</a>&nbsp;|&nbsp;
<a href="javascript:countdowns()">Military</a>
<br /><br />
<a href="http://medicine.missouri.edu/news/0181.php" target="_blank">2013 Mizzou Medicine<br />Match Video- Congrats!!</a>
</center>
<br />

<? 


$querycheck6 = mysql_query("SELECT status FROM s_eras WHERE student_id='$studentid'");
$resultcheck6 = mysql_fetch_array($querycheck6); 	  

$querycheck8 = mysql_query("SELECT status FROM s_military WHERE student_id='$studentid'");
$resultcheck8 = mysql_fetch_array($querycheck8); 	 

$querycheck9 = mysql_query("SELECT status FROM s_early WHERE student_id='$studentid'");
$resultcheck9 = mysql_fetch_array($querycheck9); 	 

$querycheck10 = mysql_query("SELECT status FROM s_integrated WHERE student_id='$studentid'");
$resultcheck10 = mysql_fetch_array($querycheck10); 	 

$querycheck12 = mysql_query("SELECT status FROM s_nrmp WHERE student_id='$studentid'");
$resultcheck12 = mysql_fetch_array($querycheck12); 	  
?>                  
          
<div class="goldboxQL floatRight">
<h3>Sections</h3>
<ul>
            <li><a href="status.php?step=1"><? if ($page == "status.php?step=1") { ?><span class="activeStep">CV</span><? } else { ?>CV<? } ?></a></li>
            <li><a href="status.php?step=2"><? if ($page == "status.php?step=2") { ?><span class="activeStep">Electives/Rotations</span><? } else { ?>Electives/Rotations<? } ?></a></li>
            <li><a href="status.php?step=3"><? if ($page == "status.php?step=3") { ?><span class="activeStep">Personal Statements</span><? } else { ?>Personal Statements<? } ?></a></li>
            <li><a href="status.php?step=4"><? if ($page == "status.php?step=4") { ?><span class="activeStep">Letters of Recommendation</span><? } else { ?>Letters of Recommendation<? } ?></a></li>
            <li><a href="status.php?step=5"><? if ($page == "status.php?step=5") { ?><span class="activeStep">MSPE (Dean's Letter)</span><? } else { ?>MSPE (Dean's Letter)<? } ?></a></li>
            <? if ($resultcheck6["status"] == "1") { ?><li><a href="status.php?step=6"><? if ($page == "status.php?step=6") { ?><span class="activeStep">ERAS</span><? } else { ?>ERAS<? } ?></a></li><? } ?>
            <li><a href="status.php?step=7"><? if ($page == "status.php?step=7") { ?><span class="activeStep">Residency Programs</span><? } else { ?>Residency Programs<? } ?></a></li>
            <? if ($resultcheck8["status"] == "1") { ?><li><a href="status.php?step=8"><? if ($page == "status.php?step=8") { ?><span class="activeStep">Military</span><? } else { ?>Military<? } ?></a></li><? } ?>
            <? if ($resultcheck9["status"] == "1") { ?><li><a href="status.php?step=9"><? if ($page == "status.php?step=9") { ?><span class="activeStep">Early Match</span><? } else { ?>Early Match<? } ?></a></li><? } ?>
            <? if ($resultcheck10["status"] == "1") { ?><li><a href="status.php?step=10"><? if ($page == "status.php?step=10") { ?><span class="activeStep">Integrated Residency</span><? } else { ?>Integrated Residency<? } ?></a></li><? } ?>
            <li><a href="status.php?step=11"><? if ($page == "status.php?step=11") { ?><span class="activeStep">Interviews</span><? } else { ?>Interviews<? } ?></a></li>
            <? if ($resultcheck12["status"] == "1") { ?><li><a href="status.php?step=12"><? if ($page == "status.php?step=12") { ?><span class="activeStep">NRMP</span><? } else { ?>NRMP<? } ?></a></li><? } ?>
            <? if ($resultcheck12["status"] == "1") { ?><li><a href="status.php?step=13"><? if ($page == "status.php?step=13") { ?><span class="activeStep">SOAP</span><? } else { ?>SOAP<? } ?></a></li><? } ?>
            </ul>
</div>
<br /><br />



<div class="goldboxQL floatRight">
<h3>Quick Links</h3>
<ul>
 

            <li><a href="news.php"><span style="color: #900; font-weight: bold; font-size: 12px;">News and Announcements</span></a><br />
            <a href="/news-m2.php">M2</a> | <a href="news-m3.php">M3</a> | <a href="news-m4.php">M4</a></li>
            <li><a href="/docs/M-4_Timeline_05_2013.pdf" target="_blank">M4 Deadlines</a></li>
            <? if($userRole == "student") { ?><li><a href="https://ome.som.missouri.edu/studenthome" target="_blank">Student Home Page</a></li><? } ?>
            <li><a href="https://www.aamc.org/cim/" target="_blank">Careers In Medicine</a></li>
            <li><a href="http://www.nrmp.org/nrmpaamc-charting-outcomes-in-the-match/" target="_blank">Charting Outcomes - Match</a></li>
            <li><a href="http://www.aafp.org/dam/AAFP/documents/medical_education_residency/fmig/StrollingMatch.pdf" target="_blank">Strolling Through the Match</a></li>          
            <!--<li><a href="/docs/AOA Match Manual 2012-2013.pdf" target="_blank">AOA Residency and Match Manual</a></li>-->
            <li><a href="http://medicine.missouri.edu/students/match-lists.html" target="_blank">MU Match Lists 2003-2013</a></li>
            <!--<li><a href="/docs/Graduation Requirements-Final.pdf" target="_blank">Graduation</a></li>-->            
            <li><a href="/print.php" target="_blank">Print Summary Report</a></li>
            </ul>
</div>
<br /><br />



<div class="goldboxQL floatRight">
<h3>Contacts</h3>
<ul>
          <li><? if($userRole == "student") { ?><a href="mailto:<? echo $adviserEmail; ?>">Request Appt w/ Advisor</a><? } else { ?><a href="mailto:<? echo $studentEmail; ?>">Request Appt w/ Student</a><? } ?></li>
          <li><a href="mailto:gravesg@health.missouri.edu" target="_blank">Request Appt w/ Dr. Brown</a></li>
          <li><a href="contact.php">OME Contact List</a></li>
          <li><a href="/docs/Advisor list for CATSA.pdf" target="_blank">Clinical Advisor List</a></li>  
            </ul>
</div>
</div>
<br /><br />