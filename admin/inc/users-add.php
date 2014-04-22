<? session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Clinical Advising Tool For Students &amp; Advisers - Admin Panel</title>
<link rel="stylesheet" type="text/css" href="/css/style.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/ui-lightness/jquery-ui.css" type="text/css" media="screen" />
<? include("../../inc/db.php"); ?>
<? include("../../inc/top.php"); ?>
</head>
<body>
<div id="mainContainer">
  <table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" width="650" style="background-color: #000000;"><a href="/admin/"><img src="/admin/images/admin-banner.jpg" alt="Clinical Advising Tool for Students &amp; Advisers (CATSA)" border="0" /></a></td>
    <td valign="top" width="300" style="background-color: #000000;"><a href="http://medicine.missouri.edu" target="_blank"><img src="/images/top_right.jpg" alt="School of Medicine" border="0" class="floatRight" /></a></td>
  </tr>
    <tr>
      <td>
        <? include("../menu.php"); ?>
       </td>
      <td><? include("../../inc/userinfo.php"); ?></td>
    </tr>
    <tr>
      <td valign="top" colspan="2">
      <div id="mainContent" style="width: 870px;">
          <!-- START CONTENT -->

<?
$pawprint = $_POST["pawprint"];
$role = $_POST["role"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$city = $_POST["city"];
$address = $_POST["address"];
$zip = $_POST["zip"];
$interest = $_POST["interest"];
$phone = $_POST["phone"];
$bio = $_POST["bio"];
$notes = $_POST["notes"];
$year = $_POST["year"];
$date = date('Y-m-d H:i:s');

// Insert new user row
$sql = "INSERT INTO users (id, username, password, first_name, last_name, role, email, city, address, zip, interest, phone, bio, notes, year, date) VALUES ('', '$pawprint', '', '$first_name', '$last_name', '$role', '$email', '$city', '$address', '$zip', '$interest', '$phone', '$bio', '$notes', '$year', '$date')";
mysql_query($sql) or die('Error, query failed');


?>



<div class="note accepted">
<p>New user has successfully been added to the CATSA database!
<br /><br />
<? echo $date; ?>

<a href="/admin/users.php">Click here</a> to go back.</p>
</div>


 
          <br />
        </div></td>
    </tr>
  </table>
  <br /><br /><br /><br />
  <? virtual("/inc/footer.php"); ?>
  </div>

</body>
</html>