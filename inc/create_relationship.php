<?
session_start();


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


//Select User Relationships
$idquery2 = mysql_query("SELECT * FROM relationships WHERE id='$userRelationshipID'");
$data_set2 = mysql_fetch_array($idquery2);
$buyerID = $data_set2['buyers_id'];
$supplierID = $data_set2['suppliers_id'];
$shipperID = $data_set2['shippers_id'];
$relationshipName = $data_set2['name'];

//Buyer Info
$idquery3 = mysql_query("SELECT * FROM users WHERE id='$buyerID'");
$data_set3 = mysql_fetch_array($idquery3);
$myBuyersUserName = $data_set3['username'];
$myBuyersFirstName = $data_set3['first_name'];
$myBuyersLastName = $data_set3['last_name'];
$myBuyersCompany = $data_set3['company'];
$myBuyersEmail = $data_set3['email'];

//Supplier Info
$idquery4 = mysql_query("SELECT * FROM users WHERE id='$supplierID'");
$data_set4 = mysql_fetch_array($idquery4);
$mySuppliersUserName = $data_set4['username'];
$mySuppliersFirstName = $data_set4['first_name'];
$mySuppliersLastName = $data_set4['last_name'];
$mySuppliersCompany = $data_set4['company'];
$mySuppliersEmail = $data_set4['email'];

//Shipper Info
$idquery5 = mysql_query("SELECT * FROM users WHERE id='$shipperID'");
$data_set5 = mysql_fetch_array($idquery5);
$myShippersUserName = $data_set5['username'];
$myShippersFirstName = $data_set5['first_name'];
$myShippersLastName = $data_set5['last_name'];
$myShippersCompany = $data_set5['company'];
$myShippersEmail = $data_set5['email'];


//Update Status in MASTER
//$sql = mysql_query("UPDATE master SET status='$newStatus' WHERE id='$orderID'");
//mysql_query($sql);


$idquery5a = mysql_query("SELECT * FROM users WHERE company='$_POST[element]'");
$data_set5a = mysql_fetch_array($idquery5a);
$rel1 = $data_set5a['id'];

$idquery5b = mysql_query("SELECT * FROM users WHERE company='$_POST[element2]'");
$data_set5b = mysql_fetch_array($idquery5b);
$rel2 = $data_set5b['id'];

$idquery5c = mysql_query("SELECT * FROM users WHERE company='$_POST[element3]'");
$data_set5c = mysql_fetch_array($idquery5c);
$rel3 = $data_set5c['id'];


//ADD PRODUCT
$sql3 = mysql_query("INSERT INTO relationships (id, name, buyers_id, suppliers_id, shippers_id) VALUES ('', 'New Relationship', '$rel1', '$rel2', '$rel3')");
mysql_query($sql3);

?>

<b>New Relationship Created!</b>
<p />
You have added a new relationship to the system.  
<p /><br />
<a href="/ots/relationships.php">Click here to go back...</a>