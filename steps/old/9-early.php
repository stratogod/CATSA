<script>
function resources()   {
	NewWindow=window.open("/steps/9-resources.html","",'width=430,height=600,menubar=no,scrollbars=yes')
   }

function tips()   {
	NewWindow=window.open("/steps/9-tips.php","",'width=430,height=600,menubar=no,scrollbars=yes')
   }   

function samples()   {
	NewWindow=window.open("/steps/9-samples.php","",'width=430,height=600,menubar=no,scrollbars=yes')
   }   
</script>


<? if ($userRole != "adviser") { ?>
<script type="text/javascript">
	$(document).ready(function() {
		$(".checklist .checkbox-select").click(
				function(event) {
					event.preventDefault(); 
	  
          			var checkname = $(this).parent().attr('name');		  
		 			var value = $('input[type=checkbox]').val();
		 			var earlyID = $('input[name=earlyID]').val();
				    var currentRel = $('input[name=currentRel]').val();	

		  
		  $.post('/steps/update.php', { value:value,checkname:checkname,id:earlyID,currentRel:currentRel,sectionname:"s_early",sectionnumber:"section9" }, function(data){});
					$(this).parent().addClass("selected");
					$(this).parent().find(":checkbox").attr("checked","checked");					
				}
			);
			
			$(".checklist .checkbox-deselect").click(
				function(event) {
					event.preventDefault();				
					
					var checkname = $(this).parent().attr('name');		  
		  			var earlyID = $('input[name=earlyID]').val();
					var currentRel = $('input[name=currentRel]').val();		  
		  
					 $.post('/steps/update.php', { value:0,checkname:checkname,id:earlyID,currentRel:currentRel,sectionname:"s_early",sectionnumber:"section9" }, function(data){});
					$(this).parent().removeClass("selected");
					$(this).parent().find(":checkbox").removeAttr("checked");					
				}
			);	
	});
</script>
<? } ?>

	<?
  if ($userRole == "adviser") {
		$query666 = mysql_query("SELECT * FROM s_early WHERE student_id='$studentid'");
		} else { 
		$query666 = mysql_query("SELECT * FROM s_early WHERE student_id='$userID'");
		}

		$data_set666 = mysql_fetch_array($query666);
		$earlyID = $data_set666['0'];
		$earlyActive = $data_set666['17'];
		$earlyDate = $data_set666['21'];
		
		$step1 = $data_set666['3'];
		$step2 = $data_set666['4'];
		$step3 = $data_set666['5'];
		$step4 = $data_set666['6'];
		$step5 = $data_set666['7'];
		$step6 = $data_set666['8'];
		$step7 = $data_set666['9'];
		$step8 = $data_set666['10'];
		$step9 = $data_set666['11'];
		$step10 = $data_set666['12'];
		$step11 = $data_set666['13'];
		$step12 = $data_set666['14'];
		$step13 = $data_set666['15'];
		$step14 = $data_set666['16'];

		
?>


<h1>Early Match</h1>

<p>The specialties of ophthalmology and urology are not included in the NRMP. These specialties have their own matches, usually in January and often referred to as the "early match". The <a href="https://www.aamc.org/students/medstudents/cim/" target="_blank">Careers in Medicine</a> Specialty Pages resource has detailed information to guide your research. If you are interested in these specialties, it is important to be aware of the deadlines for application materials and letters of recommendation because they are much earlier than for the NRMP. Early match programs may use ERAS. Always check with the individual programs. </p>

<p>Urology applicants register online at the <a href="http://www.auanet.org/education/residency.cfm" target="_blank">AUA website</a> and receive an identification number within 2 weeks. Each program requires the identification number. Urology programs have the option to participate in <a href="https://www.aamc.org/students/medstudents/eras/" target="_blank">ERAS</a>. Please investigate the process of application program by program.
<ul>
<li><a href="http://www.auanet.org/education/urology-and-specialty-matches.cfm" target="_blank">AUA Application/Match Timetable</a></li>
</ul>
</p>

<p>Applicants for Ophthalmology register online at the <a href="http://www.sfmatch.org/index.htm" target="_blank">San Francisco Matching Service</a> to begin working on their applications via the Central Application Service. 
<ul>
<li><a href="http://www.sfmatch.org/general/general_timetable.htm" target="_blank">San Francisco Matching Service Timetable</a></li>
</ul>

<br />
<br />



<div class="note">
<a href="javascript:tips()"><span style="font-size: 16px;">Tips and Tricks</span></a>
<br /><br />
<a href="javascript:resources()"><span style="font-size: 16px;">Resources</span></a>
<br />
</div>

<p /><br />

<div style="margin-left: 15px;">
<h2 style="margin: 0; padding: 0; font-size: 15px;">Steps:</b></span></h2>
Last Updated: <? echo $earlyDate; ?>
<table>
<tr>
<td colspan="3">
<br />
	

<b>San Francisco Match</b><br />
       <form enctype="multipart/form-data" action="inc/update_step9.php" method="post" name="earlyNotesForm">
       <input type="hidden" name="currentRel" value="<? echo $currentRel; ?>" />     
       <input type="hidden" name="earlyID" value="<? echo $earlyID; ?>" /> 
		<fieldset>
			<label for="choices">            
			<ul class="checklist">
            
            <table>
            <tr>
            <td>
 
					<li<? if ($step1 == 1) { ?> class="selected"<? } ?> name="step1">
						<input name="step9-1" value="1" type="checkbox" <? if ($step1 == 1) { ?>checked<? } ?> />
						<p>CAS application complete<br /><br /><br />(<a href="http://www.sfmatch.org/residency/ophthalmology/index.htm" target="_blank" class="checklist">Click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>

					</li>
                    </td>
            
                    <td><li<? if ($step2 == 1) { ?> class="selected"<? } ?> name="step2">
						<input name="step9-2" value="1" type="checkbox" <? if ($step2 == 1) { ?>checked<? } ?> />
						<p>CAS Distribution List and payment<br /><br /><br />(<a href="http://www.sfmatch.org/residency/ophthalmology/index.htm" target="_blank" class="checklist">Click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>

					</li></td>
          
					<td><li<? if ($step3 == 1) { ?> class="selected"<? } ?> name="step3">
						<input name="step9-3" value="1" type="checkbox" <? if ($step3 == 1) { ?>checked<? } ?> />
						<p>Request Undergrad Transcript</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li></td>
                    
                    <td><li<? if ($step4 == 1) { ?> class="selected"<? } ?> name="step4">
						<input name="step9-4" value="1" type="checkbox" <? if ($step4 == 1) { ?>checked<? } ?> />
						<p>Request Med School Transcript<br /><br /><br />(<a href="/docs/9-early/EARLY MATCH Medical School Transcript .pdf" target="_blank" class="checklist">Click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li></td>
                    
                    <td><li<? if ($step5 == 1) { ?> class="selected"<? } ?> name="step5">
						<input name="step9-5" value="1" type="checkbox" <? if ($step5 == 1) { ?>checked<? } ?> />
						<p>Request USMLE Transcript<br /><br /><br />(<a href="/docs/9-early/USMLE Transcripts EARLY MATCH link.pdf" target="_blank" class="checklist">Click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li></td>
                    </tr>
                    
                    <tr>
                    <td><li<? if ($step6 == 1) { ?> class="selected"<? } ?> name="step6">
						<input name="step9-6" value="1" type="checkbox" <? if ($step6 == 1) { ?>checked<? } ?> />
						<p>Notify OME of SF Match Participation<br /><br /><br />(<a href="mailto:gravesg@health.missouri.edu?cc=brownrac@health.missouri.edu" class="checklist">Click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li></td>
                    
                    <td><li<? if ($step7 == 1) { ?> class="selected"<? } ?> name="step7">
						<input name="step9-7" value="1" type="checkbox" <? if ($step7 == 1) { ?>checked<? } ?> />
						<p>Provide OME with SF Applicant #<br /><br /><br /><br />(<a href="http://www.sfmatch.org/residency/ophthalmology/index.htm" target="_blank" class="checklist">Click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li></td>
                    
                    <td><li<? if ($step8 == 1) { ?> class="selected"<? } ?> name="step8">
						<input name="step9-8" value="1" type="checkbox" <? if ($step8 == 1) { ?>checked<? } ?> />
						<p>Letters of Reference (3)<br /><br /><br /><br />(<a href="/status.php?step=4" class="checklist">Click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li></td>
                    
                    <td><li<? if ($step9 == 1) { ?> class="selected"<? } ?> name="step9">
						<input name="step9-9" value="1" type="checkbox" <? if ($step9 == 1) { ?>checked<? } ?> />
						<p>Mail CAS application packet<br /><br /><br /><br />(<a href="http://www.sfmatch.org/residency/ophthalmology/index.htm" target="_blank" class="checklist">Click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li></td>
                    
                    <td><li<? if ($step10 == 1) { ?> class="selected"<? } ?> name="step10">
						<input name="step9-10" value="1" type="checkbox" <? if ($step10 == 1) { ?>checked<? } ?> />
						<p>Submit Rank Order List<br /><br /><br /><br />(<a href="http://www.sfmatch.org/residency/ophthalmology/index.htm" target="_blank" class="checklist">Click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li></td>
                    </tr>
                    
                    <tr>
                    <td><li<? if ($step11 == 1) { ?> class="selected"<? } ?> name="step11">
						<input name="step9-11" value="1" type="checkbox" <? if ($step11 == 1) { ?>checked<? } ?> />
						<p>Apply to PGY1 Programs<br /><br /><br /><br />(<a href="/status.php?step=6" class="checklist">Click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li></td>
                    
                    </tr>
                    </table>
                    </ul>
                    
                    <br />
                    <b>AUA Match</b><br />
                    <ul class="checklist">
                    <table>
                    <tr>
                    <td><li<? if ($step12 == 1) { ?> class="selected"<? } ?> name="step12">
						<input name="step9-12" value="1" type="checkbox" <? if ($step12 == 1) { ?>checked<? } ?> />
						<p>Register with <a href="/status.php?step=6" class="checklist">ERAS</a></p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li></td>
                    
                    <td><li<? if ($step13 == 1) { ?> class="selected"<? } ?> name="step13">
						<input name="step9-13" value="1" type="checkbox" <? if ($step13 == 1) { ?>checked<? } ?> />
						<p>Contact non ERAS participating programs<br /><br /><br />(<a href="/docs/9-early/AUA PROGRAMS.pdf" target="_blank" class="checklist">Click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li></td>
                    
                    <td><li<? if ($step14 == 1) { ?> class="selected"<? } ?> name="step14">
						<input name="step9-14" value="1" type="checkbox" <? if ($step14 == 1) { ?>checked<? } ?> />
						<p>Complete Preference List<br /><br /><br /><br />(<a href="/docs/9-early/Preference list  Program List.pdf" target="_blank" class="checklist">Click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li></td>
                    </tr>
                    </table>


             

					
	
				</ul>
			</label>
<div style="clear: both;"></div>
			
		</fieldset>

</form>
<br /><br />