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
<link rel="stylesheet" type="text/css" href="../../css/style.css" />
<link rel="stylesheet" type="text/css" href="/js/jqtransformplugin/jqtransform.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="/js/jqtransformplugin/jquery.jqtransform.js"></script>
<style>
html { background-color: #fff; }
</style>
</head>
<body style="background-color: #FFFFFF; padding: 10px; color: #000;">

<? include("../../inc/db.php"); ?>
<? include("../../inc/top.php"); ?>

<h1>Delete User</h1>
<?
if($_GET["cmd"]=="del" || $_POST["cmd"]=="del")
{
   if (!isset($_POST["submit"]))
   {
      $id = $_GET["id"];
      $sql = "SELECT * FROM users WHERE id=$id";
      $result = mysql_query($sql);        
      $myrow = mysql_fetch_array($result);
      ?>
      
      Are you sure you want to delete <? echo $myrow["first_name"] ?> <? echo $myrow["last_name"] ?> (<? echo $myrow["username"] ?>)?  This will completely remove the user from the system, including all saved progress.
      <br /><br />
	  
      <form action="users-delete.php" method="post" class="jqtransform">
      <input type=hidden name="id" value="<?php echo $myrow["id"] ?>">
   
      <input type="hidden" name="cmd" value="del">   
      <input type="submit" name="submit" value="Delete" style="font-size: 18px;">
   
      </form>
      
<?

   }
   else

   {

	  $id = $_POST["id"];
	

    $sql = "DELETE FROM users WHERE id=$id";
	mysql_query($sql); 
	
	if($myrow["role"] == "student") { 	
	$sql2 = "DELETE FROM relationships WHERE student_id=$id";
	mysql_query($sql2); 
		
	$sql3 = "DELETE FROM master WHERE student=$id";
	mysql_query($sql3); 
	
	$sql4 = "DELETE FROM s_cv,s_early,s_electives,s_eras,s_integrated,s_interviews,s_letters,s_military,s_mspe,s_nrmp,s_personal,s_residency WHERE student_id=$id";
	mysql_query($sql4); 	
	} 
	
	if($myrow["role"] == "adviser") { 
	$sql2 = "DELETE FROM relationships WHERE adviser_id=$id";
	mysql_query($sql2); 
		
	$sql3 = "DELETE FROM master WHERE adviser=$id";
	mysql_query($sql3); 
	
	$sql4 = "DELETE FROM s_cv,s_early,s_electives,s_eras,s_integrated,s_interviews,s_letters,s_military,s_mspe,s_nrmp,s_personal,s_residency WHERE adviser_id=$id";
	mysql_query($sql4); 
	}
	

   ?>



<b>User Deleted!</b>
<p />
You have deleted a user account information in the system.  
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