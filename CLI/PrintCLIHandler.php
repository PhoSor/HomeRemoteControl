<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CLI;

/**
 * Description of PrintCLIHandler
 *
 * @author User
 */
class PrintCLIHandler implements CLIHandler {
    private $remoteControl;
    private $devices;
            
    function __construct(\HomeRemoteControl\RemoteControl $remoteControl, $devices) {
        $this->remoteControl = $remoteControl;
        $this->devices = $devices;
    }
    
    public function perform($options) {
       var_dump($options);
        
        switch ($options['print']) {
            case 'buttons':
                $this->remoteControl->printCommands();
                break;
            case 'devices':
                print_r($this->devices);
                break;
            default:
                throw new \InvalidArgumentException;
        }
    }
    
    public function getName() {
        return "print";
    }
    
    public function getShortOpt() {
        return "";
    }
    
    public function getLongOpt() {
        return "print:";
    }
}
