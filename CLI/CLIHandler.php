<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CLI;

/**
 *
 * @author User
 */
class CLIHandler {
    private $name;
    private $shortopt;
    private $longopt;
    private $cliCommand;
            
    function __construct($name, $shortopt, $longopt, $cliCommand) {
        $this->name = $name;
        $this->shortopt = $shortopt;
        $this->longopt = $longopt;
        $this->cliCommand = $cliCommand;
    }
    
    public function perform($options) {
        var_dump($options);
        $this->cliCommand->perform($options);
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getShortOpt() {
        return $this->shortopt;
    }
    
    public function getLongOpt() {
        return $this->longopt;
    }
}
