
<?php
	$pageTitle = "WebLab MVC Exercise - View List";
	require_once 'common/header.php';
?>
<h2>View Item List</h2>

<table>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Wood</th>
		<th>Date Created</th>
		<th>Date Sold</th>
	</tr>
  <?php foreach($items as $item){ ?>
  <tr>
    <td><?= $item->getID() ?></td>
    <td><?= $item->getName() ?></td>
    <td><?= $item->getWood() ?></td>
    <td><?= $item->getDateCreated() ?></td>
    <td><?= $item->getDateSold() ?></td>
    <td><a href='stockTracker.php?action=view_item&target=<?= $item->getID() ?>' class='button'>view</a></td></td>
  </tr>
  <?php } ?>
</table>   
<br><br>
<a href='stockTracker.php?action=add_item' class='btn'>Add New item</a>
 
    
    
    
    
