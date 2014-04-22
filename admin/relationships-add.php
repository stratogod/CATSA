<? session_start(); ?>
<?
if(isset($_SESSION["user"]))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Clinical Advising Tool For Students &amp; Advisers - Admin Panel - Relationships</title>
<link rel="stylesheet" type="text/css" href="/css/style.css" />
<link rel="stylesheet" type="text/css" href="/js/jqtransformplugin/jqtransform.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="/js/jqtransformplugin/jquery.jqtransform.js"></script>
<? include("../inc/db.php"); ?>
<? include("../inc/top.php"); ?>


<script>
// tabcontent
	if($('#tabcontainer').size() > 0)
	{
		var prev = $('#sc1'),
			height = 0;
		$(prev).show();
		$('#tabbar a').parent().removeClass('selected');
		$('#tabbar a[href="#sc1"]').parent().addClass('selected');
		$('#tabbar a').unbind('click').click(function(e) {
			//e.preventDefault();
			var cid = $(this).attr('href');
			$(prev).hide(0, function() {
				prev = $(cid);
				$('#tabbar a').parent().removeClass('selected');
				$('a[href="'+cid+'"]').parent().addClass('selected');
				$(prev).addClass('selected').show();
			});
			if(cid.match(/\#sc/i)) {
				return false;
			}
		});

	}
	
</script>

</head>
<body>
<div id="mainContainer">
  <table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" width="650" style="background-color: #000000;"><a href="/admin/"><img src="/admin/images/admin-banner.jpg" alt="Clinical Advising Tool for Students &amp; Advisers (CATSA)" border="0" /></a></td>
    <td valign="top" width="300" style="background-color: #000000;"><a href="http://medicine.missouri.edu" target="_blank"><img src="/images/top_right.jpg" alt="School of Medicine" border="0" class="floatRight" /></a></td>
  </tr>
    <tr>
      <td>
        <? include("menu.php"); ?>
       </td>
      <td><? include("../inc/userinfo.php"); ?></td>
    </tr>
    <tr>
      <td valign="top" colspan="2">
      <div id="mainContent" style="width: 870px;">
          <!-- START CONTENT -->
          <ul id="tabbar">
<li><a href="relationships.php">View Relationships</a></li>
<li><a href="relationships-inactive.php">Inactive Relationships</a></li>
<li class="selected"><a href="relationships-add.php">New Relationship</a></li>
</ul>


          <h1>Add Relationship</h1>    
          <form enctype="multipart/form-data" action="inc/relationships-add.php" method="post" name="form1" class="jqtransform">
          <table>
          <tr>
          <td width="350">
          <strong>Relationship Name:</strong><br />
          <input type="text" name="relationship_name" />
          </td>
          </tr>
          <tr>
          <td><br /></td>
          </tr>
          <tr>
          <td width="350">
          <strong>Student:</strong><br />
          <select name="studentid"> 
		  <?
		  $query123 = "SELECT * FROM users WHERE id !=1 AND role='student' ORDER BY last_name";
		  $result123 = mysql_query($query123);
  	      if ($result123) {
    	  while ($row = mysql_fetch_array ($result123)) {			
		  ?>      
           <option value="<? echo $row[0]; ?>"><? echo $row[3]; ?> <? echo $row[4]; ?></option>		  
          <? }} ?>
          </select>
          </td>
          <td>
          <strong>Adviser:</strong><br />
          <select name="adviserid">
          <?
		  $query123 = "SELECT * FROM users WHERE id !=1 AND role='adviser' ORDER BY last_name";
		  $result123 = mysql_query($query123);
  	      if ($result123) {
    	  while ($row = mysql_fetch_array ($result123)) {			
		  ?>      
           <option value="<? echo $row[0]; ?>"><? echo $row[3]; ?> <? echo $row[4]; ?></option>		  
          <? }} ?>
          </select>
          </td>
          </tr>

          </table>
          <br /><br />
          <center>
          <input type="submit" value="Create Relationship" />
          </center>
          </form>
         
          <?
           if ($userRole == "adviser") {
		$query666 = mysql_query("SELECT * FROM s_cv WHERE student_id='$studentid'");
		} else { 
		$query666 = mysql_query("SELECT * FROM s_cv WHERE student_id='$userID'");
		}

		$data_set666 = mysql_fetch_array($query666);
		$cvID = $data_set666['0'];
		$cvActive = $data_set666['6'];
		$studentNotes = $data_set666['8'];
		$adviserNotes = $data_set666['9'];
		$cvDate = $data_set666['10'];
		
		$step1 = $data_set666['3'];
		$step2 = $data_set666['4'];
		$step3 = $data_set666['5'];
          
          
          ?>
          <br />
          <br />
        </div>
        <br />
        <br />
        <br />
        <br /></td>
    </tr>
  </table>
 
  <? virtual("/inc/footer.php"); ?>
  
  </div> 
  </div>
  
  <script type="text/javascript">
$(function() {
    //find all form with class jqtransform and apply the plugin
    $("form.jqtransform").jqTransform();
});
</script>
</body>
</html>
<?
} else {
header("location: http://catsa.missouri.edu/login.php");
}
?>