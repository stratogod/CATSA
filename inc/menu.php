<?
$page = basename($_SERVER['REQUEST_URI']);
?>

<div id="menu">     
<ul id="menuBar" style="background-color: #edb210;">	
<? if ($page == "main.php") { ?><li class="firstLevel2 active"><? } else { ?><li class="firstLevel"><? } ?><a href="/main.php" class="topMenus">Dashboard</a></li>
<? if ($page == "status.php") { ?><li class="firstLevel2 active"><? } else { ?><li class="firstLevel"><? } ?><? if ($userRole == "admin") { ?><a href="activity.php" class="topMenus">Activity</a><? } else { ?><? } ?></li>
<? if ($page == "relationships.php") { ?><li class="firstLevel2 active"><? } else { ?><li class="firstLevel"><? } ?><a href="relationships.php" class="topMenus"><? if ($userRole == "adviser") { ?>My Students<? } else { ?>My Advisor<? } ?></a></li>
<? if ($userRole != "admin") { ?><? if ($page == "documents.php") { ?><li class="firstLevel2 active"><? } else { ?><li class="firstLevel"><? } ?><a href="/documents.php" class="topMenus">Documents</a></li><? } ?>
<? if ($page == "account.php") { ?><li class="firstLevel2 active"><? } else { ?><li class="firstLevel"><? } ?><a href="/account.php" class="topMenus">Account</a></li>
<? if ($page == "references.php") { ?><li class="firstLevel2 active"><? } else { ?><li class="firstLevel"><? } ?><a href="/references.php" class="topMenus">References</a></li>
<li class="firstLevel"><? if($userRole == "student") { ?><a href="mailto:<? echo $adviserEmail; ?>" class="topMenus">Email Advisor</a><? } else { ?><a href="mailto:<? echo $studentEmail; ?>" class="topMenus">Email Student</a><? } ?></li>
<? if ($userRole == "admin") { ?><? if ($page == "users.php") { ?><li class="firstLevel2 active"><? } else { ?><li class="firstLevel"><? } ?><a href="/users.php" class="topMenus">User Management</a></li><? } ?>
</ul>
</div>
<br />