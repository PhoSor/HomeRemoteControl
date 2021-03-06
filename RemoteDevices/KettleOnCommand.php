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
class KettleOnCommand implements Command {
    private $kettle;
    
    function __construct(Kettle $kettle) {
       $this->kettle = $kettle;
    }
    
    public function execute() {
        $this->kettle->on();
    }
    
    public function undo() {
        $this->kettle->off();
    }
}
