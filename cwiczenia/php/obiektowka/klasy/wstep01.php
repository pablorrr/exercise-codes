<?php

/**
 *
 */

class A {
    
    public $zmA;
    public static $zmB = "Zmienna statyczna";
    
    public function getA() {
        return $this->zmA;
    }
    
    public function getMethodA() {
        return $this->getA();
    }
    
    public function getSelfB() {
        return self::$zmB;
    }
    
    public function getStaticB() {
        return static::$zmB;
    }
    
    public function getStaticMethod() {
        return static::staticTest();
    }
    
    public static function staticTest() {
        return "test metody statycznej";
    }
    
}

$obiekt = new A;
$obiekt->zmA = "test zmiennej";

echo $obiekt->getA()."<br />";
echo $obiekt->getMethodA()."<br />";

echo $obiekt->getSelfB()."<br />";
echo $obiekt->getStaticB()."<br />";
echo $obiekt->getStaticMethod();

?>