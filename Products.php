<?php
    class Products{
        private $name;
        private $description;
        private $price;
        private $srp;
    
        function setName($name){
            $this->name = $name;
        }
        function setDescription($description){
            $this->description = $description;
        }
        function setPrice($price){
            $this->price = $price;
        }
        
        function getName(){
            return $this->name;
        }
        function getDescription(){
            return $this->description;
        }
        function getPrice(){
            return $this->price;
        }
        function computeSRP() {
            return $this->price * 1.5;
        }
    }

?>