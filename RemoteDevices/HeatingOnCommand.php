<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace RemoteDevices;

/**
 * Description of GarageOnCommand
 *
 * @author User
 */
class HeatingOnCommand implements Command {
    private $heating;
    
    function __construct(Heating $heating) {
       $this->heating = $heating;
    }
    
    public function execute() {
        $this->heating->warmMax();
    }
    
    public function undo() {
        $this->heating->off();
    }
}
