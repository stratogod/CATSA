<?
session_start();
if(isset($_SESSION["user"]))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>University of Missouri School of Medicine - Clinical Advising Tool For Students & Advisors - Users (Add)</title>
<link rel="stylesheet" type="text/css" href="../style.css" />
</head>
<body style="background-color: #FFFFFF; padding: 25px;">

<? include("db.php"); ?>

<h1>Add User</h1>
<p />

<?
   if (!isset($_POST["submit"]))
   {
?>
	  
<form action="add_user.php" method="post">
 
 <table style="font-family: Tahoma, Geneva, sans-serif; font-size: 11px;">
 <tr>
 <td width="160">Username:</td>
 <td><input type="text" NAME="username" VALUE="" size="30"></td>
 </tr>
 <tr>
 <td>Password:</td>
 <td><input type="password" name="password" value="" size="30"></td>
 </tr>
 <tr>
 <td>First Name:</td>
 <td><input type="text" name="first_name" value="" size="30"></td>
 </tr>
 <tr>
 <td>Last Name:</td>
 <td><input type="text" name="last_name" value="" size="30"></td>
 </tr>
 <tr>
 <td>Role:</td>
 <td><input type="text" name="role" value="" size="30">&nbsp;&nbsp;<span style="font-size: 10px;">Note: Only type values of (admin, buyer, supplier, or shipper)</span></td>
 </tr>
 <tr>
 <td>City:</td>
 <td><input type="text" name="city" value="" size="30"></td>
 </tr>
 <tr>
 <td>Address:</td>
 <td><input type="text" name="address" value="" size="30"></td>
 </tr>
 <tr>
 <td>Zip Code:</td>
 <td><input type="text" name="zip" value="" size="30"></td>
 </tr>
 <tr>
 <td>Interest:</td>
 <td><input type="text" name="interest" value="" size="30"></td>
 </tr>
 <tr>
 <td>Phone:</td>
 <td><input type="text" name="phone" value="" size="30"></td>
 </tr>
 <tr>
 <td>E-mail:</td>
 <td><input type="text" name="email" value="" size="30"></td>
 </tr>
 <tr>
 <td>Bio:</td>
 <td><textarea name="bio" value=""></textarea></td>
 </tr>
 <tr>
 <td>Notes:</td>
 <td><textarea name="notes" value=""></textarea></td>
 </tr>
 </table>
     
   <br />
   
      <input type="hidden" name="cmd" value="edit">   
      <input type="submit" name="submit" value="Save">
   
      </form>
      <br /><br />
<?

   }
   else

   {

	  $username = $_POST["username"];
	  $password = $_POST["password"];
	  $first_name = $_POST["first_name"];
	  $last_name = $_POST["last_name"];
	  $role = $_POST["role"];
	  $city = $_POST["city"];
	  $address = $_POST["address"];
	  $zip = $_POST["zip"];
	  $interest = $_POST["interest"];
	  $phone = $_POST["phone"];
	  $email = $_POST["email"];
	  $bio = $_POST["bio"];
	  $notes = $_POST["notes"];
	 

 //ADD USER
$sql3 = mysql_query("INSERT INTO users (id, username, password, first_name, last_name, role, email, city, address, zip, interest, phone, bio, notes) VALUES ('', '$username', '$password', '$first_name', '$last_name', '$role', '$email', '$city', '$address', '$zip', '$interest', '$phone', '$bio', '$notes')");
mysql_query($sql3);
	


      $result = mysql_query($sql);
?>

<b>User Added Successfully</b>
<p />
You have added a new User to the system. 
<p /><br />
<a href="javascript:window.close();">Click here to close window</a>
<br />


<br /><br /><br /><br />
   
   <? }} ?>