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
<li><a href="users.php">View Users</a></li>
<li class="selected"><a href="users-add.php">Add User</a></li>
</ul>

          <h1>Add User</h1>
       		
          <p>Admin Notes:  Remember to immediately add this new user to a <a href="relationships-add.php">relationship.</a>
          <br /><br />

          
          <form enctype="multipart/form-data" action="inc/users-add.php" method="post" name="form1" class="jqtransform">
          <table>
          <tr>
          <td width="350">
          <strong>Pawprint:</strong><br />
          <input type="text" name="pawprint" />
          </td>
          <td>
          <strong>Role:</strong><br />
          <select name="role"> 
          <option value="---">Please Select</option>
          <option value="student">Student</option>
          <option value="adviser">Adviser</option>
		  </select>
          </td>
          </tr>
          <tr>
          <td><div style="height: 15px;"></div></td>
          </tr>
          <tr>
          <td>
          <strong>First Name:</strong><br />
          <input type="text" name="first_name" />
          </td>
          <td>
          <strong>Last Name:</strong><br />
          <input type="text" name="last_name" />
          </td>
          </tr>
          <tr>
          <td><div style="height: 15px;"></div></td>
          </tr>
          <tr>
          <td>
          <strong>Email:</strong><br />
          <input type="text" name="email" />
          </td>
          <td>
          <strong>City:</strong><br />
          <input type="text" name="city" />
          </td>
          </tr>
          <tr>
          <td><div style="height: 15px;"></div></td>
          </tr>
          <tr>
          <td>
          <strong>Address:</strong><br />
          <input type="text" name="address" />
          </td>
          <td>
          <strong>Zip Code:</strong><br />
          <input type="text" name="zip" />
          </td>
          </tr>
          <tr>
          <td><div style="height: 15px;"></div></td>
          </tr>
          <tr>
          <td>
          <strong>Interests:</strong><br />
          <input type="text" name="interest" />
          </td>
          <td>
          <strong>Phone:</strong><br />
          <input type="text" name="phone" />
          </td>
          </tr>
          <tr>
          <td><div style="height: 15px;"></div></td>
          </tr>
          <tr>
          <td>
          <strong>Year:</strong><br />
          <select name="year"> 
          <option value="---">Please Select</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
		  </select>
          </td>
          </tr>
          <tr>
          <td><div style="height: 15px;"></div></td>
          </tr>
          <tr>
          <td>
          <strong>Bio:</strong><br />
          <textarea rows="7" cols="30" name="bio" id="bio"></textarea>
          </td>
          <td>
          <strong>Notes:</strong><br />
          <textarea rows="7" cols="30" name="notes" id="notes"></textarea>
          </td>
          </tr>
          </table>
          <br /><br />
          <center>
          <input type="submit" value="Add User" />
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