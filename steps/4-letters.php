<script>
function resources()   {
	NewWindow=window.open("/steps/4-resources.html","",'width=600,height=600,menubar=no,scrollbars=yes')
   }
function tips()   {
	NewWindow=window.open("/steps/4-tips.php","",'width=530,height=600,menubar=no,scrollbars=yes')
   }   
function samples()   {
	NewWindow=window.open("/steps/4-samples.php","",'width=500,height=600,menubar=no,scrollbars=yes')
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
		 			var lettersID = $('input[name=lettersID]').val();
				    var currentRel = $('input[name=currentRel]').val();	

		  
		  $.post('/steps/update.php', { value:value,checkname:checkname,id:lettersID,currentRel:currentRel,sectionname:"s_letters",sectionnumber:"section4" }, function(data){});
					$(this).parent().addClass("selected");
					$(this).parent().find(":checkbox").attr("checked","checked");					
				}
			);
			
			$(".checklist .checkbox-deselect").click(
				function(event) {
					event.preventDefault();				
					
					var checkname = $(this).parent().attr('name');		  
		  			var lettersID = $('input[name=lettersID]').val();
					var currentRel = $('input[name=currentRel]').val();		  
		  
					 $.post('/steps/update.php', { value:0,checkname:checkname,id:lettersID,currentRel:currentRel,sectionname:"s_letters",sectionnumber:"section4" }, function(data){});
					$(this).parent().removeClass("selected");
					$(this).parent().find(":checkbox").removeAttr("checked");					
				}
			);	
	});
</script>
<? } ?>

	<?
        if ($userRole == "adviser") {
		$query666 = mysql_query("SELECT * FROM s_letters WHERE student_id='$studentid'");
		} else { 
		$query666 = mysql_query("SELECT * FROM s_letters WHERE student_id='$userID'");
		}
		$data_set666 = mysql_fetch_array($query666);
		$lettersID = $data_set666['0'];
		$lettersActive = $data_set666['8'];
		$lettersDate = $data_set666['12'];
		
		$step1 = $data_set666['3'];
		$step2 = $data_set666['4'];
		$step3 = $data_set666['5'];
		$step4 = $data_set666['6'];
		$step5 = $data_set666['7'];
		
?>


<h1>Letters of Recommendation (LoR)</h1>


Residency programs ask for LORs as part of the application package.  Each program typically asks for three to four letters – the application program guidelines will specify the number. LORs provide a personal glimpse of you as a professional. One or two letters from clinical faculty in your specialty will be helpful.  You should ask someone you have worked with or who knows you and your abilities and has witnessed your work ethic.  You may decide to ask for more than three or four letters to have a wider selection to choose from. Programs may request personal and professional letters.  Some may require a Department Chairman's letter.  
<br /><br />
Give the letter writers plenty of time, at least four weeks, to write and submit the letter.  Providing your CV and personal statement will help the writer personalize the letter.
<br /><br />
For regular match applicants, ERAS has a cover letter sheet that is generated when you finalize your letter writers in MyERAS. LORs should be sent to the OME with a cover sheet. For Early Match and Military Match applicants, see instructions under the corresponding links on the side bar.  
<br /><br />
<a href="https://services.aamc.org/eras/myeras2013/" target="_blank">MyERAS</a> link
<br /><br />



There are two ways that LoR's can be received by the OME is (<a href="/docs/4-letters/Letters of Recom Info CATSA-ERAS 2014 (3).pdf" target="_blank">OME Memo</a>): 
<br />
<ol>
<li>Letter writers can send the letters directly to the OME and we will scan and attach them to your application.
	<br /><br /><ul>
    	<li>Letters of Recommendations should be sent to:<br /><br />Suzanne Neff:<br />University of Missouri<br />School of Medicine<br />Office of Medical Education<br />MA213-MA215 Medical Sciences Bldg.<br />Columbia, MO 65212</li>
	</ul>
<br /></li>
<li>The <a href="https://www.aamc.org/services/eras/282520/lor_portal.html" target="_blank">LoR Portal</a> tool is designed to provide flexibility for the LoR authors.</li>
</ol>


<br /><br />
Questions? Please contact <a href="mailto:neffse@health.missouri.edu">Suzanne Neff</a>

<br /><br />



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
Last Updated: <? echo $lettersDate; ?>
<br /><br />
<i>Note: You can have multiple LORs going for different programs.  You can also use <a href="/docs/4-letters/LOR Spreadsheet.xls">this spreadsheet</a> to help track progress.</i>
<table>
<tr>
<td colspan="3">
<br />
	
            
<? //if ($lettersActive == 1) { ?>
       <form enctype="multipart/form-data" action="inc/update_step4.php" method="post" name="lettersNotesForm">
       <input type="hidden" name="currentRel" value="<? echo $currentRel; ?>" />
       <input type="hidden" name="lettersID" value="<? echo $lettersID; ?>" />
		<fieldset>
			<label for="choices">
			<ul class="checklist">
            <table>
            <tr>
            <td>
					<li<? if ($step1 == 1) { ?> class="selected"<? } ?> name="step1">
						<input name="step4-1" value="1" type="checkbox" <? if ($step1 == 1) { ?>checked<? } ?> />
						<p>Has applicant confirmed with faculty willingness to write strong letter?</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>

					</li>
                    </td>
                    <td>
					<li<? if ($step2 == 1) { ?> class="selected"<? } ?> name="step2">
						<input name="step4-2" value="1" type="checkbox" <? if ($step2 == 1) { ?>checked<? } ?> />
						<p>Have LOR's been received by the OME?</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li>
                    </td>
                    <td>
					<li<? if ($step3 == 1) { ?> class="selected"<? } ?> name="step3">
						<input name="step4-3" value="1" type="checkbox" <? if ($step3 == 1) { ?>checked<? } ?> />
						<p>Have LOR's been uploaded to ERAS?</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li>
                    </td>
               
            <td>
                    <li<? if ($step4 == 1) { ?> class="selected"<? } ?> name="step4">
						<input name="step4-4" value="1" type="checkbox" <? if ($step4 == 1) { ?>checked<? } ?> />
						<p>Have LOR's been assigned to each program?</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>

					</li>
                    </td>
                    
                    <td>
					<li<? if ($step5 == 1) { ?> class="selected"<? } ?> name="step5">
						<input name="step4-5" value="1" type="checkbox" <? if ($step5 == 1) { ?>checked<? } ?> />
						<p>Have letters been finalized and released by applicant in ERAS?</p>
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