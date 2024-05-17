<?php 
    require_once('menu.php');

    class Food extends Menu {
        private $spiciness;

        public function __construct($name, $price, $image, $spiciness = 'tidak pedas') {
            parent::__construct($name, $price, $image);
            $this->spiciness = $spiciness;
        
        }

        public function getSpiciness() {
            return $this->spiciness;
        }
    }
?>