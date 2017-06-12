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
class GarageOffCommand implements Command {
    private $garage;
    
    function __construct(Garage $garage) {
       $this->garage = $garage;
    }
    
    public function execute() {
        $this->garage->close();
    }
    
    public function undo() {
        $this->garage->open();
    }
}
