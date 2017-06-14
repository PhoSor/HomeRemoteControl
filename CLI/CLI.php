<?php

namespace CLI;

/**
 * Description of CLICommands
 *
 * @author User
 */



class CLI {
    
    private $cmdNames;
    private $shortopt;
    private $longopts;
    private $usage;
    private $options;
            
    function __construct() {
        $this->cmdNames = [];
        $this->shortopt = '';
        $this->longopts = [];
        $this->usage = '';
        $this->options = [];
    }
    
    public function command(CLIHandler $handler) {
        $name = $handler->getName();
        $shortopt = $handler->getShortOpt();
        $longopt = $handler->getLongOpt();
        
        if (in_array($name, $this->cmdNames)) {
            throw new AlreadyExistException;
        } else {
            $this->cmdNames[$name] = $handler;
        }
        
        if (in_array($longopt, $this->longopts)) {
            throw new AlreadyExistException;
        } else {
            $this->longopts[] = $longopt;
        }
        
        $this->shortopt .= $shortopt;
    }
    
    public function parse() {
        $this->options = getopt($this->shortopt, $this->longopts);
    }
    
    public function perform() {
        // reset($this->options);
        $name = key($this->options);
        
        if ($name) {
            var_dump($name);
            $this->cmdNames[$name]->perform($this->options);            
        } else {
            $this->usage(); 
        }
    }
    
    public function usage($usage = NULL) {
        if ($usage) {
            $this->usage = $usage;
        } else {
            echo $this->usage;            
        }
    }
}
