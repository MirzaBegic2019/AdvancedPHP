<?php

class GetSet{
    private $name;

    public function __get($name){
        if($name !== 'name'){
            return " Svojstvo ne postoji! ";
        }

        return $this->$name;
    }

    public function __set($name, $value){
        if($name !== 'name' || empty($value)){
            return " Svojstvo ne postoji ili je poslana pogrešna vrijednost! ";
        }

        $this->$name = $value;
    }
}

$klasa = new GetSet();
$klasa->name = " Mirza ";
echo $klasa->name;

$klasa->prezime = " Begić ";
echo $klasa->prezime;

?>