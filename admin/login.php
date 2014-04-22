<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>University of Missouri School of Medicine - Clinical Advising Tool For Students & Advisors - Login</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />


<? include("inc/db.php"); ?>
<? include("inc/top.php"); ?>

</head>


<body onload="document.loginForm.username.focus()">
<div id="mainContainer">
<table border="0" cellspacing="0" cellpadding="0" width="100%">
<tr>
    
	<td valign="top">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
		<tr>
		<td valign="top" style="background-color: #000000;"><a href="/"><img src="images/main_logo.jpg" alt="Clinical Advising Tool for Students & Advisors (CATSA)" border="0" /></a></td>
        <td valign="top"><a href="http://som.missouri.edu" target="_blank"><img src="images/top_right.jpg" alt="School of Medicine" border="0" /></a></td>
		</tr>
        <tr>
        <td><? if(isset($_SESSION["user"])) { ?><? include("inc/menu.php"); ?><? } else { ?><? include("inc/menu2.php"); ?><? } ?></td>
        <td><? include("inc/userinfo.php"); ?></td>
      </tr>
<tr>
<td valign="top" width="100%">

<div id="mainContent">
<table cellpadding="0" cellspacing="0" width="100%">
<tr>
<td valign="top" width="95%">
<!-- printer:start -->
<!-- START CONTENT -->





   <center>               <div id="contact-wrapper" style="position: relative; left: 130px;">
                 
                 
            <form method="post" action="inc/login.php" id="contactform" name="loginForm">
            <div>
              <label for="name"><strong>Pawprint:</strong></label>
              <input type="text" size="35" name="pawprint" id="pawprint" value="" class="required" />
            </div>
            <div>
              <label for="email"><strong>Password:</strong></label>

              <input type="password" size="35" name="password" id="password" value="" class="required email" />
            </div>
           
            <input type="submit" value="Login">

          </form>
        </div>
        
        </center>



<br /><br /><br /><br /><br />
</td>
</tr>
</table>
<!-- END CONTENT -->

</div>
</td>
</tr>
</table>

</td>
</tr>


<? virtual("inc/footer.php"); ?>


</body>
</html>