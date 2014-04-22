<?
session_start();
if(isset($_SESSION["user"]))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>University of Missouri School of Medicine - Clinical Advising Tool For Students & Advisors - Users</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />

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
		<td valign="top" style="background-color: #000000;"><a href="index.html"><img src="images/main_logo.jpg" alt="Clinical Advising Tool for Students & Advisors (CATSA)" border="0" /></a></td>
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
<h1>User Management</h1>

Below is a grid of all users registered in the database.  You have <b>Full</b> privileges with the grid below, so you can change any information you want for a particular user.  Since each user is uniquely identified in a relationship, it is advised to just <b>disable</b> an account as opposed to deleting the entire user-record.
<p />
If you need to add another user into the <b>admin</b> role, please contact the <a href="mailto:sthompson@skydev-tech.com">Database Administrator</a>.
<p />
 <a href="javascript:void(0)" onclick="window.open('inc/add_user.php','linkname','height=550, width=400,scrollbars=yes')">Click here</a> to add another user to the system
<p />
<br />


   
<? $result_Master = mysql_query("SELECT * FROM users");

while ($rowMaster = mysql_fetch_array($result_Master))
        {
?>
<div style="padding: 10px; padding-bottom: 0px; background-color: #DEDEDE;">        
<h2 style="margin: 0px; margin-bottom: -10px;"><b><? echo $rowMaster[username]; ?></b>&nbsp;&nbsp; <a href="javascript:void(0)" onclick="window.open('inc/edit_user.php?cmd=edit&id=<? echo $rowMaster[id]; ?>','linkname','height=550, width=400,scrollbars=yes')">Edit</a> | <a href="inc/delete_user.php?cmd=del&id=<? echo $rowMaster[id]; ?>">Delete</a>&nbsp;&nbsp;&nbsp;<a href="relationships.php">Manage Relationships</a></h2>
<p />
<table border="1" cellpadding="3" cellspacing="3" style="font-size: 10px; font-family: Tahoma, Geneva, sans-serif; float: left;">
<tr>
<td><b>User Name</b></td>
<td><? echo $rowMaster[username]; ?></td>
</tr>
<tr>
<td><b>Password</b></td>
<td><? echo $rowMaster[password]; ?></td>
</tr>
<tr>
<td><b>First Name</b></td>
<td><? echo $rowMaster[first_name]; ?></td>
</tr>
<tr>
<td><b>Last Name</b></td>
<td><? echo $rowMaster[last_name]; ?></td>
</tr>
<tr>
<td><b>Role</b></td>
<td><? echo $rowMaster[role]; ?></td>
</tr>
<tr>
<td><b>E-mail</b></td>
<td><a href="mailto:<? echo $rowMaster[email]; ?>"><span style="font-size: 11px;"><? echo $rowMaster[email]; ?></span></a></td>
</tr>
<tr>
<td><b>Bio</b></td>
<td><? echo $rowMaster[bio]; ?></td>
</tr>
</table>


<table border="1" cellpadding="3" cellspacing="3" style="font-size: 10px; font-family: Tahoma, Geneva, sans-serif; float: left; margin-left: 40px;">
<tr>
<td><b>City</b></td>
<td><? echo $rowMaster[city]; ?></td>
</tr>
<tr>
<td><b>Address</b></td>
<td><? echo $rowMaster[address]; ?></td>
</tr>
<tr>
<td><b>Zip Code</b></td>
<td><? echo $rowMaster[zip]; ?></td>
</tr>
<tr>
<td><b>Interest</b></td>
<td><? echo $rowMaster[interest]; ?></td>
</tr>
<tr>
<td><b>Phone #</b></td>
<td><? echo $rowMaster[phone]; ?></td>
</tr>
</table>


<? if ($userRole == "admin") { ?>
<div style="font-size: 10px; font-family: Tahoma, Geneva, sans-serif; float: left; margin-left: 40px;">
<b>Notes:</b>
<? echo $rowMaster[notes]; ?>
</div>
<? } ?>


<table border="1" cellpadding="3" cellspacing="3" style="font-size: 10px; font-family: Tahoma, Geneva, sans-serif; float: left; margin-left: 40px;">
<? $query123 = "SELECT * FROM relationships WHERE ". $rowMaster[role] ."s_id='$rowMaster[id]'";
  $result123 = mysql_query($query123);
  if ($result123) {
    while ($row = mysql_fetch_array ($result123)) {
		$query666 = mysql_query("SELECT * FROM users WHERE id='$row[2]'");
		$data_set666 = mysql_fetch_array($query666);
		$user666 = $data_set666['company'];
		
		$query777 = mysql_query("SELECT * FROM users WHERE id='$row[3]'");
		$data_set777 = mysql_fetch_array($query777);
		$user777 = $data_set777['company'];
		
		$query888 = mysql_query("SELECT * FROM users WHERE id='$row[4]'");
		$data_set888 = mysql_fetch_array($query888);
		$user888 = $data_set888['company'];
		
	?>
    <tr>
    <td><b>Relationship Name: <? echo $row[1]; ?></b></td>

<? }} ?>
</tr>
</table>
</div>
    
<div style="clear: both;"></div>
<p /><br />



<?php
		}

?> 






<br /><br /><br /><br /><br />
<br /><br /><br /><br /><br />
</td>
</tr>
</table>
<!-- END CONTENT -->

</div>
</td>
</tr>
</table>

</td>

<? include("inc/footer.php"); ?>

<?
} else {

header("location: login.php");
}
?>


</body>
</html>