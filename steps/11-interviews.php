<script>
function resources()   {
	NewWindow=window.open("/steps/11-resources.html","",'width=680,height=675,menubar=no,scrollbars=yes')
   }

   function samples()   {
	NewWindow=window.open("/steps/11-samples.php","",'width=430,height=600,menubar=no,scrollbars=yes')
   }   
   
    function tips()   {
	NewWindow=window.open("/steps/11-tips.php","",'width=550,height=600,menubar=no,scrollbars=yes')
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
		 			var interviewsID = $('input[name=interviewsID]').val();
				    var currentRel = $('input[name=currentRel]').val();	

		  
		  $.post('/steps/update.php', { value:value,checkname:checkname,id:interviewsID,currentRel:currentRel,sectionname:"s_interviews",sectionnumber:"section11" }, function(data){});
					$(this).parent().addClass("selected");
					$(this).parent().find(":checkbox").attr("checked","checked");					
				}
			);
			
			$(".checklist .checkbox-deselect").click(
				function(event) {
					event.preventDefault();				
					
					var checkname = $(this).parent().attr('name');		  
		  			var interviewsID = $('input[name=interviewsID]').val();
					var currentRel = $('input[name=currentRel]').val();		  
		  
					 $.post('/steps/update.php', { value:0,checkname:checkname,id:interviewsID,currentRel:currentRel,sectionname:"s_interviews",sectionnumber:"section11" }, function(data){});
					$(this).parent().removeClass("selected");
					$(this).parent().find(":checkbox").removeAttr("checked");					
				}
			);	
	});
</script>
<? } ?>

	
	<?
        if ($userRole == "adviser") {
		$query666 = mysql_query("SELECT * FROM s_interviews WHERE student_id='$studentid'");
		} else { 
		$query666 = mysql_query("SELECT * FROM s_interviews WHERE student_id='$userID'");
		}
		

		$data_set666 = mysql_fetch_array($query666);
		$interviewsID = $data_set666['0'];
		$interviewsActive = $data_set666['9'];
		$interviewsDate = $data_set666['13'];
		
		$step1 = $data_set666['3'];
		$step2 = $data_set666['4'];
		$step3 = $data_set666['5'];
		$step4 = $data_set666['6'];
		$step5 = $data_set666['7'];
		$step6 = $data_set666['8'];
		

?>


<h1>Interviews</h1>
The residency interview process can be a stressful time.  Preparation is key to a successful interview.  
<br /><br />
You may begin receiving interview invitations as early as October. It is helpful to have a few things figure out prior to this time such as:
<br /><br />

<ul>
<li><b>Financing</b> – how many trips can you afford? In the Financial Aid section of the SOM website check out <a href="http://medicine.missouri.edu/financial/traveling.html">The Hidden Cost of Medical School</a></li><br />
<li><b>Housing</b> – do you know people in the areas where you may interview? Some MU SOM Alumni offer housing for students interviewing in their areas.  View <a href="javascript:resources()">Resources</a> for recent alumni directories.</li><br />
<li><b>Transportation</b> – how will you get around if you don't take your car? Check out the transit system in the area you are interviewing in. Some cities have great systems. Other areas may require you to rent a car.  Reserve one ahead of time.</li><br />
<li><b>Weather</b> – Will you interview in the winter? Many interviews are scheduled in January.  Keep this in mind as you make travel arrangements. Allow for ample time to get to your location taking inclement weather into account.</li><br />
<li><b>Practice</b> – Have you been on a professional job interview? Mock interviews may help you prepare and be more confident [mock interview sources] Consider <a href="javascript:samples();">questions you may be asked</a>.</li>
</ul> 



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
Last Updated: <? echo $interviewsDate; ?>
<table>
<tr>
<td colspan="3">
<br />
	
            
       <form enctype="multipart/form-data" action="inc/update_step11.php" method="post" name="interviewsNotesForm">
       <input type="hidden" name="currentRel" value="<? echo $currentRel; ?>" />     
       <input type="hidden" name="interviewsID" value="<? echo $interviewsID; ?>" /> 
		<fieldset>
			<label for="choices">
			<ul class="checklist">
            <table>
            <tr>
            <td>
					<li<? if ($step1 == 1) { ?> class="selected"<? } ?> name="step1">
						<input name="step11-1" value="1" type="checkbox" <? if ($step1 == 1) { ?>checked<? } ?> />
						<p>Scheduled Interviews</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>

					</li>
                    </td><td>
                    <li<? if ($step2 == 1) { ?> class="selected"<? } ?> name="step2">
						<input name="step11-2" value="1" type="checkbox" <? if ($step2 == 1) { ?>checked<? } ?> />
						<p>Make Travel Arrangements</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>

					</li>
                    </td><td>
					<li<? if ($step3 == 1) { ?> class="selected"<? } ?> name="step3">
						<input name="step11-3" value="1" type="checkbox" <? if ($step3 == 1) { ?>checked<? } ?> />
						<p>Review Interview Questions<br /><br /><br />(<a href="/docs/11-interviews/Common Interview Questions.pdf" target="_blank" class="checklist">Click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li>
                    </td>
                    <td>
					<li<? if ($step4 == 1) { ?> class="selected"<? } ?> name="step4">
						<input name="step11-4" value="1" type="checkbox" <? if ($step4 == 1) { ?>checked<? } ?> />
						<p>Confirm Travel Arrangement</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li>
                    </td>
                    
                    <td>
					<li<? if ($step5 == 1) { ?> class="selected"<? } ?> name="step5">
						<input name="step11-5" value="1" type="checkbox" <? if ($step5 == 1) { ?>checked<? } ?> />
						<p>Confirm Directions</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li>
                    </td>
  
                    </tr>
                    <tr>
                    <td>
					<li<? if ($step6 == 1) { ?> class="selected"<? } ?> name="step6">
						<input name="step11-6" value="1" type="checkbox" <? if ($step6 == 1) { ?>checked<? } ?> />
						<p>Confirm Interview Time</p>
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