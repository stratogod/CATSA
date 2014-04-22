<script>
function resources()   {
	NewWindow=window.open("/steps/6-resources.html","",'width=430,height=600,menubar=no,scrollbars=yes')
   }

function tips()   {
	NewWindow=window.open("/steps/6-tips.php","",'width=600,height=600,menubar=no,scrollbars=yes')
   } 
   
   function tips3()   {
	NewWindow=window.open("/steps/6-tips.php#2","",'width=600,height=600,menubar=no,scrollbars=yes')
   }   
   
   function tips2()   {
	NewWindow=window.open("/steps/6-tips.php#3","",'width=600,height=600,menubar=no,scrollbars=yes')
   }  
   
   function tips4()   {
	NewWindow=window.open("/steps/6-tips.php#7","",'width=600,height=600,menubar=no,scrollbars=yes')
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
		 			var erasID = $('input[name=erasID]').val();
				    var currentRel = $('input[name=currentRel]').val();	

		  
		  $.post('/steps/update.php', { value:value,checkname:checkname,id:erasID,currentRel:currentRel,sectionname:"s_eras",sectionnumber:"section6" }, function(data){});
					$(this).parent().addClass("selected");
					$(this).parent().find(":checkbox").attr("checked","checked");					
				}
			);
			
			$(".checklist .checkbox-deselect").click(
				function(event) {
					event.preventDefault();				
					
					var checkname = $(this).parent().attr('name');		  
		  			var erasID = $('input[name=erasID]').val();
					var currentRel = $('input[name=currentRel]').val();		  
		  
					 $.post('/steps/update.php', { value:0,checkname:checkname,id:erasID,currentRel:currentRel,sectionname:"s_eras",sectionnumber:"section6" }, function(data){});
					$(this).parent().removeClass("selected");
					$(this).parent().find(":checkbox").removeAttr("checked");					
				}
			);	
	});
</script>
<? } ?>
	
	<?
        if ($userRole == "adviser") {
		$query666 = mysql_query("SELECT * FROM s_eras WHERE student_id='$studentid'");
		} else { 
		$query666 = mysql_query("SELECT * FROM s_eras WHERE student_id='$userID'");
		}
		$data_set666 = mysql_fetch_array($query666);
		$erasID = $data_set666['0'];
		$erasActive = $data_set666['17'];
		$erasDate = $data_set666['21'];
		
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

<h1>Electronic Residency Application Service (ERAS)</h1>


<a href="https://www.aamc.org/students/medstudents/eras/" target="_blank">ERAS</a> is the primary program used to apply to residency programs.  Some Urology Programs (see <a href="/status.php?step=9">Early Match</a>) and some Military Programs (see <a href="/status.php?step=8">Military</a>) will use ERAS.  Ophthalmology (see <a href="/status.php?step=9">Early Match</a>) and Mizzou Integrated Residency Programs (see <a href="/status.php?step=10">Integrated Residency</a>) DO NOT use ERAS.
<br /><br />
<a href="https://www.aamc.org/students/medstudents/eras/" target="_blank">ERAS</a> offers a central location for applicants to submit the necessary documents for residency application. Applicants designate programs of interest. The programs gain access to documents through application designation. 
<br /><br />
The MU Office of Medical Education is the designated Dean's office for ERAS. (see <a href="https://catsa.missouri.edu/docs/6-eras/ERAS Helpful info.pdf" target="_blank">ERAS Helpful info for Students</a>).  Questions? Please contact <a href="mailto:neffse@health.missouri.edu">Suzanne Neff</a> 
<br /><br />

<b>IMPORTANT DATES:</b>
<ul>
<li>Spring 2014 (Exact date TBA) - <a href="https://services.aamc.org/eras/myeras2013/" target="_blank">MyEras</a> opens (applicant web-based system for application to residency program)</li><br />
<li>September 15 - Begin transmitting applications via ERAS to residency programs</li><br />
<li>Additional Timelines - Residency programs set their own application deadlines</li><br />
<li><a href="/docs/6-eras/residency_timeline_print.pdf" target="_blank">Residency Applicant Timeline</a></li>
</ul>
<br />
<a href="http://www.nrmp.org/data/chartingoutcomessms2011.pdf" target="_blank">National Specialty Match Data</a>
<br /><br />


<div class="note">
<a href="javascript:tips()"><span style="font-size: 16px;">Tips and Tricks</span></a>
<br /><br />
<a href="javascript:resources()"><span style="font-size: 16px;">Resources</span></a>
<br />
</div>

<p /><br />

<div style="margin-left: 15px;">
<h2 style="margin: 0; padding: 0; font-size: 15px;">Steps:</b></span></h2>
Last Updated: <? echo $erasDate; ?>
<table>
<tr>
<td colspan="3">
<br />
	      
       <form enctype="multipart/form-data" action="inc/update_step6.php" method="post" name="erasNotesForm">
       <input type="hidden" name="currentRel" value="<? echo $currentRel; ?>" />
       <input type="hidden" name="erasID" value="<? echo $erasID; ?>" />
		<fieldset>
			<label for="choices">
			<ul class="checklist">
            <table>
            <tr>
            <td>
					<li<? if ($step1 == 1) { ?> class="selected"<? } ?> name="step1">
						<input name="step6-1" value="1" type="checkbox" <? if ($step1 == 1) { ?>checked<? } ?> />
						<p>Register with ERAS<br /><br /><br />(<a href="javascript:tips()" class="checklist">click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>

					</li>
                    </td><td>
                    <li<? if ($step2 == 1) { ?> class="selected"<? } ?> name="step2">
						<input name="step6-2" value="1" type="checkbox" <? if ($step2 == 1) { ?>checked<? } ?> />
						<p>Complete ERAS profile<br /><br /><br />(<a href="javascript:tips()" class="checklist">click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>

					</li>
                    </td>
                    <td>
                    <li<? if ($step3 == 1) { ?> class="selected"<? } ?> name="step3">
						<input name="step6-3" value="1" type="checkbox" <? if ($step3 == 1) { ?>checked<? } ?> />
						<p>Take Photo<br /><br /><br /><br />(<a href="javascript:tips3()" class="checklist">click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>

					</li>
                    </td><td>
					<li<? if ($step4 == 1) { ?> class="selected"<? } ?> name="step4">
						<input name="step6-4" value="1" type="checkbox" <? if ($step4 == 1) { ?>checked<? } ?> />
						<p>Request MU School of Medicine Transcript<br /><br />(<a href="javascript:tips2()" class="checklist">click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li>
                    </td>
                    <td>
					<li<? if ($step5 == 1) { ?> class="selected"<? } ?> name="step5">
						<input name="step6-5" value="1" type="checkbox" <? if ($step5 == 1) { ?>checked<? } ?> />
						<p>Request Letters of Recommendation<br /><br />(<a href="/status.php?step=4" class="checklist">click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li>
                    </td>
                    
                   
                    
                    </tr>
   <tr>
                      <td>
					<li<? if ($step6 == 1) { ?> class="selected"<? } ?> name="step6">
						<input name="step6-6" value="1" type="checkbox" <? if ($step6 == 1) { ?>checked<? } ?> />
						<p>Enter & Finalize Personal Statement(s)<br /><br />(<a href="/status.php?step=3" class="checklist">click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li>
                    </td>
                    
                    
            <td>
					<li<? if ($step7 == 1) { ?> class="selected"<? } ?> name="step7">
						<input name="step6-7" value="1" type="checkbox" <? if ($step7 == 1) { ?>checked<? } ?> />
						<p>Monitor Status of Letters of Recommendation Received by OME<br />(<a href="javascript:tips4()" class="checklist">click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>

					</li>
                    </td><td>
                    <li<? if ($step8 == 1) { ?> class="selected"<? } ?> name="step8">
						<input name="step6-8" value="1" type="checkbox" <? if ($step8 == 1) { ?>checked<? } ?> />
						<p>Complete Application<br /><br /><br />(<a href="https://services.aamc.org/eras/myeras2013/" target="_blank" class="checklist">click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>

					</li>
                    </td><td>
					<li<? if ($step9 == 1) { ?> class="selected"<? } ?> name="step9">
						<input name="step6-9" value="1" type="checkbox" <? if ($step9 == 1) { ?>checked<? } ?> />
						<p>Certify Application<br /><br /><br /><br />(<a href="javascript:tips()" class="checklist">click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li>
                    </td>
                    
                    
                    <td>
					<li<? if ($step10 == 1) { ?> class="selected"<? } ?> name="step10">
						<input name="step6-10" value="1" type="checkbox" <? if ($step9 == 10) { ?>checked<? } ?> />
						<p>Apply to programs<br /><br /><br /><br />(<a href="https://services.aamc.org/eras/myeras2013/" target="_blank" class="checklist">click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li>
                    </td>
                    
                   
                    
                   
                    
                    </tr>
                    
        
                     <tr>
                     
                     
                   
                    <td>
					<li<? if ($step11 == 1) { ?> class="selected"<? } ?> name="step11">
						<input name="step6-11" value="1" type="checkbox" <? if ($step11 == 1) { ?>checked<? } ?> />
						<p>Assign documents to programs<br /><br />(<a href="javascript:tips()" class="checklist">click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li>
                    </td>
      <td>
					<li<? if ($step12 == 1) { ?> class="selected"<? } ?> name="step12">
						<input name="step6-12" value="1" type="checkbox" <? if ($step12 == 1) { ?>checked<? } ?> />
						<p>Pay ERAS fees<br /><br /><br /><br />(<a href="https://services.aamc.org/eras/myeras2013/" target="_blank" class="checklist">click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>

					</li>
                    </td><td>
                    <li<? if ($step13 == 1) { ?> class="selected"<? } ?> name="step13">
						<input name="step6-13" value="1" type="checkbox" <? if ($step13 == 1) { ?>checked<? } ?> />
						<p>Monitor program document downloads via ADTS<br />(<a href="javascript:tips()" class="checklist">click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>

					</li>
                    </td><td>
					<li<? if ($step14 == 1) { ?> class="selected"<? } ?> name="step14">
						<input name="step6-14" value="1" type="checkbox" <? if ($step14 == 1) { ?>checked<? } ?> />
						<p>Update <a href="https://services.aamc.org/eras/myeras2013/" target="_blank" class="checklist">MyERAS</a> profile if needed</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li>
                    </td>
 </tr>
                    
                   
                    </table>
				</ul>
			</label>
<div style="clear: both;"></div>
			
		</fieldset>
</form>
<br /><br />