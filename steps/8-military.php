<script>
function steps()   {
	NewWindow=window.open("/steps/8.html","",'width=430,height=600,menubar=no,scrollbars=yes')
   }
   
function resources()   {
	NewWindow=window.open("/steps/8-resources.html","",'width=650,height=400,menubar=no,scrollbars=yes')
   }

function tips()   {
	NewWindow=window.open("/steps/8-tips.php","",'width=450,height=370,menubar=no,scrollbars=yes')
   }   

function samples()   {
	NewWindow=window.open("/steps/8-samples.php","",'width=430,height=600,menubar=no,scrollbars=yes')
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
		 			var militaryID = $('input[name=militaryID]').val();
				    var currentRel = $('input[name=currentRel]').val();	

		  
		  $.post('/steps/update.php', { value:value,checkname:checkname,id:militaryID,currentRel:currentRel,sectionname:"s_military",sectionnumber:"section8" }, function(data){});
					$(this).parent().addClass("selected");
					$(this).parent().find(":checkbox").attr("checked","checked");					
				}
			);
			
			$(".checklist .checkbox-deselect").click(
				function(event) {
					event.preventDefault();				
					
					var checkname = $(this).parent().attr('name');		  
		  			var militaryID = $('input[name=militaryID]').val();
					var currentRel = $('input[name=currentRel]').val();		  
		  
					 $.post('/steps/update.php', { value:0,checkname:checkname,id:militaryID,currentRel:currentRel,sectionname:"s_military",sectionnumber:"section8" }, function(data){});
					$(this).parent().removeClass("selected");
					$(this).parent().find(":checkbox").removeAttr("checked");					
				}
			);	
	});
</script>
<? } ?>

	<?
  if ($userRole == "adviser") {
		$query666 = mysql_query("SELECT * FROM s_military WHERE student_id='$studentid'");
		} else { 
		$query666 = mysql_query("SELECT * FROM s_military WHERE student_id='$userID'");
		}

		$data_set666 = mysql_fetch_array($query666);
		$militaryID = $data_set666['0'];
		$militaryActive = $data_set666['8'];
		$militaryDate = $data_set666['12'];
		
		$step1 = $data_set666['3'];
		$step2 = $data_set666['4'];
		$step3 = $data_set666['5'];
		$step4 = $data_set666['6'];
		$step5 = $data_set666['7'];
		
?>


<h1>Military</h1>
<p>The process for military medical students during their 3rd and 4th year is pretty similar to other students, but the timeline is moved forward quite a bit.  During the end of the 3rd year and/or beginning of the 4th year, students are expected to do two different military away rotations.  These rotations are very similar to any other away rotations.  There are various strategies to selecting your rotation location, timing, and type of rotation (see <a href="javascript:tips();">Tips and Tricks</a>).</p>

<p>During these rotations, you will be interviewing for a spot in the program.  At some time in the summer/early fall of your 4th year, you may also consider going on interviews at military programs you have not had a chance to see, but still wish to apply to.  By October of your 4th year you will need to have your application complete, and your rank list ready.  This includes a CV, personal statement, Step II CK score, and whatever application your respective service uses.</p>

<p>Please make sure that you read your branch specific handbook (see <a href="javascript:resources();">Resources</a>) to check for changes in regulations.  Also, talk to upper years to ensure that the information you have is accurate.</p>

<p>The Army, Navy and Air force use the <a href="/status.php?step=6">ERAS</a> application service. The Air force requires an additional paper application.</p>

<p>Each branch will send out instructions on how to complete their application process, including important deadlines. The Army also has a separate online application through the MODS website. You will receive information on that via e-mail as well.</p>

<p>Here are the 2012 – 2013 contacts for each of the branches:</p>
<br />
<table style="font-size: 11px;">
<tr>
<td><span style="font-size: 14px; font-weight: bold;">Air Force</span></td>
<td><span style="font-size: 14px; font-weight: bold;">Navy</span></td>
<td><span style="font-size: 14px; font-weight: bold;">Army</span></td>
</tr>
<tr>
<td width="205" valign="top">
Medical Student <br /> 
Program Manager<br /> 
HQ AFPC/DPAME <br /> 
550 C Street Suite 27<br /> 
Randolph AFB TX 78150 <br /> 
1-800-531-5800 <br /> 
Comm: 210-565-0656<br /> 
Fax: 210 565-2830<br /> 
DSN:  665-0656 
</td>
<td width="205" valign="top">
Professional & Career Planning<br />
Medical Department Accessions Directorate<br />
Navy Medicine Manpower, <br />
Personnel, & Training Command <br />
(NAVMED MPT&E) (Code 01S4)<br />
8901 Wisconsin Avenue<br />
Bethesda, MD 20889-5611<br />
Comm: 301-319-4517 <br />
DSN:    285-4517 <br />
Fax:     301-319-4122 
</td>
<td width="205" valign="top">
Directorate of Medical Education<br />
ATTN: DASG-PSZ-MG <br />
Skyline 6, Suite 691<br />
5109 Leesburg Pike<br />
Falls Church, VA  22041-3258<br />
Comm: 703-681-8043 or 4804 <br />
DSN: 761-4804<br />
Fax:     703-681-8044; <br />
DSN: 761-8044
</td>
</tr>
</table>

<br /><br />

<b><i>Special Thanks to, Anita Pokorny, Director, Career Development and Advising @ Northeast Ohio Medical University for sharing their Military Match Residency Guide.</i></b>
<br /><br />

<div class="note">
<a href="javascript:tips()"><span style="font-size: 16px;">Tips and Tricks</span></a>
<br /><br />

<a href="javascript:resources()"><span style="font-size: 16px;">Resources</span></a>
<!--<br /><br />
<a href="javascript:samples()"><span style="font-size: 16px;">Samples</span></a>-->
<br />
</div>

<p /><br />


<div style="margin-left: 15px;">
<h2 style="margin: 0; padding: 0; font-size: 15px;">Steps:</b></span></h2>
Last Updated: <? echo $militaryDate; ?>
<table>
<tr>
<td colspan="3">
<br />
	

       <form enctype="multipart/form-data" action="inc/update_step8.php" method="post" name="militaryNotesForm">
       <input type="hidden" name="currentRel" value="<? echo $currentRel; ?>" />
       <input type="hidden" name="militaryID" value="<? echo $militaryID; ?>" />
		<fieldset>
			<label for="choices">
			<ul class="checklist">
            <table>
            <tr>
					<td><li<? if ($step1 == 1) { ?> class="selected"<? } ?> name="step1">
						<input name="step8-1" value="1" type="checkbox" <? if ($step1 == 1) { ?>checked<? } ?> />
						<p>Submit Application<br /><br /><br /><br /><a href="javascript:resources();" class="checklist">Click here</a></p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li></td>
            
                    <td><li<? if ($step2 == 1) { ?> class="selected"<? } ?> name="step2">
						<input name="step8-2" value="1" type="checkbox" <? if ($step2 == 1) { ?>checked<? } ?> />
						<p>Submit CV<br /><br /><br /><br /><a href="javascript:resources();" class="checklist">Click here</a></p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li></td>
                    
                    <td><li<? if ($step3 == 1) { ?> class="selected"<? } ?> name="step3">
						<input name="step8-3" value="1" type="checkbox" <? if ($step3 == 1) { ?>checked<? } ?> />
						<p>Register with ERAS (if not applicable click complete)<br /><a href="/status.php?step=6" class="checklist">Click here</a></p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li></td>
                    
                    <td><li<? if ($step4 == 1) { ?> class="selected"<? } ?> name="step4">
						<input name="step8-4" value="1" type="checkbox" <? if ($step4 == 1) { ?>checked<? } ?> />
						<p>Schedule Interviews<br /><br /><br /><a href="javascript:resources();" class="checklist">Click here</a></p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li></td>
                    
                    <td><li<? if ($step5 == 1) { ?> class="selected"<? } ?> name="step5">
						<input name="step8-5" value="1" type="checkbox" <? if ($step5 == 1) { ?>checked<? } ?> />
						<p>Rank Programs (if not applicable click complete)<br /><br /><a href="javascript:resources();" class="checklist">Click here</a></p>
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