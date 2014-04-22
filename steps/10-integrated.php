<script>
function resources()   {
	NewWindow=window.open("/steps/10-resources.html","",'width=430,height=600,menubar=no,scrollbars=yes')
   }
  
function tips()   {
	NewWindow=window.open("/steps/10-tips.php","",'width=430,height=600,menubar=no,scrollbars=yes')
   }   
   
   function samples()   {
	NewWindow=window.open("/steps/10-samples.php","",'width=430,height=600,menubar=no,scrollbars=yes')
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
		 			var integratedID = $('input[name=integratedID]').val();
				    var currentRel = $('input[name=currentRel]').val();	

		  
		  $.post('/steps/update.php', { value:value,checkname:checkname,id:integratedID,currentRel:currentRel,sectionname:"s_integrated",sectionnumber:"section10" }, function(data){});
					$(this).parent().addClass("selected");
					$(this).parent().find(":checkbox").attr("checked","checked");					
				}
			);
			
			$(".checklist .checkbox-deselect").click(
				function(event) {
					event.preventDefault();				
					
					var checkname = $(this).parent().attr('name');		  
		  			var integratedID = $('input[name=integratedID]').val();
					var currentRel = $('input[name=currentRel]').val();		  
		  
					 $.post('/steps/update.php', { value:0,checkname:checkname,id:integratedID,currentRel:currentRel,sectionname:"s_integrated",sectionnumber:"section10" }, function(data){});
					$(this).parent().removeClass("selected");
					$(this).parent().find(":checkbox").removeAttr("checked");					
				}
			);	
	});
</script>
<? } ?>

	<?
        if ($userRole == "adviser") {
		$query666 = mysql_query("SELECT * FROM s_integrated WHERE student_id='$studentid'");
		} else { 
		$query666 = mysql_query("SELECT * FROM s_integrated WHERE student_id='$userID'");
		}
		

		$data_set666 = mysql_fetch_array($query666);
		$integratedID = $data_set666['0'];
		$integratedActive = $data_set666['6'];
		$integratedDate = $data_set666['10'];
		
		$step1 = $data_set666['3'];
		$step2 = $data_set666['4'];
		$step3 = $data_set666['5'];
		

?>


<h1>Integrated Residency Program</h1>

Each year several University of Missouri Hospitals and Clinics departments offer integrated residency programs.  The positions available in specialties vary from year to year. The application process begins in the third year. Departments that will offer integrated residencies will notify third-year students of application procedures and deadlines.
<br /><br />
<b>The NRMP Match and the integrated resident.</b>
<br /><br />
Integrated residents will register with the <a href="http://www.nrmp.org/" target="_blank">NRMP</a> and only enter and rank their MU residency program.  
<br /><br />
<h2>Integrated Residency Contacts</h2>
Questions regarding integrated residency positions and application deadlines and procedures can be addressed to the following individuals:
<ul>
<li><b>Anesthesiology</b> - <a href="mailto:ShepardB@health.missouri.edu">Beth Shepard</a></li>
<li><b>Family Medicine</b> - <a href="mailto:silveyg@health.missouri.edu">Gina Silvey</a></li>
<li><b>Internal Medicine</b> - <a href="mailto:TiptonSA@health.missouri.edu">Adam Tipton</a></li>
<li><b>Neurology</b> - <a href="mailto:oconnorpd@health.missouri.edu">Penny McQueen</a></li>
<li><b>Pathology</b> - <a href="mailto:wetzels@health.missouri.edu">Shannon Wetzel</a></li>
<li><b>Pediatrics and Med/Peds</b> - <a href="mailto:AdamsKrausP@health.missouri.edu">Penny Adams-Kraus</a></li>
<li><b>Physical Medicine and Rehabilitation</b> - <a href="mailto:mailto:faridrez@health.missouri.edu">Rez Farid </a></li>
<li><b>Psychiatry</b> - <a href="mailto:McCannC@health.missouri.edu">Cynthia McCann</a></li>
</ul>

<br />
<a href="/docs/10-integrated/INTEGRATED RESIDENCY APPLICATION SAMPLE12-13.pdf" target="_blank">Integrated residency sample application form</a>
<br /><br /><br />



<div class="note">
<a href="javascript:tips()"><span style="font-size: 16px;">Tips and Tricks</span></a>
<br /><br />
<a href="javascript:resources()"><span style="font-size: 16px;">Resources</span></a>
<br /><br />
<a href="javascript:samples()"><span style="font-size: 16px;">Samples</span></a>
<br />
</div>

<p /><br />


<div style="margin-left: 15px;">
<h2 style="margin: 0; padding: 0; font-size: 15px;">Steps:</b></span></h2>
Last Updated: <? echo $integratedDate; ?>
<table>
<tr>
<td colspan="3">
<br />
	
            
       <form enctype="multipart/form-data" action="inc/update_step10.php" method="post" name="integratedNotesForm">
       <input type="hidden" name="currentRel" value="<? echo $currentRel; ?>" />     
       <input type="hidden" name="integratedID" value="<? echo $integratedID; ?>" /> 
		<fieldset>
			<label for="choices">
			<ul class="checklist">
            <table>
            <tr>
            <td>
					<li<? if ($step1 == 1) { ?> class="selected"<? } ?> name="step1">
						<input name="step10-1" value="1" type="checkbox" <? if ($step1 == 1) { ?>checked<? } ?> />
						<p>Submit Application</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>

					</li>
                    </td>
                    
                    <td>
					<li<? if ($step2 == 1) { ?> class="selected"<? } ?> name="step2">
						<input name="step10-2" value="1" type="checkbox" <? if ($step2 == 1) { ?>checked<? } ?> />
						<p>Register With NRMP<br /><br /><br />(<a href="http://www.nrmp.org" target="_blank" class="checklist">click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>

					</li>
                    </td><td>
                    <li<? if ($step3 == 1) { ?> class="selected"<? } ?> name="step3">
						<input name="step10-3" value="1" type="checkbox" <? if ($step3 == 1) { ?>checked<? } ?> />
						<p>Certify Rank Order List in NRMP<br /><br />(<a href="http://www.nrmp.org/res_match/yearly.html" target="_blank" class="checklist">click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>

					</li>
                    </td><td>
				
                    </td>
  
                    </tr>
                   
                    </table>
				</ul>
			</label>
<div style="clear: both;"></div>
			
		</fieldset>


</form>
<br /><br />