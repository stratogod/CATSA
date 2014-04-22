<?
session_start();
if(isset($_SESSION["user"]))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Documents - University of Missouri School of Medicine - Clinical Advising Tool For Students & Advisors</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script type="text/javascript" src="/js/jqtransformplugin/jquery.jqtransform.js"></script>
<link rel="stylesheet" type="text/css" href="/js/jqtransformplugin/jqtransform.css" />
<? include("inc/db.php"); ?>
<? include("inc/top.php"); ?>



</head>
<body>
<object> 
	<map name="image_map" id="image_map"> 
	  <area coords="540,86,698,119" href="http://medicine.missouri.edu/" onclick="window.open(this.href); return false;" alt="University of Missouri School of Medicine" /> 
	</map>
</object>

<div id="mainContainer">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <tr>
      <td valign="top" colspan="2"><a href="/"><img src="images/main-banner-new2b.jpg" alt="Clinical Advising Tool for Students &amp; Advisors (CATSA)" border="0" usemap="#image_map" /></a></td>
    </tr>
    <tr>
      <td><? if(isset($_SESSION["user"])) { ?>
        <? include("inc/menu.php"); ?>
        <? } else { ?>
        <? include("inc/menu2.php"); ?>
        <? } ?></td>
      <td><? include("inc/userinfo.php"); ?></td>
    </tr>
    <tr>
      <td valign="top" width="600">
      
      <div id="mainContent"> 
        <!-- printer:start -->
        <!-- START CONTENT -->
        <h1>Documents</h1>
        Below is a list of all of your documents.  Either provided to you by your advisor or uploaded by yourself.  You can add new documents by using the upload form below.
        <? if ($userNotes == "demo") { ?>
        <br /><br />
        <span style="color: #ff0000;"><b>Note:</b> This account is not linked to a particular student and is not in any relationship.  This is a <b>DEMO</b> account and has access to view all students.  You can add to already existing advisor notes, documents, etc... however, a student will not be able to directly interact with you.</span>
        <? } ?>
        <p />
        <br />
        <table width="550" border="1" class="styled">
          <thead>
          <tr>
            <th><b>File Name</b></th>
            <th><b>Type</b></th>
            <th><b>Size</b></th>
            <th><b>Provided To</b></th>
            <th><b>From</b></th>
            <th><b>Last Updated</b></th>
            <? if($userRole == "student") { ?><th><b>Delete</b></th><? } ?>
          </tr>
          </thead>
          
          <?
		  
		  

 function byteFormat($bytes, $unit = "", $decimals = 2) {
	$units = array('B' => 0, 'KB' => 1, 'MB' => 2, 'GB' => 3, 'TB' => 4, 
			'PB' => 5, 'EB' => 6, 'ZB' => 7, 'YB' => 8);
 
	$value = 0;
	if ($bytes > 0) {
		// Generate automatic prefix by bytes 
		// If wrong prefix given
		if (!array_key_exists($unit, $units)) {
			$pow = floor(log($bytes)/log(1024));
			$unit = array_search($pow, $units);
		}
 
		// Calculate byte value by prefix
		$value = ($bytes/pow(1024,floor($units[$unit])));
	}
 
	// If decimals is not numeric or decimals is less than 0 
	// then set default value
	if (!is_numeric($decimals) || $decimals < 0) {
		$decimals = 2;
	}
 
	// Format output
	return sprintf('%.' . $decimals . 'f '.$unit, $value);
  }


		$queryDocuments = "SELECT * FROM documents WHERE providedTo='$username' or providedFrom='$username'";
		$resultDocuments = mysql_query($queryDocuments); 
		if ($resultDocuments) {
			while ($row = mysql_fetch_array ($resultDocuments)) {				
?>
          <tr>
            <td><a href="uploads/<? echo $row['1']; ?>"><? echo $row['1']; ?></a></td>
            <td><? echo $row['2']; ?></td>
            <td>
			


<? echo byteFormat($row[3], "KB"); ?></td>
            <td><? echo $row['5']; ?></td>
            <td><? echo $row['6']; ?></td>
            <td><? echo $row['8']; ?></td>
            <? if($userRole == "student") { ?><td><a href="javascript:void(0)" onclick="window.open('inc/delete_document.php?cmd=del&id=<? echo $row[0]; ?>','linkname','height=550, width=650,scrollbars=yes')"><span style="color: #ff0000; font-size: 10px;">Delete</span></a></td><? } ?>
          </tr>
          <? } } ?>
        </table>
        <br />
        <br />
        <br />
        <h3>Add Document</h3>
        <br />
        <form enctype="multipart/form-data" action="inc/add_document.php" method="post" name="changer" class="jqtransform">
          <table>
            <tr>
              <td>Share With:</td>
              <td><select name="sentTO">
                  <? 

if ($userNotes == "demo") { 
$query123 = "SELECT * FROM relationships";
		} else {
$query123 = "SELECT * FROM relationships WHERE ". $userRole ."_id='$userID' AND active='1'";
		}
  $result123 = mysql_query($query123);
  if ($result123) {
    while ($row2 = mysql_fetch_array ($result123)) {
		
	
		
		$query666 = mysql_query("SELECT * FROM users WHERE id='$row2[2]'");
		$data_set666 = mysql_fetch_array($query666);
		$user666 = $data_set666['username'];
		
		$query777 = mysql_query("SELECT * FROM users WHERE id='$row2[3]'");
		$data_set777 = mysql_fetch_array($query777);
		$user777 = $data_set777['username'];
		
	
	?>
                  
        		  <option value="<? echo $user666; ?>">                  
				  <? if ($userRole !=  "student") { echo $user666; } else { echo('ME'); } ?>
                  </option>
                  <? if ($userNotes == "demo") { ?>                  
                  <? } else { ?>
                  <option value="<? echo $user777; ?>">
                  <? if ($userRole !=  "adviser") { echo $user777; } else { echo('ME'); } ?>
                  </option>
                  <? } ?>
                  <? } } ?>
                  
                </select>
                <? 



  $query456 = mysql_query("SELECT * FROM master WHERE ". $userRole ."='$userID'");
  $data_set456 = mysql_fetch_array($query456);
  $relationship_id = $data_set456['id'];
  ?></td>
            </tr>
            <tr>
            <td><br /></td>
            </tr>
            <tr>
              <td width="246"><input type="hidden" name="MAX_FILE_SIZE" value="5000000">
                <input type="hidden" name="relationship_id" value="<? echo $relationship_id; ?>" />
                <input name="userfile" type="file" id="userfile"></td>
              <td width="80"><input name="upload" type="submit" class="box" id="upload" value=" Upload "></td>
            </tr>
          </table>
          <p />
        </form>
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
              
          <br />
        </div></td>
      <td valign="top"><? include("inc/right-steps.php"); ?></td>
    </tr>
  </table>
  <? include("inc/footer.php"); ?>
  </div>
  
<?
} else {

header("location: login.php");
}
?>

<script type="text/javascript">
$(function() {
    //find all form with class jqtransform and apply the plugin
    $("form.jqtransform").jqTransform();
});
</script>


</body>
</html>