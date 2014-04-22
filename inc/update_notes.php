<? include("db.php"); ?>
<? include("top.php"); ?>

<?
	  $id = $_POST["personalID"];
	  $personalNotes = $_POST["personalNotes"];
	 
$sql = "UPDATE s_personal SET notes='$personalNotes' WHERE id=$id";	
mysql_query($sql); 


?>

<b>User Information Updated!</b>
<p />
You have updated user account information in the system.  
<p /><br />
<a href="/status.php">Click here to go back...</a>

<br /><br /><br /><br />