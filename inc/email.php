<?

$members = mysql_connect("localhost", "ots_admin", "passw0rd!");
    if(!$members) 
        {
            echo "<p>Sorry! We could not log you in at this time. Please Try again later!</p>";
        }

mysql_select_db("ots_db", $members); 

?>
<?
$sql = "INSERT INTO $table (date, title, article) VALUES ('$a', '$b', '$c')";


$lastid = mysql_insert_id();
  
  $message .= '<body leftmargin="0" topmargin="0">
	<table width="700" border="0" align="center" cellpadding="0" cellspacing="5">
    <tr>
		<td>The ' . $table . ' section of the <a href="piponline.info"> PiPonline website</a> has been updated.  Please follow the link to see the new content.
	</tr>
  </table>
  </body>';


	$query = "SELECT email FROM emails";
	$result = mysql_query($query) or die(mysql_error());

	while($row = mysql_fetch_array($result)){
	$contactemail = $row['email']. ", ";
	}



	// Contacts
	//$replyName = $merc_replyId;
	//$replyEmail = $merc_replyAddress;
	
	$replyName = "PiPonliine";
	$replyEmail = "info@piponline.info";

	$contactname = "";
	

	// Subject
	$subject = "Website Update";

	// Headers
	$headers = "MIME-Version: 1.0" . PHP_EOL;
	$headers .= "Content-type: text/html; charset=iso-8859-1" . PHP_EOL;
	$headers .= "From: ".$replyName." <".$replyEmail.">\r\n" . PHP_EOL;
	$headers .= "BCC: ".$contactname." <".$contactemail.">\r\n" . PHP_EOL;
	

	mail(implode(',', $contactemail), $subject, $message, $headers);
  echo "$contactemail";
  echo "<h2>Email notification sent</h2>";
  echo "<h2>1 record added</h2>";

  mysql_close($con);