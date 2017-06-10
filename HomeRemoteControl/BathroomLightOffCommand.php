<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace HomeRemoteControl;

/**
 * Description of BathroomLightOnCommand
 *
 * @author User
 */
class BathroomLightOffCommand implements Command {
    private $bathroomLight;
    
    function __construct(BathroomLight $bathroomLight) {
       $this->bathroomLight = $bathroomLight;
    }
    
    public function execute() {
        $this->bathroomLight->off();
    }
    
    public function undo() {
        $this->bathroomLight->on();
    }
}
