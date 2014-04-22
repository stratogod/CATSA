<script>
function resources()   {
	NewWindow=window.open("/steps/3-resources.html","",'width=600,height=375,menubar=no,scrollbars=yes')
   }
function tips()   {
	NewWindow=window.open("/steps/3-tips.php","",'width=525,height=650,menubar=no,scrollbars=yes')
   }   
   
function samples()   {
	NewWindow=window.open("/steps/3-samples.php","",'width=430,height=600,menubar=no,scrollbars=yes')
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
		 			var personalID = $('input[name=personalID]').val();
				    var currentRel = $('input[name=currentRel]').val();	

		  
		  $.post('/steps/update.php', { value:value,checkname:checkname,id:personalID,currentRel:currentRel,sectionname:"s_personal",sectionnumber:"section3" }, function(data){});
					$(this).parent().addClass("selected");
					$(this).parent().find(":checkbox").attr("checked","checked");					
				}
			);
			
			$(".checklist .checkbox-deselect").click(
				function(event) {
					event.preventDefault();				
					
					var checkname = $(this).parent().attr('name');		  
		  			var personalID = $('input[name=personalID]').val();
					var currentRel = $('input[name=currentRel]').val();		  
		  
					 $.post('/steps/update.php', { value:0,checkname:checkname,id:personalID,currentRel:currentRel,sectionname:"s_personal",sectionnumber:"section3" }, function(data){});
					$(this).parent().removeClass("selected");
					$(this).parent().find(":checkbox").removeAttr("checked");					
				}
			);	
	});
</script>
<? } ?>

<?

		if ($userRole == "adviser") {
		$query666 = mysql_query("SELECT * FROM s_personal WHERE student_id='$studentid'");
		} else { 
		$query666 = mysql_query("SELECT * FROM s_personal WHERE student_id='$userID'");
		}
		
		$data_set666 = mysql_fetch_array($query666);
		$personalID = $data_set666['0'];
		$personalActive = $data_set666['6'];
		$personalDate = $data_set666['10'];
		
		$step1 = $data_set666['3'];
		$step2 = $data_set666['4'];
		$step3 = $data_set666['5'];
		
		
?>

<h1>Personal Statements</h1>

<p><i>Who are you? What are your professional goals? How did you decide your specialty choice?  What do you expect from a residency program?</i>  These are some of the questions that should be answered in your personal statement.  This is an opportunity for you to detail your thoughts and feelings about your chosen profession.  This is where you set yourself apart from the other applicants.  It is called a personal statement because it is personal! </p>

<p>View some of these <a href="javascript:resources()">resources</a> for additional information to help you compose your personal statement.</p>

<br />

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
Last Updated: <? echo $personalDate; ?>
<table>
<tr>
<td colspan="3">
<br />

       <form enctype="multipart/form-data" action="inc/update_step3.php" method="post" name="personalNotesForm">
       <input type="hidden" name="currentRel" value="<? echo $currentRel; ?>" />
       <input type="hidden" name="personalID" value="<? echo $personalID; ?>" />
		<fieldset>
			<label for="choices">
			<ul class="checklist">
					<li<? if ($step1 == 1) { ?> class="selected"<? } ?> name="step1">
						<input name="step3-1" value="1" type="checkbox" <? if ($step1 == 1) { ?>checked<? } ?> />
						<p>Is the personal statement written?</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>

					</li>
					<li<? if ($step2 == 1) { ?> class="selected"<? } ?> name="step2">
						<input name="step3-2" value="1" type="checkbox" <? if ($step2 == 1) { ?>checked<? } ?> />
						<p>Has the personal statement been proofed?<br /><br />(<a href="javascript:tips()" class="checklist">click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li>

					<li<? if ($step3 == 1) { ?> class="selected"<? } ?> name="step3">
						<input name="step3-3" value="1" type="checkbox" <? if ($step3 == 1) { ?>checked<? } ?> />
						<p>Does there need to be more than one personal statement, ie for different programs?</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li>
					
				</ul>
			</label>
<div style="clear: both;"></div>			
		</fieldset>
</form>
<br /><br />