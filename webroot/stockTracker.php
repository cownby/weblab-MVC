<?php
	$pageTitle = "WebLab MVC Exercise";
	require_once 'common/header.php';
?>


    <?php
      require_once('../lib/db.interface.php');
      require_once('../lib/db.class.php');
      require_once('../models/stockItem.class.php');
      require_once('../models/manager.abstract.php');
      require_once('../models/stockManager.class.php'); 
      

      $action = isset($_GET["action"])?$_GET["action"]:'';
      $target = isset($_GET["target"])?$_GET["target"]:'';
      $stockManager = new StockManager();
      
      switch ($action) {
        case 'view_item':
          $item = $stockManager->getStockItem($target);
          include('../views/stockItemView.php');
          break;    
         
        case 'delete_item':
          $stockManager->delete($target);
          header('Location: stockTracker.php');
          break;
          
        case 'add_item':
          $item = new StockItem();
          include('../views/stockAddEdit.php');
          break;         
          
        case 'edit_item':
          $item = $stockManager->getStockItem($target);
          include('../views/stockAddEdit.php');
          break;          
          
        case 'save_item':      
          $arr = array();
          $arr["id"] = isset($_GET["id"])?$_GET["id"]:'';
          $arr["name"] = isset($_GET["name"])?$_GET["name"]:'';
          $arr["wood"] = isset($_GET["wood"])?$_GET["wood"]:'';
          $arr["dateCreated"] = isset($_GET["dateCreated"])?$_GET["dateCreated"]:'2015-01-01';
          $arr["dateSold"] = isset($_GET["dateSold"])?$_GET["dateSold"]:'';
          $item = new StockItem();
          $item->hydrate($arr);
          $stockManager->save($item);
          header('Location: stockTracker.php');
          break;                 
            
        default:
          $items = $stockManager->getAllStock();
          include('../views/stockViewList.php');
          break;
      }
    ?>
  
</body>
</html>


