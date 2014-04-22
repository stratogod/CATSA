<? include("db.php"); ?>
<? include("top.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>University of Missouri School of Medicine - CATSA - Document (Delete)</title>
<link rel="stylesheet" type="text/css" href="../style.css" />
</head>
<body style="background-color: #FFFFFF; padding: 25px;">

<h1>Delete Document</h1>
<p />

<?
if($_GET["cmd"]=="del" || $_POST["cmd"]=="del")
{
   if (!isset($_POST["submit"]))
   {
      $id = $_GET["id"];
      $sql = "SELECT * FROM documents WHERE id=$id";
      $result = mysql_query($sql);        
      $myrow = mysql_fetch_array($result);
      ?>
	  
      <form action="delete_document.php" method="post">
      <input type=hidden name="id" value="<?php echo $id; ?>">
 
 
Are you sure you want to delete the following document?  This action is unrecoverable.
<p />
<span style="color: #C00;"><b><? echo $myrow["name"]; ?></b></span>
<p />
<br />
     
  
   
      <input type="hidden" name="cmd" value="del">   
      <input type="submit" name="submit" value="Delete">
   
      </form>
      <br /><br />
<?

   }
   else

   {
	   
	 $id = $_POST["id"];

$sql3 = mysql_query("DELETE FROM documents WHERE id=$id LIMIT 1");
mysql_query($sql3);


?>

<div style="font-size: 14px; font-family: Tahoma, Geneva, sans-serif;">
<b>Document Deleted Successfully</b>
<p />
You have deleted the document from the system. 
<p /><br />
<a href="javascript:window.close();">Close Window</a>
</div>




   
   <? }} ?>