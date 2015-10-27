<?php

/**
 * Wood Turned Stock Object
 */
class StockItem{
  
  private $_id;
  private $_name;
  private $_wood;
  private $_dateCreated;
  private $_dateSold;

  public function getID(){return $this->_id;}
  public function setID($arg){$this->_id = $arg;}
  
  public function getName(){return $this->_name;}
  public function setName($arg){$this->_name = $arg;}
  
  public function getWood(){return $this->_wood;}
  public function setWood($arg){$this->_wood = $arg;}
  
  public function getdateCreated(){return $this->_dateCreated;}
  public function setdateCreated($arg){$this->_dateCreated = $arg;}
  
  public function getdateSold(){return $this->_dateSold;}
  public function setdateSold($arg){$this->_dateSold = $arg;}        
  
  public function hydrate($arr) {
    $this->setID(isset($arr["id"])?$arr["id"]:'');
    $this->setName(isset($arr["name"])?$arr["name"]:'');
    $this->setWood(isset($arr["wood"])?$arr["wood"]:'');
    $this->setDateCreated(isset($arr["dateCreated"])?$arr["dateCreated"]:'');
    $this->setDateSold(isset($arr["dateSold"])?$arr["dateSold"]:'');
  }
  
}

