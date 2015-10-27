<?php 

class StockManager
{
	private $_db;
	
	function __construct() {
		$this->db = new Db();
	}

  	public function getStockItem($itemId)
  	{  
    	// retrieve one item from stock table
    	
    	if(!is_numeric($itemId)) return FALSE;

    
      	$id = $this->db -> quote($itemId);
      	$results = $this->db -> select("SELECT * from stock where id = $id limit 1");
      
	    foreach($results as $result){
			$item = new StockItem();
	        $item->hydrate($result);
	      }
      
		return $item;
    
	}
  
	public function getAllStock()
	{
  		//retrieve all items from stock table
    
		$stock = array();       
      	$results = $this->db -> select("SELECT * from stock");
      
		foreach($results as $result)
		{
			$item = new StockItem();
	        $item->hydrate($result);
        	$stock[] = $item;
      }
            
      return $stock;    
      
	}
	
	public function save($stockItem)
	{
    
    	if ($stockItem->getID()) 
    	{
			$this->_update($stockItem);
    	} 
    	else 
    	{
      		$this->_add($stockItem);
		}
  }
  
  private function _add($user){
    
    $name = $this->db -> quote($user->getName());
    $wood = $this->db -> quote($user->getWood());
    $dateCreated = $this->db -> quote($user->getDateCreated());
    $dateSold = $this->db -> quote($user->getDateSold());
    
    $results = $this->db -> query("insert into stock (name, wood, dateCreated, dateSold) values ($name, $wood, $dateCreated, $dateSold);");

  }
  
  private function _update($item){
    
    $name = $this->db -> quote($item->getName());
    $wood = $this->db -> quote($item->getWood());
    $dateCreated = $this->db -> quote($item->getdateCreated());   
     
    if($item->getDateSold()){
      $dateSold = $this->db -> quote($item->getDateSold());
    } else {
      $dateSold = '';
    }

    if(!empty($dateSold)){
      $results = $this->db -> query("update stock set name=$name, wood=$wood, dateCreated=$dateCreated, dateSold=$dateSold where id = $id;");  
    } else {
      $results = $this->db -> query("update stock set name=$name, wood=$wood, dateCreated=$dateCreated where id = $id;");
    }

  }
  
  public function delete($arg){
    
    if(!is_numeric($arg)) return FALSE;
    
      $id = $this->db -> quote($arg);
      $results = $this->db -> query("DELETE from users where id = $id");
  }
  
}

