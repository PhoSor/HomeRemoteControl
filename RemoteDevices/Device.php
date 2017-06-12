<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace RemoteDevices;

/**
 * Description of Device
 *
 * @author User
 */
class Device {
    protected $name;
    protected $onCmd;
    protected $offCmd;
    
    public function __construct($name, $onCmd, $offCmd) {
        $this->name = $name;
        $this->onCmd = $onCmd;
        $this->offCmd = $offCmd;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getOn() {
        return $this->onCmd;
    }
    
    public function getOff() {
        return $this->offCmd;
    }
}
