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
	
if ($_POST['value'] == "Show") {
	$value = 1;
} else { 
	$value = 0;
} 

	$sectionname = $_POST['sectionname'];
	$student_id = $_POST['student_id'];	
	$date = date('Y-m-d H:i:s');

// start the query
$sql = "UPDATE $sectionname SET status='$value' WHERE student_id='$student_id'";
mysql_query($sql); 	


}
?>