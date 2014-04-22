<script>
function resources()   {
	NewWindow=window.open("/steps/7-resources.html","",'width=430,height=600,menubar=no,scrollbars=yes')
   }

function tips()   {
	NewWindow=window.open("/steps/7-tips.php","",'width=430,height=600,menubar=no,scrollbars=yes')
   }   

function samples()   {
	NewWindow=window.open("/steps/7-samples.php","",'width=430,height=600,menubar=no,scrollbars=yes')
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
		 			var residencyID = $('input[name=residencyID]').val();
				    var currentRel = $('input[name=currentRel]').val();	

		  
		  $.post('/steps/update.php', { value:value,checkname:checkname,id:residencyID,currentRel:currentRel,sectionname:"s_residency",sectionnumber:"section7" }, function(data){});
					$(this).parent().addClass("selected");
					$(this).parent().find(":checkbox").attr("checked","checked");					
				}
			);
			
			$(".checklist .checkbox-deselect").click(
				function(event) {
					event.preventDefault();				
					
					var checkname = $(this).parent().attr('name');		  
		  			var residencyID = $('input[name=residencyID]').val();
					var currentRel = $('input[name=currentRel]').val();		  
		  
					 $.post('/steps/update.php', { value:0,checkname:checkname,id:residencyID,currentRel:currentRel,sectionname:"s_residency",sectionnumber:"section7" }, function(data){});
					$(this).parent().removeClass("selected");
					$(this).parent().find(":checkbox").removeAttr("checked");					
				}
			);	
	});
</script>
<? } ?>

	<?
        if ($userRole == "adviser") {
		$query666 = mysql_query("SELECT * FROM s_residency WHERE student_id='$studentid'");
		} else { 
		$query666 = mysql_query("SELECT * FROM s_residency WHERE student_id='$userID'");
		}
		

		$data_set666 = mysql_fetch_array($query666);
		$residencyID = $data_set666['0'];
		$residencyActive = $data_set666['6'];
		$residencyDate = $data_set666['12'];
		
		$step1 = $data_set666['3'];
		$step2 = $data_set666['4'];
		$step3 = $data_set666['5'];
		$step4 = $data_set666['6'];
		$step5 = $data_set666['7'];

?>


<h1>Residency Programs</h1>

There are over 130 specialties and over 9,000 programs that offer residencies.  Resources are available to help you navigate through the various programs available.  <a href="http://www.ama-assn.org/ama/pub/education-careers/graduate-medical-education/freida-online/about-freida-online.page" target="_blank">FRIEDA Online®</a> can help you search for programs by specialty and location.  
<br /><br />
The National Residency Matching Program publication - <a href="http://www.nrmp.org/data/chartingoutcomes2011.pdf" target="_blank">Charting Outcomes in the Match</a> provides applicant characteristics of applicants matching to specialties applied to.
<br /><br />
The MU Match will provide you with information on MU friendly programs.
<br /><br />
Please use the links below for additional information to help you with residency.

<br /><br />
<div class="note">
<a href="javascript:tips()"><span style="font-size: 16px;">Tips and Tricks</span></a>
<br /><br />
<a href="javascript:resources()"><span style="font-size: 16px;">Resources</span></a>
<br />
</div>
<br /><br />




<div style="margin-left: 15px;">


<h2 style="margin: 0; padding: 0; font-size: 15px;">Steps:</b></span></h2>
Last Updated: <? echo $residencyDate; ?>
<table>
<tr>
<td colspan="3">
<br />
	
            
       <form enctype="multipart/form-data" action="inc/update_step7.php" method="post" name="residencyNotesForm">
       <input type="hidden" name="currentRel" value="<? echo $currentRel; ?>" />
       <input type="hidden" name="residencyID" value="<? echo $residencyID; ?>" />
		<fieldset>
			<label for="choices">
			<ul class="checklist">
            <table>
            <tr>
            <td>
					<li<? if ($step1 == 1) { ?> class="selected"<? } ?> name="step1">
						<input name="step7-1" value="1" type="checkbox" <? if ($step1 == 1) { ?>checked<? } ?> />
						<p>Do you know which programs you want to apply to?<br /><br />(<a href="javascript:tips();" class="checklist">Click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>

					</li>
                    </td><td>
                    <li<? if ($step2 == 1) { ?> class="selected"<? } ?> name="step2">
						<input name="step7-2" value="1" type="checkbox" <? if ($step2 == 1) { ?>checked<? } ?> />
						<p>Have you identified programs that are "safe" choices for you?<br />(<a href="javascript:tips();" class="checklist">Click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>

					</li>
                    </td><td>
					<li<? if ($step3 == 1) { ?> class="selected"<? } ?> name="step3">
						<input name="step7-3" value="1" type="checkbox" <? if ($step3 == 1) { ?>checked<? } ?> />
						<p>Are there any MU "friendly" programs?<br /><br /><br />(<a href="javascript:resources();" class="checklist">Click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li>
                    </td>
                    <td>
					<li<? if ($step4 == 1) { ?> class="selected"<? } ?> name="step4">
						<input name="step7-4" value="1" type="checkbox" <? if ($step4 == 1) { ?>checked<? } ?> />
						<p>Have you identified the most/least competitive programs?<br />(<a href="javascript:resources();" class="checklist">Click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li>
                    </td>
                    
                    <td>
					<li<? if ($step5 == 1) { ?> class="selected"<? } ?> name="step5">
						<input name="step7-5" value="1" type="checkbox" <? if ($step5 == 1) { ?>checked<? } ?> />
						<p>Have you identified the programs that would be a "good" match for you?<br />(<a href="javascript:resources();" class="checklist">Click here</a>)</p>
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
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />