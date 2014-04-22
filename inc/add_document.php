<?
session_start();

$date = date('Y-m-d H:i:s');

include("db.php");


$username = $_SESSION["user"]; 


//Select User Data
$idquery = mysql_query("SELECT * FROM users WHERE username='$username'");
$data_set = mysql_fetch_array($idquery);
$userID = $data_set['id'];
$userRole = $data_set['role'];
$userFirstName = $data_set['first_name'];
$userEmail = $data_set['email'];
$userRelationshipID = $data_set['relationship_id'];
$userCompany = $data_set['company'];


if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
{
$target_path = "/var/www/html/catsa.missouri.edu/uploads/";


/* Add the original filename to our target path.  
Result is "uploads/filename.extension" */
$target_path = $target_path . basename( $_FILES['userfile']['name']); 
$_FILES['userfile']['tmp_name'];  
 
$target_path = "/var/www/html/catsa.missouri.edu/uploads/";

$target_path = $target_path . basename( $_FILES['userfile']['name']); 
 
if(move_uploaded_file($_FILES['userfile']['tmp_name'], $target_path)) {
   
} else{
    echo "There was an error uploading the file, please try again!";
}




$po_number = $_POST['orderPO']; 
$sentTo = $_POST['sentTO']; 
$relationship_id = $_POST['relationship_id'];
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];


if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}

$query = "INSERT INTO documents (id, name, type, size, content, providedTo, providedFrom, relationship_id, date ) VALUES ('', '$fileName', '$fileType', '$fileSize', '$fileType', '$sentTo', '$username', '$relationship_id', '$date')";

mysql_query($query) or die('Error, query failed');

echo "<br>File $fileName uploaded and provided to: <b>$sentTo</b><br>";
}

?>
<p /><br />
<a href="/documents.php">Click here to go back...</a>





<?

$to = "$advisorName <$advisorEmail>";
$subject = "CATSA - Document Uploaded";
$message = "
Dear Advisor - 

A student in your relationship has just uploaded a document to share with you.  Pleaes be sure to review any changes by logging into CATSA.  Please review details below:

Document: $fileName
Updated by: $username

Notes: $notes


Quick Link: http://www.ingredientslink.com/ots/uploads/$fileName2";


$headers = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1\n";
$headers .= "From: Ingredients Link <admin@ingredientslink.com>\n";
$headers .= "Ingredients Link - Order Tracking System";

$result_mail = mail($to,$subject,$message,$headers);


?>