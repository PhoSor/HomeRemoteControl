<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace RemoteDevices;

/**
 * Description of OnCommandFactory
 *
 * @author User
 */
class CommandsFactory {
    public function createOn($deviceName) {
        $command = null;
        
        switch ($deviceName) {
            case 'BathroomLight':
                $command = 
                    new \HomeRemoteControl\BathroomLightOnCommand();
                break;

            default:
                break;
        }
        
    }
    
    public function createOff($deviceName) {
        
    }
}
