<?php

    interface Vrata{
        public function openDoor($side);
        public function closeDoor($side);
        public function fixDoor($side);
    }

    interface Motor{
        public function startEngine();
        public function shutdownEngine();
        public function fixEngine();
    }

    abstract class PrevoznoSredstvo implements Vrata, Motor{
        public $volan = "";
        public $tockovi = "";
        public $kocnica = "";

        public abstract function upali();
        public abstract function ugasi();
        public abstract function kreni();
        public abstract function stani();
        public abstract function vozi();
    
        public function openDoor($side){}
        public function closeDoor($side){}
        public function fixDoor($side){}
    
        public function startEngine(){}
        public function shutdownEngine(){}
        public function fixEngine(){}
    }

    class Automobil extends PrevoznoSredstvo{
        public function upali(){
            $this->startEngine();
        }
        public function ugasi(){
            $this->shutdownEngine();
        }
        public function kreni(){
            echo "Automobil je krenuo.";
        }
        public function stani(){
            echo "Automobil je stao.";
        }
        public function vozi(){
            echo "Automobil se vozi.";
        }
    }

    $automobil = new Automobil("Audi");
    $automobil->upali();
    $automobil->kreni();
    
?>