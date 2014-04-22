<?
session_start();
if(isset($_SESSION["user"]))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dash Board - Clinical Advising Tool For Students &amp; Advisors - University of Missouri School of Medicine</title>
<link rel="stylesheet" type="text/css" href="/css/style.css" />
<link rel="stylesheet" type="text/css" href="/css/checklist.css" />
<link rel="stylesheet" type="text/css" href="/css/jquery-ui.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.progressbar.min.js"></script>


<script type="text/javascript">
	$(document).ready(function() {
		$(".step-toggle").click(
				function(event) {	  
					var student_id = $('input[name=student_id]').val();
					var value = $(this).val();	
					var sectionname = $(this).attr('name');		 				  
		  $.post('/steps/update2.php', { value:value,sectionname:sectionname,student_id:student_id }, function(data){});			
				}
			);
	});
</script>
  
  
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
          <!-- START CONTENT -->
          <h1>CATSA Dashboard</h1>
          <br />
          <span id="welcome">Welcome <b><? if($_SESSION["user"] == "Guest") { ?>Guest<? } else { ?><? echo $userFirstName; ?><? } ?></b></span>, you have successfully logged in to <b>CATSA.</b><br />
          <br />
          The Clinical Advising Tool for Students and Advisors (CATSA) is a web-based tool designed to assist students and their advisors with the steps required for successful residency application and preparation.  Both advisors and students have access to an individualized <a href="print.php"><span style="font-size: 14px;">summary</span></a> detailing specific progress students are making toward residency application. <br />
          <br />
          Students and advisors can decide how to best use this tool during the advising process. <br />
          <br />
          Please use the options to the right to begin tracking your process.  <? if ($userRole == "student") { ?>Click on the 'Hide' button to hide sections that are not applicable to your advising process (ie. Military, Integrated Residency, etc.)  You can always show <a href="main2.php">inactive sections</a> again later if needed.<? } ?><br />
          
         <? if ($userNotes == "demo") { ?>
        <br /><br />
        <span style="color: #ff0000;"><b>Note:</b> This account is not linked to a particular student and is not in any relationship.  This is a <b>DEMO</b> account and has access to view all students.  You can add to already existing advisor notes, documents, etc... however, a student will not be able to directly interact with you.</span>
        <? } ?>
        
         <? if (($userRole == "adviser") && ($_SESSION["user"] != "Guest")) { ?>
        <br /><br />
        <span style="color: #ff0000;"><b>Note:</b> Please select a student from the drop down menu below and hit 'Update' to retrieve data.</span>
        <? } ?>
        
        
          <br />
          <br />
<? if (($userRole == "adviser") && ($_SESSION["user"] != "Guest")) { ?>
<form method="POST" action="main.php" id="rel2" name="rel2">
<select name="rel_id" style="font-size: 16px;">
<?

if (($userNotes == "demo")) { 
$query123 = "SELECT * FROM relationships";
} 

else if (($userID == "183") || ($userID == "182")) { 
$query123 = "SELECT * FROM relationships WHERE student_id='$studentid' AND active='1'";
} 
else { 
$query123 = "SELECT * FROM relationships WHERE ". $userRole ."_id='$userID' AND active='1'";
}
$result123 = mysql_query($query123);

?>

<?

  if ($result123) {
    while ($row = mysql_fetch_array ($result123)) {	
		$query666 = mysql_query("SELECT * FROM users WHERE id='$row[2]'");
		$data_set666 = mysql_fetch_array($query666);
		$user666 = $data_set666['username'];	
					
?>
              <option value="<? echo $row[0]; ?>" <? if ($row[0] == $currentRel) { echo("selected='selected'"); } ?>><? echo $row[1]; ?></option>
           
              <? }} ?>
            </select>
            <input type="hidden" name="currentRela" id="currentRela" value="<? echo $_POST['rel_id']; ?>" />
            <? echo $row[2]; ?>
            <input type="submit" name="submit" class="form-submit-button2" value="Update" />
          </form>
          <br />
          <? if (isset($_POST["rel_id"])) { ?>
            <? $currentRel = $_POST[rel_id]; ?>
            Current Relationship ID: <? echo $currentRel; ?> <br />
            <br />
            <br />
            <? }} ?>
          <? 
if(isset($_POST['submit'])) { 
$queryrelselect = mysql_query("SELECT * FROM current_rel WHERE adviser_id = '$userID'") or die(mysql_error());
$num = mysql_num_rows($queryrelselect);
if ($num != '0') { 
$sqlaa = "UPDATE current_rel SET current_relnum='$currentRel' WHERE adviser_id=$userID";	
mysql_query($sqlaa);
} else {
$queryrel = "INSERT INTO current_rel (id, adviser_id, current_relnum) VALUES ('', '$userID', '$currentRel')";
mysql_query($queryrel) or die('Error, query failed');

}
?>
          <meta http-equiv="refresh" content="0;url=main.php">
          <?
}
?>
          <?
if ($userRole == "adviser") { 
  $query123 = "SELECT * FROM relationships WHERE id='$currentRel'";
} else { 
   $query123 = "SELECT * FROM relationships WHERE student_id='$userID' LIMIT 1";
} 

if (($_SESSION["user"] == "Guest")) { 
$query123 = "SELECT * FROM relationships WHERE id=12";
} 

  $result123 = mysql_query($query123);
  if ($result123) {
    while ($row = mysql_fetch_array ($result123)) {
		if ($userRole == "adviser") { 
		$queryMaster = mysql_query("SELECT * FROM master WHERE relationship_id='$currentRel'");
		} else { 
		$queryMaster = mysql_query("SELECT * FROM master WHERE relationship_id='$row[0]'");
		}
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
       
          <span class="dashBoardTitle">1.) <a href="/status.php?step=1">CV</a></span>&nbsp;&nbsp;&nbsp;
          <br />
          <br />             
          <div style="float: right; position: relative; top: -25px;">
            <? if ($section1 == 3) { ?>
            <img src="/images/checkmark_c.jpg" alt="Section Completed" />
            <? } else { ?>
            <img src="/images/notcomplete.jpg" alt="Section Not Complete" />
            <? } ?>
          </div>         
          <div class="dashBoardSection">Section Progress:<br />
            <span class="progressBar" id="pb1"><? echo $section1; ?></span>
          </div>          
          <br /><br /><br />
          <div style="clear: both;"></div>
              
          
          
          
          
          <span class="dashBoardTitle">2.) <a href="/status.php?step=2">Electives and Rotations</a></span>&nbsp;&nbsp;&nbsp;
          <br />
          <br />             
          <div style="float: right; position: relative; top: -25px;">
            <? if ($section2 == 3) { ?>
            <img src="/images/checkmark_c.jpg" alt="Section Completed" />
            <? } else { ?>
            <img src="/images/notcomplete.jpg" alt="Section Not Complete" />
            <? } ?>
          </div>         
          <div class="dashBoardSection">Section Progress:<br />
            <span class="progressBar" id="pb2"><? echo $section2; ?></span>     
          </div>
          <br /><br /><br />
          <div style="clear: both;"></div>
          
          
          
          

          <span class="dashBoardTitle">3.) <a href="/status.php?step=3">Personal Statements</a></span>&nbsp;&nbsp;&nbsp;
          <br />
          <br />             
          <div style="float: right; position: relative; top: -25px;">
            <? if ($section3 == 3) { ?>
            <img src="/images/checkmark_c.jpg" alt="Section Completed" />
            <? } else { ?>
            <img src="/images/notcomplete.jpg" alt="Section Not Complete" />
            <? } ?>
          </div>         
          <div class="dashBoardSection">Section Progress:<br />
            <span class="progressBar" id="pb3"><? echo $section3; ?></span>        
          </div>
          <br /><br /><br />
          <div style="clear: both;"></div>
          
          
          
          

          <span class="dashBoardTitle">4.) <a href="/status.php?step=4">Recommendation Letters</a></span>&nbsp;&nbsp;&nbsp;
          <br />
          <br />             
          <div style="float: right; position: relative; top: -25px;">
            <? if ($section4 == 5) { ?>
            <img src="/images/checkmark_c.jpg" alt="Section Completed" />
            <? } else { ?>
            <img src="/images/notcomplete.jpg" alt="Section Not Complete" />
            <? } ?>
          </div>         
          <div class="dashBoardSection">Section Progress:<br />
            <span class="progressBar" id="pb4"><? echo $section4; ?></span>
          </div>          
          <br /><br /><br />
          <div style="clear: both;"></div>
          
          
          
          
          <span class="dashBoardTitle">5.) <a href="/status.php?step=5">MSPE</a></span>&nbsp;&nbsp;&nbsp;
          <br />
          <br />             
          <div style="float: right; position: relative; top: -25px;">
            <? if ($section5 == 6) { ?>
            <img src="/images/checkmark_c.jpg" alt="Section Completed" />
            <? } else { ?>
            <img src="/images/notcomplete.jpg" alt="Section Not Complete" />
            <? } ?>
          </div>         
          <div class="dashBoardSection">Section Progress:<br />
            <span class="progressBar" id="pb5"><? echo $section5; ?></span>
          </div>          
          <br /><br /><br />
          <div style="clear: both;"></div>
          
          
          
          
          <? 
		  $querycheck = mysql_query("SELECT * FROM s_eras WHERE student_id='$studentid'");
		  $resultcheck = mysql_fetch_array($querycheck); 	  
		  ?>                  
          <? if (($resultcheck["status"] == "1") || ($userRole == "adviser")) { ?>
          <div id="step6block">
          <span class="dashBoardTitle">6.) <a href="/status.php?step=6">ERAS</a></span>&nbsp;&nbsp;&nbsp;
          <? if ($userRole != "adviser") { ?>
          <input type="hidden" name="student_id" value="<? echo $studentid; ?>" />
          <input type="button" value="Hide" id="step6-hide" class="step-toggle" name="s_eras" />
          <? } ?>
          <br />
          <br />             
          <div style="float: right; position: relative; top: -25px;">
            <? if ($section6 == 14) { ?>
            <img src="/images/checkmark_c.jpg" alt="Section Completed" />
            <? } else { ?>
            <img src="/images/notcomplete.jpg" alt="Section Not Complete" />
            <? } ?>
          </div>         
          <div class="dashBoardSection">Section Progress:<br />
            <span class="progressBar" id="pb6"><? echo $section6; ?></span>
          </div>          
          </div>
          <br /><br /><br />
          <div style="clear: both;"></div>
          <? } ?>
          
          
          
          
          
          <span class="dashBoardTitle">7.) <a href="/status.php?step=7">Residency Programs</a></span>&nbsp;&nbsp;&nbsp;
          <br />
          <br />             
          <div style="float: right; position: relative; top: -25px;">
            <? if ($section7 == 5) { ?>
            <img src="/images/checkmark_c.jpg" alt="Section Completed" />
            <? } else { ?>
            <img src="/images/notcomplete.jpg" alt="Section Not Complete" />
            <? } ?>
          </div>         
          <div class="dashBoardSection">Section Progress:<br />
            <span class="progressBar" id="pb7"><? echo $section7; ?></span>
          </div>          
          <br /><br /><br />
          <div style="clear: both;"></div>
          
          
          
          
          <? 
		  $querycheck = mysql_query("SELECT * FROM s_military WHERE student_id='$studentid'");
		  $resultcheck = mysql_fetch_array($querycheck); 	  
		  ?>                  
          <? if (($resultcheck["status"] == "1") || ($userRole == "adviser")) { ?>
          <div id="step8block">
          <span class="dashBoardTitle">8.) <a href="/status.php?step=8">Military</a></span>&nbsp;&nbsp;&nbsp;
          <? if ($userRole != "adviser") { ?>
          <input type="hidden" name="student_id" value="<? echo $studentid; ?>" />
          <input type="button" value="Hide" id="step8-hide" class="step-toggle" name="s_military" />
          <? } ?>
          <br />
          <br />             
          <div style="float: right; position: relative; top: -25px;">
            <? if ($section8 == 5) { ?>
            <img src="/images/checkmark_c.jpg" alt="Section Completed" />
            <? } else { ?>
            <img src="/images/notcomplete.jpg" alt="Section Not Complete" />
            <? } ?>
          </div>         
          <div class="dashBoardSection">Section Progress:<br />
            <span class="progressBar" id="pb8"><? echo $section8; ?></span>
          </div>          
          </div>
          <br /><br /><br />
          <div style="clear: both;"></div>
          <? } ?>
          
          

          
          
          
          <? 
		  $querycheck = mysql_query("SELECT * FROM s_early WHERE student_id='$studentid'");
		  $resultcheck = mysql_fetch_array($querycheck); 	  
		  ?>                  
          <? if (($resultcheck["status"] == "1") || ($userRole == "adviser")) { ?>
          <div id="step9block">
          <span class="dashBoardTitle">9.) <a href="/status.php?step=9">Early Match</a></span>&nbsp;&nbsp;&nbsp;
          <? if ($userRole != "adviser") { ?>
          <input type="hidden" name="student_id" value="<? echo $studentid; ?>" />
          <input type="button" value="Hide" id="step9-hide" class="step-toggle" name="s_early" />
          <? } ?>
          <br />
          <br />             
          <div style="float: right; position: relative; top: -25px;">
            <? if ($section9 == 14) { ?>
            <img src="/images/checkmark_c.jpg" alt="Section Completed" />
            <? } else { ?>
            <img src="/images/notcomplete.jpg" alt="Section Not Complete" />
            <? } ?>
          </div>         
          <div class="dashBoardSection">Section Progress:<br />
            <span class="progressBar" id="pb9"><? echo $section9; ?></span>
          </div>          
          </div>
          <br /><br /><br />
          <div style="clear: both;"></div>
          <? } ?>         
          
          
          
          
          
          <? 
		  $querycheck = mysql_query("SELECT * FROM s_integrated WHERE student_id='$studentid'");
		  $resultcheck = mysql_fetch_array($querycheck); 	  
		  ?>                  
          <? if (($resultcheck["status"] == "1") || ($userRole == "adviser")) { ?>
          <div id="step10block">
          <span class="dashBoardTitle">10.) <a href="/status.php?step=10">Integrated Residency</a></span>&nbsp;&nbsp;&nbsp;
          <? if ($userRole != "adviser") { ?>
          <input type="hidden" name="student_id" value="<? echo $studentid; ?>" />
          <input type="button" value="Hide" id="step10-hide" class="step-toggle" name="s_integrated" />
          <? } ?>
          <br />
          <br />             
          <div style="float: right; position: relative; top: -25px;">
            <? if ($section10 == 3) { ?>
            <img src="/images/checkmark_c.jpg" alt="Section Completed" />
            <? } else { ?>
            <img src="/images/notcomplete.jpg" alt="Section Not Complete" />
            <? } ?>
          </div>         
          <div class="dashBoardSection">Section Progress:<br />
            <span class="progressBar" id="pb10"><? echo $section10; ?></span>
          </div>          
          </div>
          <br /><br /><br />
          <div style="clear: both;"></div>
          <? } ?>
          
          
          
          
          <span class="dashBoardTitle">11.) <a href="/status.php?step=11">Interviews</a></span>&nbsp;&nbsp;&nbsp;
          <br />
          <br />             
          <div style="float: right; position: relative; top: -25px;">
            <? if ($section11 == 6) { ?>
            <img src="/images/checkmark_c.jpg" alt="Section Completed" />
            <? } else { ?>
            <img src="/images/notcomplete.jpg" alt="Section Not Complete" />
            <? } ?>
          </div>         
          <div class="dashBoardSection">Section Progress:<br />
            <span class="progressBar" id="pb11"><? echo $section11; ?></span>
          </div>          
          <br /><br /><br />
          <div style="clear: both;"></div>
          
          
          
          
          <? 
		  $querycheck = mysql_query("SELECT * FROM s_nrmp WHERE student_id='$studentid'");
		  $resultcheck = mysql_fetch_array($querycheck); 	  
		  ?>                  
          <? if (($resultcheck["status"] == "1") || ($userRole == "adviser")) { ?>
          <div id="step12block">
          <span class="dashBoardTitle">12.) <a href="/status.php?step=12">NRMP</a></span>&nbsp;&nbsp;&nbsp;
          <? if ($userRole != "adviser") { ?>
          <input type="hidden" name="student_id" value="<? echo $studentid; ?>" />
          <input type="button" value="Hide" id="step12-hide" class="step-toggle" name="s_nrmp" />
          <? } ?>
          <br />
          <br />             
          <div style="float: right; position: relative; top: -25px;">
            <? if ($section12 == 6) { ?>
            <img src="/images/checkmark_c.jpg" alt="Section Completed" />
            <? } else { ?>
            <img src="/images/notcomplete.jpg" alt="Section Not Complete" />
            <? } ?>
          </div>         
          <div class="dashBoardSection">Section Progress:<br />
            <span class="progressBar" id="pb12"><? echo $section12; ?></span>
          </div>          
          </div>
          <br /><br /><br />
          <div style="clear: both;"></div>
          
          
          
          
          
          
        
          <div id="step12block">
          <span class="dashBoardTitle">13.) <a href="/status.php?step=13">SOAP</a></span>&nbsp;&nbsp;&nbsp;
 
          <br /><br /><br />
          <div style="clear: both;"></div>
          
          
          
          <? } ?>
          

          <? }} ?>
          <br />
          <br />
          <br />
          <br />
          <br />
       
          
           <br />
        </div></td>
      <td valign="top"><? include("inc/right-steps.php"); ?></td>
    </tr>
  </table>
  <? include("inc/footer.php"); ?>
  </div>
  

<script>
	$("#step6-hide").click(function () {
      $("#step6block").fadeOut("2000");
	  setTimeout("location.reload(true);",500);
    });
	$("#step8-hide").click(function () {
      $("#step8block").fadeOut("2000");
	  setTimeout("location.reload(true);",500);
    });
	$("#step9-hide").click(function () {
      $("#step9block").fadeOut("2000");
	  setTimeout("location.reload(true);",500);
    });
	$("#step10-hide").click(function () {
      $("#step10block").fadeOut("2000");
	  setTimeout("location.reload(true);",500);
    });
	$("#step12-hide").click(function () {
      $("#step12block").fadeOut("2000");
	  setTimeout("location.reload(true);",500);
    });
</script>

  
<?
} else {

header("location: login.php");
}
?>
</body>
</html>