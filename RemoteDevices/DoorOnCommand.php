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
class DoorOnCommand implements Command {
    private $door;
    
    function __construct(Door $door) {
       $this->door = $door;
    }
    
    public function execute() {
        $this->door->open();
    }
    
    public function undo() {
        $this->door->close();
    }
}
