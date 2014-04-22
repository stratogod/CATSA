<?
$page = basename($_SERVER['REQUEST_URI']);
?>
<div id="menu">     
<ul id="menuBar" style="background-color: #edb210;">	
<? if ($page == "index.php" || $page == "") { ?><li class="firstLevel2 active"><? } else { ?><li class="firstLevel"><? } ?><a href="index.php" class="topMenus">Welcome</a></li>
</ul>
</div>
<br />