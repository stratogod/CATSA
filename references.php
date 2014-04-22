<?
session_start();
if(isset($_SESSION["user"]))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>References - University of Missouri School of Medicine - Clinical Advising Tool For Students & Advisors</title>
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
<h1>References and Resources</h1>
<br />

Below is a list of resources and references designed to help you get the most out of your advising process.  There are more specific resoures available on every individual step page, as well.

<br />


<ul>
<li><a href="http://www.aamc.org/" target="_blank">Association of American Medical Colleges (AAMC) </a></li><br />
<li><a href="http://www.aamc.org/students/eras/start.htm" target="_blank">Electronic Residency Application Service (ERAS)</a></li><br />
<li><a href="https://members.aamc.org/eweb/upload/Roadmap to Residency 2ndEd.pdf" target="_blank">Roadmap to Residency</a> - Comprehensive information guide about the application process to graduate medical education programs in the United States published by the AAMC.</li><br />
<li><a href="https://www.aamc.org/cim/" target="_blank">Careers in Medicine (CiM)</a> - A resource providing career assessments, exercises, worksheets, and other information that helps medical students choose a specialty and apply to residency programs.</li><br />
<li><a href="http://www.nrmp.org/" target="_blank">National Residency Matching Program (NRMP)</a> - Where applicants register for the Match select and rank residency programs they have applied to.</li><br />
<li><a href="http://www.nrmp.org/data/chartingoutcomessms2011.pdf" target="_blank">Charting Outcomes in the Match</a> - Characteristics of Applicants Who Matched to Their Preferred Specialty in the 2011 Main Residency Match</li><br />
<li><a href="http://www.ama-assn.org/ama/pub/education-careers/graduate-medical-education/freida-online.page" target="_blank">The Fellowship and Residency Electronic Interactive Database (FREIDA)</a> - Allows you to search for specialties by location and various criteria.  Nearly 9000 Graduate Medical Education programs can be found here.</li><br />
<li><a href="http://www.sfmatch.org/" target="_blank">San Francisco Matching Program</a> – Ophthalmology – this is an early match specialty</li><br />
<li><a href="http://www.auanet.org/" target="_blank">American Urological Association</a> – this is an early match specialty</li><br />
<li><a href="http://www.aafp.org/dam/AAFP/documents/medical_education_residency/fmig/StrollingMatch.pdf" target="_blank">American Academy of Family Physicians</a> – Strolling through the Match Publication – a comprehensive guide detailing residency application and the match.</li><br />
<li><a href="http://www.usmle.org/" target="_blank">National Board of Medical Examiners USMLE</a> - United States Medical Licensing Examination – (USMLE)</li><br />
<li><a href="/docs/Dartmouth Institute Residency_report.pdf">What Kind of Physician Will You Be?</a> - When choosing a residency program, medical students typically consider the reputation and training curriculum of the institution, as well as their own geographical and lifestyle preferences. But there's something else they should consider: The way academic medical centers deliver health care differs dramatically from one institution to the next. A new report from the Dartmouth Atlas Project, led by physicians in training, found that 23 top academic medical centers vary markedly in the intensity of care they provide patients at the end of life, in their quality, safety and patient experience ratings, and in their use of surgical procedures when other treatment alternatives exist.</li><br />
<li><a href="http://medicine.missouri.edu/handbook/" target="_blank">MU SOM Student handbook</a></li><br />
<li><a href="http://medicine.missouri.edu/students/calendars.html" target="_blank">Academic Calendars</a></li><br />
<li><a href="https://ome.som.missouri.edu/SRC/Modules/Site/Home.aspx" target="_blank">Senior Rotation Catalog</a></li><br />
<li><a href="http://www.nrmp.org/communication.html" target="_blank">NRMP Match Tools</a></li>
</ul>



<br /><br /><br /><br /><br /><br />

        
          <br />
        </div></td>
      <td valign="top"><? include("inc/right-steps.php"); ?></td>
    </tr>
  </table>
  <? include("inc/footer.php"); ?>
  </div>
  
<?
} else {

header("location: login.php");
}
?>
</body>
</html>