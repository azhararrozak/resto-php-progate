<?php

class Menu {
  protected $name;
  protected $price;
  protected $image;
  private $orderCount = 0;
  protected static $count = 0;
  
  public function __construct($name, $price, $image) {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
    self::$count++;
  }
  
  public function hello() {
    echo 'Saya adalah '.$this->name;
  }

  //Getter Functions
  public function getName() {
    return $this->name;
  }

  public function getImage() {
    return $this->image;
  }

  public function getOrderCount() {
    return $this->orderCount;
  }

  public function getTaxIncludedPrice() {
    return round( $this->price * 1.0725, 2);
  }

  public function getTotalPrice() {
    return $this->getTaxIncludedPrice() * $this->orderCount;
  }

  public static function getCount() {
    return self::$count;
  }

  //Setter Functions
  public function setOrderCount($orderCount) {
    $this->orderCount = $orderCount;
  }

  

}

?>