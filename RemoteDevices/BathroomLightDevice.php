<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace RemoteDevices;

/**
 * Description of BathroomLightDevice
 *
 * @author User
 */
class BathroomLightDevice extends Device {
    public function __construct($name, $onCmd, $offCmd) {
        parent::__construct($name, $onCmd, $offCmd);
    }
    
    public function getName() {
        return parent::getName();
    }
    
    public function getOn() {
        return parent::getOn();
    }
    
    public function getOff() {
        return parent::getOff();
    }
}