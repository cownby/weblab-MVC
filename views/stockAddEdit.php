<?php
	$pageTitle = "WebLab MVC Exercise - Add/Edit Item";
	require_once 'common/header.php';
?>
<h2>Add or Edit Item</h2><table>

<form action="stockTracker.php" method="get">
  <input type="hidden" name="id" value="<?= $item->getID() ?>">
  <input type="hidden" name="action" value="save_item">
 
  <label>Name: </label>
  	<input type="text" name="name" value="<?= $item->getName() ?>"><br  />
  <label>Wood: </label>
  	<input type="text" name="wood" value="<?= $item->getWood() ?>"><br  />
  <label>DateCreated: </label>
  	<input type="text" name="dateCreated" value="<?= $item->getDateCreated() ?>"><br  />
  <label>DateSold: </label>
  	<input type="text" name="dateSold" value="<?= $item->getDateSold(); ?>"><br  />
  
  <br  />
  <input type="submit" value="Save"  class='btn'>
  
</form>
