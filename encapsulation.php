<?php
/**
 * Created by PhpStorm.
 * User: Saad-Nextdot
 * Date: 1/4/2018
 * Time: 2:34 PM
 */

class Person{
    private $name;

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}

$saad = new Person();
$saad->setName('Saad');

$myName = $saad->getName();
echo $myName;