<script>
   
function resources()   {
	NewWindow=window.open("/steps/13-resources.html","",'width=550,height=450,menubar=no,scrollbars=yes')
   }

function tips()   {
	NewWindow=window.open("/steps/13-tips.php","",'width=550,height=400,menubar=no,scrollbars=yes')
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

<h1>The Supplemental Offer and Acceptance Program (SOAP)  </h1>


<b>Website</b>: <a href="http://www.nrmp.org/residency/soap/" target="_blank">http://www.nrmp.org/residency/soap/</a>
<br /><br />

Unmatched and partially unmatched applicants may apply to unfilled programs who participated in the NRMP Main residency match.  Applicants may only use ERAS to submit applications and my not contact programs by any other means.
<br /><br />
The criteria to be eligible are:<br />
<ul>
<li>Must have registered with the NRMP for the Main Residency Match</li>
<li>Applicant was unmatched or only partially matched (secured a PGY2 position but not a preliminary year or vice versa)</li>
<li>Is certain to meet all graduation requirements, including passing USMLE Steps 1 and 2 CK and CS and will be able to begin residency training on July 1</li>
</ul>


<h2>SOAP Timeline</h2>

<b>Friday before Match Week: </b>
<p>All students who have registered with the NRMP will be notified if they are SOAP eligible.  NOTE: This does NOT mean you have not matched; every applicant will receive this notification.</p>

<b>Match Week:</b>

<p>

<b>Monday</b><br />
11:00 a.m. Central Time - all applicants will receive notification of Match Status: 
<br />
<ul>
<li>Matched</li>
<li>Did not match – SOAP Eligible</li>
<li>Partially matched – SOAP Eligible</li>
</ul>
</p>


<p>At 1:00 Central Time - SOAP eligible applicants may begin submitting applications via ERAS to unfilled programs.  NOTE: Applicants may not contact programs by any other means and must wait to hear back from programs.</p>

<p>
<b>Tuesday </b><br />
Applicants participating in the SOAP contact unfilled programs.
</p>

<p>
<b>Wednesday </b><br />
11:00 a.m. Central Time - programs begin making first round of residency position offers.  Applicants have two hours to accept offer.
</p>

<p>
<b>Thursday</b><br />
SOAP concludes at 4:00 p.m. Central Time
</p>

<p>
<b>Friday</b><br />
Match Day!
</p>



<br /><br />

<div class="note">
<a href="javascript:tips()"><span style="font-size: 16px;">Tips and Tricks</span></a>
<br /><br />
<a href="javascript:resources()"><span style="font-size: 16px;">Resources</span></a>
<br />
</div>

<p /><br />





<div style="margin-left: 15px;">
<!--<h2 style="margin: 0; padding: 0; font-size: 15px;">Steps:</b></span></h2>
Last Updated: --><? //echo $nrmpDate; ?>
<table>
<tr>
<td colspan="3">
<br />
	
    
    

<div style="clear: both;"></div>