<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace RemoteDevices;

/**
 * Description of GarageOffCommand
 *
 * @author User
 */
class JacuzziOffCommand implements Command {
    private $jacuzzi;
    
    function __construct(Jacuzzi $jacuzzi) {
       $this->jacuzzi = $jacuzzi;
    }
    
    public function execute() {
        $this->jacuzzi->turnOff();
    }
    
    public function undo() {
        $this->jacuzzi->turnOn();
    }
}
