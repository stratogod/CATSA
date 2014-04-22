<?
session_start();
if(isset($_SESSION["user"]))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Clinical Advising Tool For Students & Advisors - Archive Relationship</title>
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

<h1>Archive Relationship</h1>
<?
if($_GET["cmd"]=="archive" || $_POST["cmd"]=="archive")
{
   if (!isset($_POST["submit"]))
   {
      $id = $_GET["id"];
      $sql = "SELECT * FROM relationships WHERE id=$id";
      $result = mysql_query($sql);        
      $myrow = mysql_fetch_array($result);
      ?>
      
      Are you sure you want to archive <strong><? echo $myrow["name"] ?> (<? echo $myrow["id"] ?>)</strong>?  This will archive the relationship from the system and may be retrieved later.  All progress and data will be saved.
      <br /><br />
	  
      <form action="relationships-archive.php" method="post" class="jqtransform">
      <input type=hidden name="id" value="<?php echo $myrow["id"] ?>">
   
      <input type="hidden" name="cmd" value="archive">   
      <input type="submit" name="submit" value="Archive" style="font-size: 18px;">
   
      </form>
      
<?

   }
   else

   {

    $id = $_POST["id"];
	
	$sql = "UPDATE relationships SET active='0' WHERE id=$id";
	mysql_query($sql); 
	
	

   ?>



<b>Relationship Archived!</b>
<p />
You have archived the relationship information in the system.  
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