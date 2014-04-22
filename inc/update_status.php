<?
session_start();


$currentStatusID2 = $_POST['currentStatusID'];
$newStatus = $currentStatusID2 + 1;
$orderID = $_POST['orderID'];
$notes = $_POST['notes'];
$paymentDate = $_POST['paymentDate'];
$currentStatus2 = $_POST['currentStatus2'];
$date = date('Y-m-d H:i:s');




$members = mysql_connect("localhost", "ots_admin", "passw0rd!");
    if(!$members) 
        {
            echo "<p>Sorry! We could not log you in at this time. Please Try again later!</p>";
        }

mysql_select_db("ots_db", $members); 



$username = $_SESSION["user"]; 


//Select User Data
$idquery = mysql_query("SELECT * FROM users WHERE username='$username'");
$data_set = mysql_fetch_array($idquery);
$userID = $data_set['id'];
$userRole = $data_set['role'];
$userFirstName = $data_set['first_name'];
$userEmail = $data_set['email'];
$userRelationshipID = $data_set['relationship_id'];



//Buyer Info
$idquery3 = mysql_query("SELECT * FROM users WHERE id='$_POST[thisBuyerID]'");
$data_set3 = mysql_fetch_array($idquery3);
$myBuyersUserName = $data_set3['username'];
$myBuyersFirstName = $data_set3['first_name'];
$myBuyersLastName = $data_set3['last_name'];
$myBuyersCompany = $data_set3['company'];
$myBuyersEmail = $data_set3['email'];

//Supplier Info
$idquery4 = mysql_query("SELECT * FROM users WHERE id='$_POST[thisSupplierID]'");
$data_set4 = mysql_fetch_array($idquery4);
$mySuppliersUserName = $data_set4['username'];
$mySuppliersFirstName = $data_set4['first_name'];
$mySuppliersLastName = $data_set4['last_name'];
$mySuppliersCompany = $data_set4['company'];
$mySuppliersEmail = $data_set4['email'];

//Shipper Info
$idquery5 = mysql_query("SELECT * FROM users WHERE id='$_POST[thisShipperID]'");
$data_set5 = mysql_fetch_array($idquery5);
$myShippersUserName = $data_set5['username'];
$myShippersFirstName = $data_set5['first_name'];
$myShippersLastName = $data_set5['last_name'];
$myShippersCompany = $data_set5['company'];
$myShippersEmail = $data_set5['email'];

$idquery6 = mysql_query("SELECT * FROM master WHERE id='$orderID'");
$data_set6 = mysql_fetch_array($idquery6);
$orderPO = $data_set6['po_number'];




//Update Status in MASTER
$sql = mysql_query("UPDATE master SET status='$newStatus' WHERE id='$orderID'");
mysql_query($sql);

//Update Status in Order-STATUS
$sql2 = mysql_query("UPDATE order_status SET stat". $currentStatusID2 . "_date='$date' WHERE id='$orderID'");
mysql_query($sql2);

$sql3 = mysql_query("UPDATE order_status SET stat" . $currentStatusID2 . "_notes='$notes' WHERE id='$orderID'");
mysql_query($sql3);

//Update Payment Date
$sql = mysql_query("UPDATE master SET payment_date='$paymentDate' WHERE id='$orderID'");
mysql_query($sql);





	
//Send Email Buyer
$toBuyer = "$myBuyersFirstName $myBuyersLastName <$myBuyersEmail>";
$toSupplier = "$mySuppliersFirstName $mySuppliersLastName <$mySuppliersEmail>";
$toShipper = "$myShippersFirstName $myShippersLastName <$myShippersEmail>";
$toAll = "$myBuyersFirstName $myBuyersLastName <$myBuyersEmail>,$mySuppliersFirstName $mySuppliersLastName <$mySuppliersEmail>,$myShippersFirstName $myShippersLastName <$myShippersEmail>";
$toAdmin = "Admin <jason.tang@ingredientslink.com>,Tech Support <sthompson@skydev-tech.com>";

$subject1 = "Ingredients Link Notification - Order $orderPO status has been updated.";
$subject2 = "Ingredients Link Alert - Order $orderPO requires your attention.";
$subject3 = "Ingredients Link Alert - Order $orderPO is waiting for your approval to complete";

$message1 = "

- NOTIFICATION - 

There has been an update on the Ingredients Link Order Tracking System.  No action is required.

Details:

The order has been updated to the following status:

$currentStatus2

Status Modified By: $userFirstName ($userRole)
Date Modified: $date


Quick Link: http://www.ingredientslink.com/ots/status.php";


$message2 = "

- ALERT - 

There has been an update on the Ingredients Link Order Tracking System that requires your attention.

Details:

The order has been updated to the following status:

$currentStatus2

Status Modified By: $userFirstName ($userRole)
Date Modified: $date


Quick Link: http://www.ingredientslink.com/ots/status.php";



$message3 = "

- ALERT - 

ORDER WAITING FOR YOUR REVIEW TO COMPLETE!

Details:

The order has been updated to the following status:

$currentStatus2

Status Modified By: $userFirstName ($userRole)
Date Modified: $date


Quick Link: http://www.ingredientslink.com/ots/status.php";



$headers = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1\n";
$headers .= "From: Administrator <orders@ingredientslink.com>\n";
$headers .= "Ingredients Link - Order Tracking System";


if ($newStatus == "2") {
$result_mail=mail($toBuyer,$subject1,$message1,$headers);
$result_mail=mail($toSupplier,$subject2,$message2,$headers);
}

if ($newStatus == "3") {
$result_mail=mail($toBuyer,$subject1,$message1,$headers);
$result_mail=mail($toShipper,$subject2,$message2,$headers);
}

if ($newStatus == "4") {
$result_mail=mail($toSupplier,$subject2,$message2,$headers);
}

if ($newStatus == "5") {
$result_mail=mail($toAll,$subject1,$message1,$headers);
}

if ($newStatus == "6") {
$result_mail=mail($toAll,$subject1,$message1,$headers);
}

if ($newStatus == "7") {
$result_mail=mail($toBuyer,$subject2,$message2,$headers);
}

if ($newStatus == "8") {
$result_mail=mail($toBuyer,$subject2,$message2,$headers);
}

if ($newStatus == "9") {
$result_mail=mail($toSupplier,$subject2,$message2,$headers);
}

if ($newStatus == "10") {
$result_mail=mail($toAdmin,$subject3,$message3,$headers);
}

if ($newStatus == "11") {
$result_mail=mail($toAll,$subject1,$message1,$headers);
}



?>
<b>Order Status updated successfully</b>
<p />
The time of this update has been logged along with any notes.  All parties associated with this order have been notified on change of status.  Thank you for taking the time to update the order!
<p /><br />
<a href="/ots/status.php">Click here to go back...</a>