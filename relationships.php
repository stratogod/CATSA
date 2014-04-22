<?
session_start();
if(isset($_SESSION["user"]))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Relationships - University of Missouri School of Medicine - Clinical Advising Tool For Students & Advisors</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script type="text/javascript" src="/js/jqtransformplugin/jquery.jqtransform.js"></script>
<link rel="stylesheet" type="text/css" href="/js/jqtransformplugin/jqtransform.css" />
<? include("inc/db.php"); ?>
<? include("inc/top.php"); ?>
</head>
<body>
<object> 
	<map name="image_map" id="image_map"> 
	  <area coords="540,86,698,119" href="http://medicine.missouri.edu/" onclick="window.open(this.href); return false;" alt="University of Missouri School of Medicine" /> 
	</map>
</object>

<div id="mainContainer">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <tr>
      <td valign="top" colspan="2"><a href="/"><img src="images/main-banner-new2b.jpg" alt="Clinical Advising Tool for Students &amp; Advisors (CATSA)" border="0" usemap="#image_map" /></a></td>
    </tr>
    <tr>
      <td><? if(isset($_SESSION["user"])) { ?>
        <? include("inc/menu.php"); ?>
        <? } else { ?>
        <? include("inc/menu2.php"); ?>
        <? } ?></td>
      <td><? include("inc/userinfo.php"); ?></td>
    </tr>
    <tr>
      <td valign="top" width="600">
      
      <div id="mainContent"> 
        <h1>My Advisor</h1>
        Below is a list of the other users that have a relationship with your account.  You have <b>View</b> privileges with the grid below.  Only admins can add new users to your relationship pool.
        <? if ($userNotes == "demo") { ?>
        <br /><br />
        <span style="color: #ff0000;"><b>Note:</b> This account is not linked to a particular student and is not in any relationship.  This is a <b>DEMO</b> account and has access to view all students.  You can add to already existing advisor notes, documents, etc... however, a student will not be able to directly interact with you.</span>
        <? } ?>
        <p />
        <br />
        <br />
        <? 
		
		
		if ($userNotes == "demo") { 
$query123 = "SELECT * FROM relationships";
		} else {
$query123 = "SELECT * FROM relationships WHERE ". $userRole ."_id='$userID' AND active='1'";
		}
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
        <strong>Relationship ID: <? echo $row[0]; ?></strong>
        <p />
        <br />
        <table width="90%">
          <tr>
            <td width="50%"><? if ($userID == "$row[2]") { ?>
              <img src="images/roles/student-on.jpg" alt="Student" />
              <? } else { ?>
              <img src="images/roles/student-off.jpg" alt="Buyer" />
              <? } ?></td>
            <td width="50%"><? if ($userID == "$row[3]") { ?>
              <img src="images/roles/advisor-on.jpg" alt="Advisor" />
              <? } else { ?>
              <img src="images/roles/advisor-off.jpg" alt="Advisor" />
              <? } ?></td>
          </tr>
          <tr>
            <td valign="top"><? if ($row[2] == "0") { ?>
              <span style="color: #FF0000;"><b>You currently do not have a Student</b></span>. <br />
              Please contact your site <a href="mailto:thompsonstev@health.missouri.edu">Administrator</a>.
              <? } else { ?>
              <b><? echo $user666; ?></b><br />
              <b>Pawprint:</b> <? echo $data_set666['username']; ?><br />
              <? if($userRole != "student") { ?>
              <b>Full Name:</b> <? echo $data_set666['first_name']; ?>&nbsp;<? echo $data_set666['last_name']; ?><br />
              <b>Phone:</b> <? echo $data_set666['phone']; ?><br />
              <br />
              
              <a href="mailto:<? echo $data_set666['email']; ?>"><span style="font-size: 20px;">Send Email</span></a><br />
              <br />
              <? } ?>
              <? } ?></td>
            <td valign="top"><? if ($row[3] == "0") { ?>
              <span style="color: #FF0000;"><b>You currently do not have a Advisor</b></span>. <br />
              Please contact your site <a href="mailto:thompsonstev@health.missouri.edu">Administrator</a>.
              <? } else { ?>
              <b><? echo $user777; ?></b><br />
              <b>User Name:</b> <? echo $data_set777['username']; ?><br />
              <? if($userRole != "adviser") { ?>
              <b>Full Name:</b> <? echo $data_set777['first_name']; ?>&nbsp;<? echo $data_set777['last_name']; ?><br />
              <b>Phone:</b> <? echo $data_set777['phone']; ?><br />
              <br />
              <a href="mailto:<? echo $data_set777['email']; ?>"><span style="font-size: 20px;">Send Email</span></a><br />
              <br />
              <? } ?>
              <? } ?></td>
            <td></td>
          </tr>
        </table>
        <br />
        <br />
        <?
        }
  }
		
?>
        <div style="height: 420px;"></div>
               
          <br />
        </div></td>
      <td valign="top"><? include("inc/right-steps.php"); ?></td>
    </tr>
  </table>
  <? include("inc/footer.php"); ?>
  </div>
  
<?
} else {

header("location: login.php");
}
?>
</body>
</html>