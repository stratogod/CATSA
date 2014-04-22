<script>
function resources()   {
	NewWindow=window.open("/steps/1-resources.html","",'width=430,height=600,menubar=no,scrollbars=yes')
   }

function tips()   {
	NewWindow=window.open("/steps/1-tips.php","",'width=430,height=600,menubar=no,scrollbars=yes')
   }   

function samples()   {
	NewWindow=window.open("/steps/1-samples.php","",'width=430,height=600,menubar=no,scrollbars=yes')
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
		 			var cvID = $('input[name=cvID]').val();
				    var currentRel = $('input[name=currentRel]').val();	

		  
		  $.post('/steps/update.php', { value:value,checkname:checkname,id:cvID,currentRel:currentRel,sectionname:"s_cv",sectionnumber:"section1" }, function(data){});
					$(this).parent().addClass("selected");
					$(this).parent().find(":checkbox").attr("checked","checked");					
				}
			);
			
			$(".checklist .checkbox-deselect").click(
				function(event) {
					event.preventDefault();				
					
					var checkname = $(this).parent().attr('name');		  
		  			var cvID = $('input[name=cvID]').val();
					var currentRel = $('input[name=currentRel]').val();		  
		  
					 $.post('/steps/update.php', { value:0,checkname:checkname,id:cvID,currentRel:currentRel,sectionname:"s_cv",sectionnumber:"section1" }, function(data){});
					$(this).parent().removeClass("selected");
					$(this).parent().find(":checkbox").removeAttr("checked");					
				}
			);	
	});
</script>
<? } ?>

    

<?
  if ($userRole == "adviser") {
		$query666 = mysql_query("SELECT * FROM s_cv WHERE student_id='$studentid'");
		} else { 
		$query666 = mysql_query("SELECT * FROM s_cv WHERE student_id='$userID'");
		}

		$data_set666 = mysql_fetch_array($query666);
		$cvID = $data_set666['0'];
		$cvActive = $data_set666['6'];
		$cvDate = $data_set666['10'];
		
		$step1 = $data_set666['3'];
		$step2 = $data_set666['4'];
		$step3 = $data_set666['5'];
				
?>


<h1>The Curriculum Vitae (CV) </h1>

<p>The CVs is a summary of your educational and academic background. It will be concise, yet thorough.  Your education and accomplishments as well as your professional history, experiences, research, presentations, publications, honors and awards will be listed in the CV.  It may also include additional information.  Once you have a CV, you will continue adding to it throughout your career.  Starting your CV early in your medical education will become very useful when you begin the residency application process as you begin entering information into the Electronic Residency Application Service (ERAS) the CV will help.  </p>

<p>ERAS will generate a basic CV automatically using the information you entered.  Although not always required, you may bring printed copies of your CV when you interview for residencies for your interviewers.</p>

<p>You may also provide a copy of your CV to your Letter of Recommendation writers.</p>


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
Last Updated: <? echo $cvDate; ?><br />

<table>
<tr>
<td colspan="3">
<br />
	

       <form enctype="multipart/form-data" action="inc/update_step1.php" method="post" name="form1" class="jqtransform">
       <input type="hidden" name="currentRel" value="<? echo $currentRel; ?>" />   
       <input type="hidden" name="cvID" value="<? echo $cvID; ?>" />    
   
       <br />
		<fieldset>
			<label for="choices">
			<ul class="checklist"> 
					<li<? if ($step1 == 1) { ?> class="selected"<? } ?>  name="step1">
						<input name="step1-1" id="step1-1" value="1" type="checkbox" <? if ($step1 == 1) { ?>checked<? } ?> />
						<p>Do you have a draft of your CV prepared?</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li>
            
                    <li<? if ($step2 == 1) { ?> class="selected"<? } ?>  name="step2">
						<input name="step1-2" value="1" type="checkbox" <? if ($step2 == 1) { ?>checked<? } ?> />
						<p>Has your CV been proof read?<br /><br /><br />(<a href="javascript:tips()" class="checklist">click here</a>)</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li>
          
					<li<? if ($step3 == 1) { ?> class="selected"<? } ?>  name="step3">
						<input name="step1-3" value="1" type="checkbox" <? if ($step3 == 1) { ?>checked<? } ?> />
						<p>Is your CV complete?</p>
						<a class="checkbox-select" href="#">Select</a>
						<a class="checkbox-deselect" href="#">Cancel</a>
					</li>
				</ul>
			</label>
<div style="clear: both;"></div>
</fieldset>
<br /><br />

<? if($userRole == "student") { ?>
<p><a href="/documents.php"><img src="/images/share.jpg" style="width: 17px;" alt="Share with adviser" /><span style="position: relative; top: -4px; left: 6px;">Share CV with Adviser</span></a></p>
<br />
<? } ?>


</form>
<br /><br />
