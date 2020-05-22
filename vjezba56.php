<?php

class Gradjevina{

    public $dužina = "";
    public $širina = "";

    public function __construct($dužina, $širina){
        $this->dužina = $dužina;
        $this->širina = $širina;
    }

    public function ispis(){
        echo "Moja građavina je duga " . $this->dužina . " i široka " . $this->širina. " metara." . "<br>";
    }
}

$kuća = new Gradjevina(20, 10);
$zgrada = new Gradjevina(30, 30);
$vikendica = new Gradjevina(5, 7);

$kuća->ispis();
$zgrada->ispis();
$vikendica->ispis();

?>