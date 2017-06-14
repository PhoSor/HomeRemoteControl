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
class HeatingOffCommand implements Command {
    private $heating;
    
    function __construct(Heating $heating) {
       $this->heating = $heating;
    }
    
    public function execute() {
        $this->heating->off();
    }
    
    public function undo() {
        $this->heating->warmMax();
    }
}
