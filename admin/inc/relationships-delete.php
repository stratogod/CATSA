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

<h1>Delete Relationship</h1>
<?
if($_GET["cmd"]=="del" || $_POST["cmd"]=="del")
{
   if (!isset($_POST["submit"]))
   {
      $id = $_GET["id"];
      $sql = "SELECT * FROM relationships WHERE id=$id";
      $result = mysql_query($sql);        
      $myrow = mysql_fetch_array($result);
      ?>
      
      Are you sure you want to delete <strong><? echo $myrow["name"] ?> (<? echo $myrow["id"] ?>)</strong>?  This will completely remove the relationship from the system, including all saved progress.
      <br /><br />
	  
      <form action="relationships-delete.php" method="post" class="jqtransform">
      <input type=hidden name="id" value="<?php echo $myrow["id"] ?>">
   
      <input type="hidden" name="cmd" value="del">   
      <input type="submit" name="submit" value="Delete" style="font-size: 18px;">
   
      </form>
      
<?

   }
   else

   {

	  $id = $_POST["id"];
	

    $sql = "DELETE FROM relationships WHERE id=$id";
	mysql_query($sql); 
	
	$sql2 = "DELETE FROM s_cv WHERE relationship_id=$id";
	mysql_query($sql2);
	
	$sql3 = "DELETE FROM master WHERE relationship_id=$id";
	mysql_query($sql3);
	
	$sql4 = "DELETE FROM s_early WHERE relationship_id=$id";
	mysql_query($sql4);
	
	$sql5 = "DELETE FROM s_electives WHERE relationship_id=$id";
	mysql_query($sql5);
	
	$sql6 = "DELETE FROM s_eras WHERE relationship_id=$id";
	mysql_query($sql6);
	
	$sql7 = "DELETE FROM s_integrated WHERE relationship_id=$id";
	mysql_query($sql7);
	
	$sql8 = "DELETE FROM s_interviews WHERE relationship_id=$id";
	mysql_query($sql8);
	
	$sql9 = "DELETE FROM s_letters WHERE relationship_id=$id";
	mysql_query($sql9);
	
	$sql10 = "DELETE FROM s_military WHERE relationship_id=$id";
	mysql_query($sql10);
	
	$sql11 = "DELETE FROM s_mspe WHERE relationship_id=$id";
	mysql_query($sql11);
	
	$sql12 = "DELETE FROM s_nrmp WHERE relationship_id=$id";
	mysql_query($sql12);
	
	$sql13 = "DELETE FROM s_personal WHERE relationship_id=$id";
	mysql_query($sql13);
	
	$sql14 = "DELETE FROM s_residency WHERE relationship_id=$id";
	mysql_query($sql14);
	
	$sql15 = "DELETE FROM documents WHERE relationship_id=$id";
	mysql_query($sql15);
		
	

   ?>



<b>Relationship Deleted!</b>
<p />
You have deleted the relationship information in the system.  
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