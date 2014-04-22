<div id="userInfo">
<?
if(isset($_SESSION["user"]))
{
?>
<? 
if($_SESSION["user"] == "Guest") {
?>
<b>Guest</b>
<? } else { ?>
<b><? echo $userName; ?></b>
<? } ?>
&nbsp;&nbsp;|&nbsp;&nbsp;
<? echo $userRole; ?>
&nbsp;&nbsp;&nbsp;&nbsp;
<b>(<a href="/inc/logout.php">logout</a>)</b>
<? } else { ?>
<b>Guest</b>
&nbsp;&nbsp;|&nbsp;&nbsp;
Unregistered
&nbsp;&nbsp;&nbsp;&nbsp;
<b>(<a href="main.php">login</a>)</b><br />
<? } ?>
<? if (($userRole == "adviser") && ($_SESSION["user"] != "Guest")) { ?>
<?
$query222 = mysql_query("SELECT * FROM relationships WHERE id='$currentRel'");
$data_set222 = mysql_fetch_array($query222);
$studentName = $data_set222['1'];
?>
<br />
<span style="font-size: 9px; position: relative; top: 4px; color: #666;">Current Student: <? echo $studentName; ?></span>
<? } ?>
</div>
<div style="clear: both;"></div>