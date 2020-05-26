<?php 
class Product{ 

    public $title = "";
    public $price = "";

    function __construct($title, $price){ 
        $this->title = $title; 
        $this->price = $price; 
    }
    function getInfo(){ 
        return "Title: " . $this->title . ", price: " . $this->price;
    }

    public function __destuct(){
        echo "<hr>";
    }

    public function __toString(){
        return "Ovo je objekat <br>";
    }
}

class Smartphone extends Product{
    public $serial = ""; 
    public function __construct($title, $price, $serial){ 
        parent:: __construct($title, $price); 
        $this->serial = $serial; 
    } 

    public function getInfo(){ 
        return parent::getInfo() . ", serial: " . $this->serial; 
    }
}

$xiaomi = new Smartphone("Redmi Note 5 Plus", 400, "KASDK4252893LJJSFGN"); 
echo $xiaomi->getInfo(); 
echo "<br>"; 

class Tablet extends Product{} 
$samsung = new Tablet("Tab 4", 1000); 
echo $samsung->getInfo(); 
echo "<br>"; 

class Tv extends Product{} 
$sony = new Tv("Bravia", 1500); 
echo $sony->getInfo(); 

echo $xiaomi;
echo $samsung;
echo $sony;

?>