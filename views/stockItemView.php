<?php
	$pageTitle = "WebLab MVC Exercise - View Item";
	require_once 'common/header.php';
?>
<h2>View/Manage Individual Item</h2>
<ul>
  <li><?= $item->getID() ?></li>
  <li><?= $item->getName() ?></li>
  <li><?= $item->getWood() ?></li>
  <li><?= $item->getDateCreated() ?></li>
  <li><?= $item->getDateSold() ?></li>
</ul>

<a href='stockTracker.php' class='btn'>View All Stock</a> 
<a href='stockTracker.php?action=delete_item&target=<?= $item->getID() ?>' class='btn'>Delete This Item</a>
<a href='stockTracker.php?action=edit_item&target=<?= $item->getID() ?>' class='btn'>Edit This Item</a>


