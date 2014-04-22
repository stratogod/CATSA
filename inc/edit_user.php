<?
session_start();
if(isset($_SESSION["user"]))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>University of Missouri School of Medicine - Clinical Advising Tool For Students & Advisors - Account (Edit)</title>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<link rel="stylesheet" type="text/css" href="/js/jqtransformplugin/jqtransform.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="/js/jqtransformplugin/jquery.jqtransform.js"></script>
<style>
html { background-color: #fff; }
</style>
</head>
<body style="background-color: #FFFFFF; padding: 10px; color: #000;">

<? include("db.php"); ?>
<? include("top.php"); ?>

<h1>Edit User</h1>
<?
if($_GET["cmd"]=="edit" || $_POST["cmd"]=="edit")
{
   if (!isset($_POST["submit"]))
   {
      $id = $_GET["id"];
      $sql = "SELECT * FROM users WHERE id=$id";
      $result = mysql_query($sql);        
      $myrow = mysql_fetch_array($result);
      ?>
	  
      <form action="edit_user.php" method="post" class="jqtransform">
      <input type=hidden name="id" value="<?php echo $myrow["id"] ?>">
 
 
 <table style="font-family: Tahoma, Geneva, sans-serif; font-size: 11px; color: #000;">
 <tr>
 <td width="175">First Name:</td>
 <td><input type="text" name="first_name" value="<? echo $myrow["first_name"] ?>" size="20"></td>
 </tr>
 <tr>
 <td><br /></td>
 </tr>
 <tr>
 <td>Last Name:</td>
 <td><input type="text" name="last_name" value="<? echo $myrow["last_name"] ?>" size="20"></td>
 </tr>
 <tr>
 <td><br /></td>
 </tr>
 <tr>
 <td>City:</td>
 <td><input type="text" name="city" value="<? echo $myrow["city"] ?>" size="20"></td>
 </tr>
 <tr>
 <td><br /></td>
 </tr>
 <tr>
 <td>Address:</td>
 <td><input type="text" name="address" value="<? echo $myrow["address"] ?>" size="20"></td>
 </tr>
 <tr>
 <td><br /></td>
 </tr>
 <tr>
 <td>Zip Code:</td>
 <td><input type="text" name="zip" value="<? echo $myrow["zip"] ?>" size="10"></td>
 </tr>
 <tr>
 <td><br /></td>
 </tr>
 <tr>
 <td>Interests:</td>
 <td><input type="text" name="interest" value="<? echo $myrow["interest"] ?>" size="30"></td>
 </tr>
 <tr>
 <td><br /></td>
 </tr>
 <tr>
 <td>Phone:</td>
 <td><input type="text" name="phone" value="<? echo $myrow["phone"] ?>" size="15"></td>
 </tr>
 <tr>
 <td><br /></td>
 </tr>
 <tr>
 <td>E-mail:</td>
 <td><input type="text" name="email" value="<? echo $myrow["email"] ?>" size="30"></td>
 </tr>
 <tr>
 <td><br /></td>
 </tr>
 <tr>
 <td>Bio:</td>
 <td><textarea name="bio" rows="5" cols="30"><? echo $myrow["bio"] ?></textarea></td>
 </tr>
 </table>
     
   <br />
   
      <input type="hidden" name="cmd" value="edit">   
     <center><input type="submit" name="submit" value="Save" style="font-size: 18px;"></center>
   
      </form>
      
<?

   }
   else

   {

	  $id = $_POST["id"];
	  $first_name = $_POST["first_name"];
	  $last_name = $_POST["last_name"];
	  $city = $_POST["city"];
	  $address = $_POST["address"];
	  $zip = $_POST["zip"];
	  $interest = $_POST["interest"];
	  $phone = $_POST["phone"];
	  $email = $_POST["email"];
	  $bio = $_POST["bio"];
	

    $sql = "UPDATE users SET first_name='$first_name',last_name='$last_name',email='$email',city='$city',address='$address',zip='$zip',interest='$interest',phone='$phone',bio='$bio' WHERE id=$id";
	mysql_query($sql); 

   ?>



<b>User Information Updated!</b>
<p />
You have updated user account information in the system.  
<p /><br />
<a href="javascript:window.close();">Click here to close window</a>
<br />


<br /><br /><br /><br />

<?
   }

?>


   
   <? }} ?>
   
     <script type="text/javascript">
$(function() {
    //find all form with class jqtransform and apply the plugin
    $("form.jqtransform").jqTransform();
});
</script>
</body>
</html>