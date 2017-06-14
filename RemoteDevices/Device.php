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
    protected $onCommand;
    protected $offCommand;
    
    public function __construct($name, $onCommand, $offCommand) {
        $this->name = $name;
        $this->onCommand = $onCommand;
        $this->offCommand = $offCommand;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getOn() {
        return $this->onCommand;
    }
    
    public function getOff() {
        return $this->offCommand;
    }
}
