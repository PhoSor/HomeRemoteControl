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
class UndoCLICommand implements CLICommand {
    private $remoteControl;
            
    function __construct(\HomeRemoteControl\RemoteControl $remoteControl) {
        $this->remoteControl = $remoteControl;
    }
    
    public function perform($options) {
        $this->remoteControl->undo();
    }
}
