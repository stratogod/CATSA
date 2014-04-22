<?
session_start();
if(isset($_SESSION["user"]))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Account - University of Missouri School of Medicine - Clinical Advising Tool For Students & Advisors</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src='js/jquery.js' type='text/javascript'></script>
<script src='js/jquery.simplemodal.js' type='text/javascript'></script>
<script src='js/contact.js' type='text/javascript'></script>
<link type='text/css' href='css/contact.css' rel='stylesheet' media='screen' />
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
      <h1>My Account</h1>
      Below is your account information for your user name of (<? echo $username; ?>).
      <p />
      <br />
      <? $result_Master = mysql_query("SELECT * FROM users WHERE id=$userID");

while ($data_set5b = mysql_fetch_array($result_Master))
        {
?>
      <div id='contactForm'>
        <h2 style="margin: 0px; margin-bottom: -10px;"><b><? echo $data_set5b[username]; ?></b>&nbsp;&nbsp; <a href="javascript:void(0)" onclick="window.open('inc/edit_user.php?cmd=edit&id=<? echo $data_set5b[id]; ?>','linkname','height=700, width=550,scrollbars=yes')">Edit</a></h2>
      </div>
      <p />
      <table class="styled">
        <tr>
          <td valign="top" width="200"><b>Full Name:</b></td>
          <td valign="top" width="300"><? echo $data_set5b['first_name']; ?> <? echo $data_set5b['last_name']; ?></td>
        </tr>
        <tr>
          <td valign="top" width="200"><b>Role:</b></td>
          <td valign="top" width="300"><? echo $data_set5b['role']; ?></td>
        </tr>
        <tr>
          <td valign="top" width="200"><b>City:</b></td>
          <td valign="top" width="300"><? echo $data_set5b['city']; ?></td>
        </tr>
        <tr>
          <td valign="top" width="200"><b>Address:</b></td>
          <td valign="top" width="300"><? echo $data_set5b['address']; ?></td>
        </tr>
        <tr>
          <td valign="top" width="200"><b>Zip Code:</b></td>
          <td valign="top" width="300"><? echo $data_set5b['zip']; ?></td>
        </tr>
        <tr>
          <td valign="top" width="200"><b>Phone #:</b></td>
          <td valign="top" width="300"><? echo $data_set5b['phone']; ?></td>
        </tr>
        <tr>
          <td valign="top" width="200"><b>Interest:</b></td>
          <td valign="top" width="300"><? echo $data_set5b['interest']; ?></td>
        </tr>
        <tr>
          <td valign="top" width="200"><b>Email:</b></td>
          <td valign="top" width="300"><a href-"mailto:<? echo $data_set5b['email']; ?>"><? echo $data_set5b['email']; ?></a></td>
        </tr>
        <tr>
          <td valign="top" width="200"><b>Bio:</b></td>
          <td valign="top" width="300"><? echo $data_set5b['bio']; ?></td>
        </tr>
        <? if (($userRole == "admin") || ($userRole == "advisor")) { ?>
        <tr>
          <td valign="top" width="200"><b>Internal Notes:</b></td>
          <td valign="top" width="300"><? echo $data_set5b['notes']; ?></td>
        </tr>
        <? } ?>
      </table>
      <? } ?>
    </div>

          
          <br />
        </div>
        </td>

        
     
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