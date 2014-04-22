<script>
function resources()   {
	NewWindow=window.open("/steps/5-resources.html","",'width=450,height=350,menubar=no,scrollbars=yes')
   }
function tips()   {
	NewWindow=window.open("/steps/5-tips.php","",'width=625,height=600,menubar=no,scrollbars=yes')
   }      
   
function samples()   {
	NewWindow=window.open("/steps/5-samples.php","",'width=430,height=600,menubar=no,scrollbars=yes')
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
		 			var mspeID = $('input[name=mspeID]').val();
				    var currentRel = $('input[name=currentRel]').val();	

		  
		  $.post('/steps/update.php', { value:value,checkname:checkname,id:mspeID,currentRel:currentRel,sectionname:"s_mspe",sectionnumber:"section5" }, function(data){});
					$(this).parent().addClass("selected");
					$(this).parent().find(":checkbox").attr("checked","checked");					
				}
			);
			
			$(".checklist .checkbox-deselect").click(
				function(event) {
					event.preventDefault();				
					
					var checkname = $(this).parent().attr('name');		  
		  			var mspeID = $('input[name=mspeID]').val();
					var currentRel = $('input[name=currentRel]').val();		  
		  
					 $.post('/steps/update.php', { value:0,checkname:checkname,id:mspeID,currentRel:currentRel,sectionname:"s_mspe",sectionnumber:"section5" }, function(data){});
					$(this).parent().removeClass("selected");
					$(this).parent().find(":checkbox").removeAttr("checked");					
				}
			);	
	});
</script>
<? } ?>

	<?
        if ($userRole == "adviser") {
		$query666 = mysql_query("SELECT * FROM s_mspe WHERE student_id='$studentid'");
		} else { 
		$query666 = mysql_query("SELECT * FROM s_mspe WHERE student_id='$userID'");
		}
		$data_set666 = mysql_fetch_array($query666);
		$mspeID = $data_set666['0'];
		$mspeActive = $data_set666['9'];
		$mspeDate = $data_set666['13'];
				
		$step1 = $data_set666['3'];
		$step2 = $data_set666['4'];
		$step3 = $data_set666['5'];
		$step4 = $data_set666['6'];
		$step5 = $data_set666['7'];
		$step6 = $data_set666['8'];

		
?>


<h1>Medical Student Performance Evaluation (MSPE)</h1>

The MSPE, a.k.a. Dean's letter,  is a written evaluation of your medical education and an important part of your residency application package. Students typically begin working on the MSPE with their adviser in mid July with a four week window.  <? if($userRole == "student") { ?>At that time a link to the MSPE site will be provided on the <a href="https://ome.som.missouri.edu/studenthome" target="_blank">student home page</a>.<? } ?>  The national release date for the MSPE is October 1. 
<br /><br />

MSPE Sections and Responsible Parties: 
<br /><br />

<ol>
<li><b>Student Responsible for Unique Characteristics Section</b> - This is a short paragraph, or two at the most detailing your activities during the four years of med school. Here you would list student organizations involvements, community service work, and research participation. </li><br />
<li><b>MSPE Committee Responsible for Academic History Section</b> – This section provides your matriculation and graduation dates, remediations, and any adverse action received in medical school.</li><br />
<li><b>Academic Progress</b> – Two sections – 
	<br />
    <ul>
    	<li><b><i>Student Drafts the initial paragraph for Preclinical/Basic Science Curriculum</i></b> - which provides a summary of your tutor comments. These are verbatim comments consolidated into one paragraph. </li>
        <li><b><i>MSPE Committee Responsible for Core Clinical Clerkships and Elective Rotations</i></b> - section begins with a standard paragraph detailing the overall performance grading process. Clinical Clerkship Comments are listed in chronological order of when the clerkships were completed. The comments are verbatim with slight editing to eliminate redundancy and grammatical errors. </li>
    </ul>
</li><br />
<li><b>MSPE Committee Responsible for Summary Statement</b> – The Summary statement will provide an overall evaluation of your performance during medical school. Students are placed into one of 5 evaluation categories. Although the MU SOM does not rank their students this is a way to offer a comparative view of each student's performance.</li>
</ol>

<a href="/docs/5-mspe/COMMITTEE GUIDELINES FOR CLASS EVALUATION ON THE MSPE_2013.pdf" target="_blank">Performance Guidelines</a> used to determine a student's overall performance.
<br /><br />

Questions? Please contact <a href="mailto:gravesg@health.missouri.edu">Gina Graves</a>
<br /><br />

<b>IMPORTANT DATES:</b>
<ul>
<li>July 10, 2013 - MSPE Webpage opens *</li>
<li>August 9, 2013 – MSPE Electronic drafts due</li>
<li>September 13, 2013 – Student deadline to accept final MSPE</li>
<li>September 20, 2013 - Last day to add grades to MSPE</li>
<li>October 1 – National release date for MSPE. NOTE: Early and Military Match Letters will not be released before this date</li>
</ul>
<em>*Exact date subject to change; updates will be sent as information received/posted</em>
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
Last Updated: <? echo $mspeDate; ?>
<table>
<tr>
<td colspan="3">
<br />
    <form enctype="multipart/form-data" action="inc/update_step5.php" method="post" name="mspeNotesForm">
       <input type="hidden" name="currentRel" value="<? echo $currentRel; ?>" />
       <input type="hidden" name="mspeID" value="<? echo $mspeID; ?>" />
		<fieldset>
			<label for="choices">
			<ul class="checklist">
            <table>
            <tr>
            <td>
					<li<? if ($step1 == 1) { ?> class="selected"<? } ?> name="step1">
						<input name="step5-1" value="1" type="checkbox" <? if ($step1 == 1) { ?>checked<? } ?> />
						<p>Unique Characteristics<br /><br /><br />(<a href="javascript:tips()" class="checklist">click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>

					</li>
                    </td><td>
                    <li<? if ($step2 == 1) { ?> class="selected"<? } ?> name="step2">
						<input name="step5-2" value="1" type="checkbox" <? if ($step2 == 1) { ?>checked<? } ?> />
						<p>Preclinical Comments<br /><br /><br />(<a href="javascript:tips()" class="checklist">click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>

					</li>
                    </td><td>
					<li<? if ($step3 == 1) { ?> class="selected"<? } ?> name="step3">
						<input name="step5-3" value="1" type="checkbox" <? if ($step3 == 1) { ?>checked<? } ?> />
						<p>Adviser Review</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li>
                    </td>
                    <td>
					<li<? if ($step4 == 1) { ?> class="selected"<? } ?> name="step4">
						<input name="step5-4" value="1" type="checkbox" <? if ($step3 == 1) { ?>checked<? } ?> />
						<p>Submitted to Committee</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li>
                    </td>
                    <td>
					<li<? if ($step5 == 1) { ?> class="selected"<? } ?> name="step5">
						<input name="step5-5" value="1" type="checkbox" <? if ($step3 == 1) { ?>checked<? } ?> />
						<p>Finalized by Committee</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li>
                    </td>
          </tr>
           <tr>
            <td>
					<li<? if ($step6 == 1) { ?> class="selected"<? } ?> name="step6">
						<input name="step5-6" value="1" type="checkbox" <? if ($step1 == 1) { ?>checked<? } ?> />
						<p>Accepted</p>
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