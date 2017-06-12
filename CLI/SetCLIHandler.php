<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CLI;

/**
 * Description of SetCLIHandler
 *
 * @author User
 */
class SetCLIHandler implements CLIHandler {
    private $remoteControl;
    private $devices;
            
    function __construct(\HomeRemoteControl\RemoteControl $remoteControl, $devices) {
        $this->remoteControl = $remoteControl;
        $this->devices = $devices;
    }
    
    public function perform($options) {
        var_dump($options);
        $position = intval($options['p']);
        $deviceName = $options['d'];
        $device = $this->devices[$deviceName];
        //var_dump($device);
        
        if (is_int($position) && $device) {
            $this->remoteControl->set($position, $device->getOn(), $device->getOff());
        }
    }
    
    public function getName() {
        return "set";
    }
    
    public function getShortOpt() {
        return "p:d:";
    }
    
    public function getLongOpt() {
        return "set";
    }
}
