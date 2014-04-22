<script>
   
function resources()   {
	NewWindow=window.open("/steps/12-resources.html","",'width=600,height=600,menubar=no,scrollbars=yes')
   }

function tips()   {
	NewWindow=window.open("/steps/12-tips.php","",'width=650,height=600,menubar=no,scrollbars=yes')
   }   

function samples()   {
	NewWindow=window.open("/steps/12-samples.php","",'width=430,height=600,menubar=no,scrollbars=yes')
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
		 			var nrmpID = $('input[name=nrmpID]').val();
				    var currentRel = $('input[name=currentRel]').val();	

		  
		  $.post('/steps/update.php', { value:value,checkname:checkname,id:nrmpID,currentRel:currentRel,sectionname:"s_nrmp",sectionnumber:"section12" }, function(data){});
					$(this).parent().addClass("selected");
					$(this).parent().find(":checkbox").attr("checked","checked");					
				}
			);
			
			$(".checklist .checkbox-deselect").click(
				function(event) {
					event.preventDefault();				
					
					var checkname = $(this).parent().attr('name');		  
		  			var nrmpID = $('input[name=nrmpID]').val();
					var currentRel = $('input[name=currentRel]').val();		  
		  
					 $.post('/steps/update.php', { value:0,checkname:checkname,id:nrmpID,currentRel:currentRel,sectionname:"s_nrmp",sectionnumber:"section12" }, function(data){});
					$(this).parent().removeClass("selected");
					$(this).parent().find(":checkbox").removeAttr("checked");					
				}
			);	
	});
</script>
<? } ?>

	<?
        if ($userRole == "adviser") {
		$query666 = mysql_query("SELECT * FROM s_nrmp WHERE student_id='$studentid'");
		} else { 
		$query666 = mysql_query("SELECT * FROM s_nrmp WHERE student_id='$userID'");
		}
		

		$data_set666 = mysql_fetch_array($query666);
		$nrmpID = $data_set666['0'];
		$nrmpActive = $data_set666['6'];
		$nrmpDate = $data_set666['13'];
		
		$step1 = $data_set666['3'];
		$step2 = $data_set666['4'];
		$step3 = $data_set666['5'];
		$step4 = $data_set666['6'];
		$step5 = $data_set666['7'];
		$step6 = $data_set666['8'];
		

?>


<h1>National Residency Matching Program (NRMP)</h1>

This is where you will enter the residency programs you like. After you complete your interviews you will enter and rank your preferred programs here. The NRMP uses an algorithm using the applicant and program preferences. This algorithm favors the applicant in that it is designed to place the applicant in the most preferred (highest ranked) program. If the first choice is not available, the algorithm will attempt to place the applicant in their second choice and so on. The applicant and program agree to enter a binding commitment when they rank each other. Once a match is made each party (applicant and program) are in a binding legal contract.
<br /><br />

<b>IMPORTANT DATES: </b>
<ul>
<li>September 1, 2013 - <a href="http://www.nrmp.org/" target="_blank">NRMP</a> registration opens</li>
<li>November 30, 2013 - Last day for early registration</li>
<li>January 15, 2014 - Rank Order List Entry Begins</li>
<li>February 26, 2014 - Rank Order List Deadline</li>
<li>February 26, 2014 - Last day to register with <a href="http://www.nrmp.org/" target="_blank">NRMP</a></li>
<li>March 17, 2014 - "Did I Match?" notification</li>
<li>March 19, 2014 – Supplemental Offer and Acceptance Program (SOAP) offer rounds begin at 12:00 noon eastern time</li>
<li>March 21, 2014 - Match Day</li>
</ul>
<a href="http://www.nrmp.org/residency/main-match-events/" target="_blank">NRMP Timeline</a>
<br />
<br />
Integrated residents are also required to register with the <a href="http://www.nrmp.org/" target="_blank">NRMP</a>.
<br /><br />

<a href="http://www.nrmp.org/match-data/main-residency-match-data/" target="_blank">National Specialty Match Data</a>

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
Last Updated: <? echo $nrmpDate; ?>
<table>
<tr>
<td colspan="3">
<br />
	
            
       <form enctype="multipart/form-data" action="inc/update_step12.php" method="post" name="nrmpNotesForm">
       <input type="hidden" name="currentRel" value="<? echo $currentRel; ?>" />     
       <input type="hidden" name="nrmpID" value="<? echo $nrmpID; ?>" /> 
		<fieldset>
			<label for="choices">
			<ul class="checklist">
            <table>
            <tr>
            <td>
					<li<? if ($step1 == 1) { ?> class="selected"<? } ?> name="step1">
						<input name="step12-1" value="1" type="checkbox" <? if ($step1 == 1) { ?>checked<? } ?> />
						<p>Register with <a href="http://www.nrmp.org/" target="_blank" class="checklist">NRMP</a></p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>

					</li>
                    </td><td>
                    <li<? if ($step2 == 1) { ?> class="selected"<? } ?> name="step2">
						<input name="step12-2" value="1" type="checkbox" <? if ($step2 == 1) { ?>checked<? } ?> />
						<p>Pay fees <a href="http://www.nrmp.org/" target="_blank" class="checklist">NRMP</a></p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>

					</li>
                    </td><td>
					<li<? if ($step3 == 1) { ?> class="selected"<? } ?> name="step3">
						<input name="step12-3" value="1" type="checkbox" <? if ($step3 == 1) { ?>checked<? } ?> />
						<p>Add programs <a href="http://www.nrmp.org/" target="_blank" class="checklist">NRMP</a></p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li>
                    </td>
                    <td>
					<li<? if ($step4 == 1) { ?> class="selected"<? } ?> name="step4">
						<input name="step12-4" value="1" type="checkbox" <? if ($step4 == 1) { ?>checked<? } ?> />
						<p>Code for Couples Match <a href="http://www.nrmp.org/" target="_blank" class="checklist">NRMP</a></p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li>
                    </td>
                    
                    
                    <td>
					<li<? if ($step5 == 1) { ?> class="selected"<? } ?> name="step5">
						<input name="step12-5" value="1" type="checkbox" <? if ($step5 == 1) { ?>checked<? } ?> />
						<p>Rank Programs <a href="http://www.nrmp.org/" target="_blank" class="checklist">NRMP</a></p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li>
                    </td>
  
                    </tr>
                    <tr>
                    
                    <td>
					<li<? if ($step6 == 1) { ?> class="selected"<? } ?> name="step6">
						<input name="step12-6" value="1" type="checkbox" <? if ($step6 == 1) { ?>checked<? } ?> />
						<p>Certify Rank Order List <a href="http://www.nrmp.org/" target="_blank" class="checklist">NRMP</a></p>
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