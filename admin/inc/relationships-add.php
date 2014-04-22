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
$relationship_name = $_POST["relationship_name"];
$student_id = $_POST["studentid"];
$adviser_id = $_POST["adviserid"];
$date = date('Y-m-d H:i:s');


// Insert new relationship row
$sql = "INSERT INTO relationships (id, name, student_id, adviser_id, active) VALUES ('', '$relationship_name', '$student_id', '$adviser_id', '1')";
mysql_query($sql) or die('Error, query failed');

$query = mysql_query("SELECT * FROM relationships WHERE student_id='$student_id'");
$data_set = mysql_fetch_array($query);
$relationship_id = $data_set['0'];


// Insert new master row
$sql2 = "INSERT INTO master (id, student, adviser, relationship_id, section1, section2, section3, section4, section5, section6, section7, section8, section9, section10, section11, section12) VALUES ('', '$student_id', '$adviser_id', '$relationship_id', '$section1', '$section2', '$section3', '$section4', '$section5', '$section6', '$section7', '$section8', '$section9', '$section10', '$section11', '$section12')";
mysql_query($sql2) or die('Error, query failed2');



// Insert new steps
$sql3 = "INSERT INTO s_cv (id, student_id, adviser_id, step1, step2, step3, status, relationship_id, notes, adviser_notes, date) VALUES ('', '$student_id', '$adviser_id', '0', '0', '0', '1', '$relationship_id', '', '', '$date')";
mysql_query($sql3) or die('Error, query failed');

$sql4 = "INSERT INTO s_early (id, student_id, adviser_id, step1, step2, step3, step4, step5, step6, step7, step8, step9, step10, step11, step12, step13, step14, status, relationship_id, notes, adviser_notes, date) VALUES ('', '$student_id', '$adviser_id', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '$relationship_id', '', '', '$date')";
mysql_query($sql4) or die('Error, query failed');

$sql5 = "INSERT INTO s_electives (id, student_id, adviser_id, step1, step2, step3, status, relationship_id, notes, adviser_notes, date) VALUES ('', '$student_id', '$adviser_id', '0', '0', '0', '1', '$relationship_id', '', '', '$date')";
mysql_query($sql5) or die('Error, query failed');

$sql6 = "INSERT INTO s_eras (id, student_id, adviser_id, step1, step2, step3, step4, step5, step6, step7, step8, step9, step10, step11, step12, step13, step14, status, relationship_id, notes, adviser_notes, date) VALUES ('', '$student_id', '$adviser_id', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '$relationship_id', '', '', '$date')";
mysql_query($sql6) or die('Error, query failed');

$sql7 = "INSERT INTO s_integrated (id, student_id, adviser_id, step1, step2, step3, status, relationship_id, notes, adviser_notes, date) VALUES ('', '$student_id', '$adviser_id', '0', '0', '0', '1', '$relationship_id', '', '', '$date')";
mysql_query($sql7) or die('Error, query failed');

$sql8 = "INSERT INTO s_interviews (id, student_id, adviser_id, step1, step2, step3, step4, step5, step6, status, relationship_id, notes, adviser_notes, date) VALUES ('', '$student_id', '$adviser_id', '0', '0', '0', '0', '0', '0', '1', '$relationship_id', '', '', '$date')";
mysql_query($sql8) or die('Error, query failed');

$sql9 = "INSERT INTO s_letters (id, student_id, adviser_id, step1, step2, step3, step4, step5, status, relationship_id, notes, adviser_notes, date) VALUES ('', '$student_id', '$adviser_id', '0', '0', '0', '0', '0', '1', '$relationship_id', '', '', '$date')";
mysql_query($sql9) or die('Error, query failed');

$sql10 = "INSERT INTO s_military (id, student_id, adviser_id, step1, step2, step3, step4, step5, status, relationship_id, notes, adviser_notes, date) VALUES ('', '$student_id', '$adviser_id', '0', '0', '0', '0', '0', '1', '$relationship_id', '', '', '$date')";
mysql_query($sql10) or die('Error, query failed');

$sql11 = "INSERT INTO s_mspe (id, student_id, adviser_id, step1, step2, step3, step4, step5, step6, status, relationship_id, notes, adviser_notes, date) VALUES ('', '$student_id', '$adviser_id', '0', '0', '0', '0', '0', '0', '1', '$relationship_id', '', '', '$date')";
mysql_query($sql11) or die('Error, query failed');

$sql12 = "INSERT INTO s_nrmp (id, student_id, adviser_id, step1, step2, step3, step4, step5, step6, status, relationship_id, notes, adviser_notes, date) VALUES ('', '$student_id', '$adviser_id', '0', '0', '0', '0', '0', '0', '1', '$relationship_id', '', '', '$date')";
mysql_query($sql12) or die('Error, query failed');

$sql13 = "INSERT INTO s_personal (id, student_id, adviser_id, step1, step2, step3, status, relationship_id, notes, adviser_notes, date) VALUES ('', '$student_id', '$adviser_id', '0', '0', '0', '1', '$relationship_id', '', '', '$date')";
mysql_query($sql13) or die('Error, query failed');

$sql14 = "INSERT INTO s_residency (id, student_id, adviser_id, step1, step2, step3, step4, step5, status, relationship_id, notes, adviser_notes, date) VALUES ('', '$student_id', '$adviser_id', '0', '0', '0', '0', '0', '1', '$relationship_id', '', '', '$date')";
mysql_query($sql14) or die('Error, query failed');

?>



<div class="note accepted">
<p>New relationship has successfully been added to the CATSA database!
<br /><br />
<a href="/admin/relationships.php">Click here</a> to go back.</p>
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