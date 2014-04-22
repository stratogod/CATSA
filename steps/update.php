<?php
if ($_POST) {

    // db connection
    $link = mysql_connect('localhost', 'catsa_user', 'catsaPass!db');
    if (!$link) {
       // error happened
       print(0);
    }
    mysql_select_db('catsa_db');

    // sanitize the value
    $value = $_POST['value'];
	$checkname = $_POST['checkname'];
	$id = $_POST['id'];
	$currentRel = $_POST['currentRel'];
	$date = date('Y-m-d H:i:s');
	$sectionname = $_POST['sectionname'];
	$sectionnumber = $_POST['sectionnumber'];
	$adviserNotes = mysql_real_escape_string($_POST['adviserNotes']);
	$studentNotes = mysql_real_escape_string($_POST['studentNotes']);


// start the query
$sql = "UPDATE $sectionname SET $checkname='$value',date='$date' WHERE id='$id'";
mysql_query($sql); 	


// Find the new Total
if ($value == 1) {
$sql3 = "UPDATE master SET $sectionnumber = $sectionnumber + 1 WHERE relationship_id=$currentRel";
mysql_query($sql3); 
} else {
$sql3 = "UPDATE master SET $sectionnumber = $sectionnumber - 1 WHERE relationship_id=$currentRel";
mysql_query($sql3); 
}

if ($adviserNotes != "") {
$sql3 = "UPDATE $sectionname SET adviser_notes='$adviserNotes',date='$date' WHERE relationship_id=$currentRel";
mysql_query($sql3); 
}
if ($studentNotes != "") {
$sql5 = "UPDATE $sectionname SET notes='$studentNotes',date='$date' WHERE id=$id";	
mysql_query($sql5);
}

}
?>