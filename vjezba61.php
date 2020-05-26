<?php

    class Kalkulator{

        public $broj1;
        public $broj2;

        public function __construct($br1,$br2){
            $this->broj1=$br1;
            $this->broj2=$br2;
        }

        public function sabiranje(){
            $sabiranje = $this->broj1 + $this->broj2;
            return $sabiranje;
        }

        public function oduzimanje(){
            $oduzimanje = $this->broj1 - $this->broj2;
            return $oduzimanje;
        }

        public function mnozenje(){
            $mnozenje = $this->broj1 * $this->broj2;
            return $mnozenje;
        }

        public function dijeljenje(){
            $dijeljenje = $this->broj1 / $this->broj2;
            return $dijeljenje;
        }

        public function __toString(){
            return $this->broj1 . "+" . $this->broj2 . "=" . $this->sabiranje() . "<br>" . $this->broj1 . "-" . $this->broj2 . "=" . $this->oduzimanje() . "<br>" . $this->broj1 . "*" . $this->broj2 . "=" . $this->mnozenje() . "<br>" . $this->broj1 . "/" . $this->broj2 . "=" . $this->dijeljenje();
        }
    }

    $rjesenje = new Kalkulator(70,15);
    echo $rjesenje;

?>