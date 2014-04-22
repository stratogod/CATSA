<?
$page = basename($_SERVER['REQUEST_URI']);
?>
<div id="menu">     
<ul id="menuBar" style="background-color: #edb210;">	
<? if ($page == "index.php") { ?><li class="firstLevel2 active"><? } else { ?><li class="firstLevel"><? } ?><a href="/admin/index.php" class="topMenus">Dashboard</a></li>
<? if ($page == "activity.php") { ?><li class="firstLevel2 active"><? } else { ?><li class="firstLevel"><? } ?><a href="/admin/activity.php" class="topMenus">Activity</a></li>
<? if ($page == "users.php" || $page == "users-add.php" || $page == "users-delete.php") { ?><li class="firstLevel2 active"><? } else { ?><li class="firstLevel"><? } ?><a href="/admin/users.php" class="topMenus">Users</a></li>
<? if ($page == "relationships.php" || $page == "relationships-add.php" || $page == "relationships-delete.php") { ?><li class="firstLevel2 active"><? } else { ?><li class="firstLevel"><? } ?><a href="/admin/relationships.php" class="topMenus">Relationships</a></li>
<? if ($page == "documents.php") { ?><li class="firstLevel2 active"><? } else { ?><li class="firstLevel"><? } ?><a href="/admin/documents.php" class="topMenus">Documents</a></li>
<? if ($page == "reports.php") { ?><li class="firstLevel2 active"><? } else { ?><li class="firstLevel"><? } ?><a href="/admin/reports.php" class="topMenus">Reports</a></li>
</ul>
</div>
<br />