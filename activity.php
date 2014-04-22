<?
session_start();
if(isset($_SESSION["user"]))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>University of Missouri School of Medicine - Clinical Advising Tool For Students & Advisors - Status</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/ui-lightness/jquery-ui.css" type="text/css" media="screen" />

<script>
function p()   {
	NewWindow=window.open("steps.html","",'width=430,height=600,menubar=no,scrollbars=yes')
   }
</script>

<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="js/ui.core.js"></script>
<script type="text/javascript" src="js/ui.datepicker.js"></script>
<script type="text/javascript" src="js/jquery.progressbar.min.js"></script>



<script type="text/javascript">
			var progress_key = '4a43f43f56b7d';

			$(document).ready(function() {
				$("#pb1").progressBar();
				$("#pb2").progressBar({ max: 38, textFormat: 'fraction'});
			});

		
		</script>



<script type="text/javascript">
	$(function() {
		$("#datepicker").datepicker({ dateFormat: 'yy-mm-dd' })
		;
	});
</script>


	<script type="text/javascript">
	
		$(document).ready(function() {
			$(".checklist .checkbox-select").click(
				function(event) {
					event.preventDefault();
					$(this).parent().addClass("selected");
					$(this).parent().find(":checkbox").attr("checked","checked");
					
				}
			);
			
			$(".checklist .checkbox-deselect").click(
				function(event) {
					event.preventDefault();
					$(this).parent().removeClass("selected");
					$(this).parent().find(":checkbox").removeAttr("checked");
					
				}
			);
			
		});
	
	</script>
	
	
	<style type="text/css">
	
	
		fieldset {
			border: 0;
		}
	
		.checklist {
			list-style: none;
			margin: 0;
			padding: 0;
		}
	
		.checklist li {
			float: left;
			margin-right: 10px;
			background: url(images/checkboxbg.gif) no-repeat 0 0;
			width: 105px;
			height: 150px;
			position: relative;
			font: normal 11px/1.3 "Lucida Grande","Lucida","Arial",Sans-serif;
		}
		
		.checklist li.selected {
			background-position: -105px 0;
		}
		
		.checklist li.selected .checkbox-select {
			display: none;
		}
		
		.checkbox-select {
			display: block;
			float: left;
			position: absolute;
			top: 118px;
			left: 10px;
			width: 85px;
			height: 23px;
			background: url(images/select.gif) no-repeat 0 0;
			text-indent: -9999px;
		}
		
		.checklist li input {
			display: none;	
		}
		
		a.checkbox-deselect {
			display: none;
			color: white;
			font-weight: bold;
			text-decoration: none;
			position: absolute;
			top: 120px;
			right: 10px;
		}
		
		.checklist li.selected a.checkbox-deselect {
			display: block;
		}
		
		.checklist li p {
			text-align: center;
			padding: 8px;
		}
		
		.sendit {
			display: block;
			float: left;
			top: 118px;
			left: 10px;
			width: 115px;
			height: 34px;
			border: 0;
			cursor: pointer;
			background: url(images/sendit.gif) no-repeat 0 0;
			text-indent: -9999px;
			margin: 20px 0;
		}
	
	</style>

	
	




<? include("inc/db.php"); ?>
<? include("inc/top.php"); ?>
</head>


<body>
<div id="mainContainer">
<table border="0" cellspacing="0" cellpadding="0" width="100%">
<tr>

    
	<td valign="top">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
		<tr>
		<td valign="top" style="background-color: #000000;"><a href="index2.php"><img src="images/main_logo.jpg" alt="Clinical Advising Tool for Students & Advisors (CATSA)" border="0" /></a></td>
        <td valign="top"><a href="http://som.missouri.edu" target="_blank"><img src="images/top_right.jpg" alt="School of Medicine" border="0" /></a></td>
		</tr>
 		
        
      
        <tr>
        <td><? include("inc/menu.php"); ?></td>
        <td><? include("inc/userinfo.php"); ?></td>
		</tr>
<tr>
<td valign="top" width="100%">




<div id="mainContent">




<table cellpadding="0" cellspacing="0" width="100%">
<tr>
<td valign="top" width="100%">
<!-- printer:start -->
<!-- START CONTENT -->


<h1>Current Status</h1>


<? if ($userRole == "admin") { ?>
Since you are an Administrator, you don't have any orders like other users.  You can view all current orders and order status in the entire system below and make any modifications necessary.

<p />
<ul>
<li><a href="status_details.php">View Status Logs/Details</a></li>
<li><a href="javascript:p()">Advising Steps</a></li>
</ul>


<p />
<!--<b>This page is for users that already exist in the database.  Please <a href="users.php">Add A User</a> before beginning an ordering relationship pool for them.-->
<p /><br />
<table width="100%">

<?
$result_Master = mysql_query("SELECT * FROM master ORDER BY id ASC");
        while ($rowMaster = mysql_fetch_array($result_Master))
        {



$result_Master2 = mysql_query("SELECT * FROM steps where id='$rowMaster[status]'");
$rowMaster2 = mysql_fetch_array($result_Master2);
$currentStatus = $rowMaster2['name'];


$currentStatusPre = $rowMaster[status]+1;
$result_Master3 = mysql_query("SELECT * FROM steps where id='$currentStatusPre'");
$rowMaster3 = mysql_fetch_array($result_Master3);
$currentStatus2 = $rowMaster3['name'];
$statusRights = $rowMaster3['can_update_role'];
?>

<tr>
<td valign="top" width="25%">

<br />

<b><? echo $currentStatus2; ?></b>

<p />

<? echo "<form action=\"inc/update_status.php\" method=\"post\"><input type=\"hidden\" name=\"currentStatusID\" value=\"".$rowMaster['status']."\"><input type=\"hidden\" name=\"orderID\" value=\"".$rowMaster['id']."\"><input type=\"hidden\" name=\"currentStatus2\" value=\"".$currentStatus2."\">"; ?>

Note:<br />
<textarea cols="14" rows="3" name="notes" id="notes"></textarea>
<p />

<? echo "<input type=\"submit\" value=\"Update\" style=\"font-size: 18px; border: 2px solid green;\"></form>"; ?>




</td>
<td valign="top" width="75%">
<div style="border: 2px solid #999; padding-left: 15px; padding-bottom: 15px; padding-top: 8px; width: 90%;">
<b>Current Status</b> - <span style="font-size: 16px; font-weight: bold; color: #090;"><? echo $currentStatus; ?></span><br />

<img src="/images/orders/<? echo $rowMaster['status']; ?>.jpg" alt="Order Status" style="height: 40px;" />
<br />

<table style="margin-left: 20px; widht: 650px; font-weight: bold;">
<tr>
<td>


				<table>
					<tr><td>Completed Progress: </td><td width="300"><span class="progressBar" id="pb2">0</span></td></tr>
					
				</table>
				<strong>Some controls: </strong>
				<a href="#" onclick="$('#pb2').progressBar(0);">0</a> |
				<a href="#" onclick="$('#pb2').progressBar(7);">7</a> |
				<a href="#" onclick="$('#pb2').progressBar(14);">14</a> |
				<a href="#" onclick="$('#pb2').progressBar(25);">25</a> |
				<a href="#" onclick="$('#pb2').progressBar(36);">38</a>



</td>
</tr>
</table>
<p />
<b>Next Update is</b> - <span style="font-size: 16px; font-weight: bold; color: #F00;"><? echo $currentStatus2; ?></span>.  Waiting on the <span style="color: #090;">green highlighted user</span> to complete task.<br />
<table width="90%">
<tr>
<td width="33%"><? if (($rowMaster['status'] == "10") || ($rowMaster['status'] == "11")) { ?><img src="/images/roles/buyer-on.gif" alt="Buyer" /><? } else { ?><img src="/images/roles/buyer-off.gif" alt="Buyer" /><? } ?></td>
<td width="33%"><? if (($rowMaster['status'] == "1") || ($rowMaster['status'] == "2") || ($rowMaster['status'] == "3") || ($rowMaster['status'] == "5") || ($rowMaster['status'] == "6") || ($rowMaster['status'] == "7") || ($rowMaster['status'] == "12")) { ?><img src="/images/roles/supplier-on.gif" alt="Supplier" /><? } else { ?><img src="/images/roles/supplier-off.gif" alt="Supplier" /><? } ?></td>
<td width="33%"><? if (($rowMaster['status'] == "4") || ($rowMaster['status'] == "8") || ($rowMaster['status'] == "9")) { ?><img src="/images/roles/shipper-on.gif" alt="Shipper" /><? } else { ?><img src="/images/roles/shipper-off.gif" alt="Shipper" /><? } ?></td>
</tr>
</table>
</div>

</td>
</tr>
<tr>
<td>
<br /><br /><br />
</td>
</tr>



</td>
</tr>
<? }  }?>

</table>



</td>
</tr>	
</table>
<!-- END CONTENT -->

</div>
</td>
</tr>
</table>

</td>
</tr>

<? include("inc/footer.php"); ?>

<?
} else {

header("location: login.php");
}
?>


</body>
</html>