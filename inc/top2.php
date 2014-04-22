<?
$username = $_SESSION["user"]; 


//Select User Data
$idquery = mysql_query("SELECT * FROM users WHERE username='$username'");
$data_set = mysql_fetch_array($idquery);
$userID = $data_set['id'];
$userRole = $data_set['role'];
$userFirstName = $data_set['first_name'];
$userEmail = $data_set['email'];
$userCity = $data_set['city'];
$userState = $data_set['state'];
$userCountry = $data_set['country'];
$userCompany = $data_set['company'];
$userMinQty = $data_set['min_qty'];



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

?>