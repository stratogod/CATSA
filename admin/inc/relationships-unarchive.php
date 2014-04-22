<?
session_start();
if(isset($_SESSION["user"]))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Clinical Advising Tool For Students & Advisors - Unarchive Relationship</title>
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

<h1>Activate Relationship</h1>
<?
if($_GET["cmd"]=="unarchive" || $_POST["cmd"]=="unarchive")
{
   if (!isset($_POST["submit"]))
   {
      $id = $_GET["id"];
      $sql = "SELECT * FROM relationships WHERE id=$id";
      $result = mysql_query($sql);        
      $myrow = mysql_fetch_array($result);
      ?>
      
      Are you sure you want to activate <strong><? echo $myrow["name"] ?> (<? echo $myrow["id"] ?>)</strong>?  This will unarchive the relationship and make it active again in the system. All progress and data will be restored to the respective users.
      <br /><br />
	  
      <form action="relationships-unarchive.php" method="post" class="jqtransform">
      <input type=hidden name="id" value="<?php echo $myrow["id"] ?>">
   
      <input type="hidden" name="cmd" value="unarchive">   
      <input type="submit" name="submit" value="Activate" style="font-size: 18px;">
   
      </form>
      
<?

   }
   else

   {

    $id = $_POST["id"];
	
	$sql = "UPDATE relationships SET active='1' WHERE id=$id";
	mysql_query($sql); 
	
	

   ?>



<b>Relationship Activated!</b>
<p />
You have activated the relationship again in the system.  
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