<?php 

class MyClass{
    public $prop1 = "I am property."; 
    protected function getProperty(){ 
        return $this->prop1 . "<br>"; 
    } 
} 

class OtherClass extends MyClass{ 

    public function newMethod(){ 
        echo "I am new method from . " . _CLASS_ . "<br>"; 
    } 

    public function getProtected(){ 
        return $this->getProperty();
    } 

    public static function returnNumber(){ 
        return "13 <br>";
    } 
} 

$newObject = new OtherClass;
echo $newObject->getProtected();

otherClass::returnNumber();

?>