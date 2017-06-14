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
class JalousieOffCommand implements Command {
    private $jalousie;
    
    function __construct(Jalousie $jalousie) {
       $this->jalousie = $jalousie;
    }
    
    public function execute() {
        $this->jalousie->down();
    }
    
    public function undo() {
        $this->jalousie->up();
    }
}
