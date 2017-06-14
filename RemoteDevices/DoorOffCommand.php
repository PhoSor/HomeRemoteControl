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
class DoorOffCommand implements Command {
    private $door;
    
    function __construct(Door $door) {
       $this->door = $door;
    }
    
    public function execute() {
        $this->door->close();
    }
    
    public function undo() {
        $this->door->open();
    }
}
