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
class JalousieOnCommand implements Command {
    private $jalousie;
    
    function __construct(Jalousie $jalousie) {
       $this->jalousie = $jalousie;
    }
    
    public function execute() {
        $this->jalousie->up();
    }
    
    public function undo() {
        $this->jalousie->down();
    }
}
