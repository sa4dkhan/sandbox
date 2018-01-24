<?php
/**
 * Created by PhpStorm.
 * User: Saad-Nextdot
 * Date: 1/4/2018
 * Time: 2:52 PM
 */

class TV{

    private $isOn = TRUE;

    public function turnOn(){
        $this->isOn = "TV is Turned On";
    }

    public function turnOff(){
        $this->isOn = "TV is Turned Off";
    }
}

$tv = new TV();

$tv->turnOn();

$tv->turnOff();