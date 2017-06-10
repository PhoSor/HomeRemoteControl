<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace HomeRemoteControl;

/**
 * Description of UndoStack
 *
 * @author User
 */
class UndoStack {
    const MAX_UNDO_COMMANDS = 2;
    
    private $undoCommands;
    
    function __construct() {
        $this->undoCommands = new \SplStack();
    }

    public function isEmpty() {
        return $this->undoCommands->isEmpty();
    }
    
    public function push(Command $command) {
        if (!($command instanceof NoCommand)) {
            $this->undoCommands->push($command);
        }
        if ($this->undoCommands->count() > self::MAX_UNDO_COMMANDS) {
            echo get_class($this->undoCommands->shift()) . " forgot\n";
        }
    }

    public function pop() {
        return $this->undoCommands->pop();
    }
    
    public function count() {
        return $this->undoCommands->count();
    }
}
