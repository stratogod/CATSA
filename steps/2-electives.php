<script>
function resources()   {
	NewWindow=window.open("/steps/2-resources.html","",'width=480,height=300,menubar=no,scrollbars=yes')
   }

function tips()   {
	NewWindow=window.open("/steps/2-tips.php","",'width=430,height=600,menubar=no,scrollbars=yes')
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
		 			var electivesID = $('input[name=electivesID]').val();
				    var currentRel = $('input[name=currentRel]').val();	

		  
		  $.post('/steps/update.php', { value:value,checkname:checkname,id:electivesID,currentRel:currentRel,sectionname:"s_electives",sectionnumber:"section2" }, function(data){});
					$(this).parent().addClass("selected");
					$(this).parent().find(":checkbox").attr("checked","checked");					
				}
			);
			
			$(".checklist .checkbox-deselect").click(
				function(event) {
					event.preventDefault();				
					
					var checkname = $(this).parent().attr('name');		  
		  			var electivesID = $('input[name=electivesID]').val();
					var currentRel = $('input[name=currentRel]').val();		  
		  
					 $.post('/steps/update.php', { value:0,checkname:checkname,id:electivesID,currentRel:currentRel,sectionname:"s_electives",sectionnumber:"section2" }, function(data){});
					$(this).parent().removeClass("selected");
					$(this).parent().find(":checkbox").removeAttr("checked");					
				}
			);	
	});
</script>
<? } ?>


	<?
        if ($userRole == "adviser") {
		$query666 = mysql_query("SELECT * FROM s_electives WHERE student_id='$studentid'");
		} else { 
		$query666 = mysql_query("SELECT * FROM s_electives WHERE student_id='$userID'");
		}
		
		$data_set666 = mysql_fetch_array($query666);
		$electivesID = $data_set666['0'];
		$electivesActive = $data_set666['7'];
		$electivesDate = $data_set666['10'];		
		
		$step1 = $data_set666['3'];
		$step2 = $data_set666['4'];
		$step3 = $data_set666['5'];
	
?>

<h1>Electives and Off-Site Rotations</h1>

<h2>Electives</h2>

<p>You will complete of 32 weeks of required selectives and electives during your fourth year.</p>

<p>The required courses are as follows:
<br />
<ul>
<li>12 weeks of advanced selectives in four week blocks 
	<ul>
    	<li>1 Surgical</li>
        <li>1 Medical</li>
        <li>1 Additional can from the approved list of Surgical or Medical Selectives</li>
    </ul>
<br />
<b>Note:  once graduation requirements are complete, any additional selectives may be used to fulfill general elective requirements. </b>
</li><br />
<li>Four weeks of Advanced Biomedical Sciences (ABS) </li>
<li>16 weeks of general electives</li>
</ul>
</p>

<? if($userRole == "student") { ?><p><b>The Fourth-Year Procedures Manual</b> accessible through your <a href="https://ome.som.missouri.edu/studenthome" target="_blank">student home page</a> will provide the most up-to-date and current information and should be used when planning the fourth year. </p><? } ?>

<p><a href="https://ome.som.missouri.edu/SRC/Modules/Site/GeneralInformation.aspx" target="_blank"><b>The Senior Rotation Catalog</b></a> accessible through your student home page provides as a course list categorized by department and type offered at Mizzou.</p>
<br />

    
<p><h2>Off-Site Rotations</h2>
The time frame for participating in Off-site rotations that fulfill graduation requirements is limited.  Please refer to the Fourth-Year Procedures Manual for additional information.</p>
<p>There are restrictions on the number of off-site rotations that may be completed for credit.  Visit the <a href="http://medicine.missouri.edu/handbook/docs/Student%20Handbook%20July%202012.pdf?#page=49" target="_blank">student handbook</a> for the policy. 
<br />
<br /><br />
Questions? Please contact <a href="mailto:shumatea@health.missouri.edu">Amy Shumate</a>
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
Last Updated: <? echo $electivesDate; ?>
<table>
<tr>
<td colspan="3">
<br />
	
            
<? //if ($electivesActive == 1) { ?>
       <form enctype="multipart/form-data" action="inc/update_step2.php" method="post" name="electivesNotesForm">
       <input type="hidden" name="currentRel" value="<? echo $currentRel; ?>" />     
       <input type="hidden" name="electivesID" value="<? echo $electivesID; ?>" /> 
		<fieldset>
			<label for="choices">
			<ul class="checklist">
            <table>
            <tr>
            <td>
					<li<? if ($step1 == 1) { ?> class="selected"<? } ?> name="step1">
						<input name="step2-1" value="1" type="checkbox" <? if ($step1 == 1) { ?>checked<? } ?> />
						<p>Does applicant have necessary coursework to graduate?<br /><br />(<a href="/docs/Graduation%20Requirements.doc" class="checklist">click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>

					</li>
                    </td><td>
                    <li<? if ($step2 == 1) { ?> class="selected"<? } ?> name="step2">
						<input name="step2-2" value="1" type="checkbox" <? if ($step2 == 1) { ?>checked<? } ?> />
						<p>Should applicant complete away rotation(s)?<br /><br /><br />(<a href="javascript:tips()" class="checklist">click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>

					</li>
                    </td><td>
					<li<? if ($step3 == 1) { ?> class="selected"<? } ?> name="step3">
						<input name="step2-3" value="1" type="checkbox" <? if ($step3 == 1) { ?>checked<? } ?> />
						<p>Are there selectives/electives that you should take to prepare for residency?<br />(<a href="javascript:tips()" class="checklist">click here</a>)</p>
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