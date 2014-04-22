<? session_start(); ?>
<?
if(isset($_SESSION["user"]))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Clinical Advising Tool For Students &amp; Advisers - Admin Panel</title>
<link rel="stylesheet" type="text/css" href="/css/style.css" />
<link rel="stylesheet" type="text/css" href="/js/jqtransformplugin/jqtransform.css" />
<link href="css/pagination.css" rel="stylesheet" type="text/css" />
<link href="css/grey.css" rel="stylesheet" type="text/css" />
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
<li class="selected"><a href="users.php">View Users</a></li>
<li><a href="users-add.php">Add User</a></li>
</ul>

<h1>View Users</h1>
<p>Click on user's pawprint to edit user and view all fields</p>
<?

include_once("function2.php");
	
	$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
	$limit = 50;
	$startpoint = ($page * $limit) - $limit;
	
	//to make pagination
        $statement = "users";
	
$query = mysql_query("SELECT * FROM {$statement} LIMIT {$startpoint}, {$limit}");




	
	
?>
<table class="styled">
<thead>
<th>ID</th>
<th>Pawprint</th>
<th>Name</th>
<th>Role</th>
<th>Email</th>
<th>Phone</th>
<!--<th>Address</th>-->
<th>Notes</th>
<!--<th>Bio</th>-->
<!--<th>Notes</th>-->
<th>Last Login</th>
<th>---</th>
</thead>
<? 
if ($query) {
while ($data_set = mysql_fetch_array ($query)) {	
?>
<tr>
<td width="15" style="width: 15px;"><? echo $data_set['0']; ?></td>
<td width="30" style="width: 30px;"><a href="javascript:void(0)" onclick="window.open('inc/users-edit.php?cmd=edit&id=<? echo $data_set[0]; ?>','linkname','height=825, width=550,scrollbars=yes')"><? echo $data_set['1']; ?></a></td>
<td><? echo $data_set['3']; ?> <? echo $data_set['4']; ?></td>
<td width="30" style="width: 30px;"><? echo $data_set['5']; ?></td>
<td width="115" style="width: 115px;"><? echo $data_set['6']; ?></td>
<td width="100" style="width: 100px;"><? echo $data_set['11']; ?></td>
<!--<td><? //echo $data_set['8']; ?><br /><? //echo $data_set['7']; ?>, MO <? //echo $data_set['9']; ?></td>-->
<td width="120" style="width: 120px;"><? echo substr($data_set['13'],0,15); ?>...</td>
<!--<td><? //echo $data_set['12']; ?></td>-->
<!--<td><? //echo $data_set['13']; ?></td>-->
<td><? echo $data_set['16']; ?></td>
<td  width="20" style="width: 20px;" align="center"><a href="javascript:void(0)" onclick="window.open('inc/users-delete.php?cmd=del&id=<? echo $data_set[0]; ?>','linkname','height=250, width=550,scrollbars=yes')"><img src="/images/delete.jpg" alt="Delete User" /></a></td>
</tr>
<? }} ?>
</table>
<? echo pagination($statement,$limit,$page); ?>
   
<br />


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