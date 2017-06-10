<?php

namespace HomeRemoteControl;

/**
 * Description of RemoteControl
 *
 * @author User
 */
class RemoteControl {
    private static $instance;
    
    const MAX_SLOTS = 7;

    private $onCommands = [];
    private $offCommands = [];
    private $undoStack;


    public static function getInstance() {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }
    
    function __construct() {
        for ($i = 0; $i <= self::MAX_SLOTS; $i++) {
            $this->onCommands[$i]  = new NoCommand();
            $this->offCommands[$i]  = new NoCommand();
        }
        $this->undoStack = new UndoStack();
    }
    
    public function set(int $position, Command $onCommand, Command $offCommand): void {
        if ($position < 0 || $position > self::MAX_SLOTS) {
            throw new InvalidArgumentException;
        }
        
        $this->onCommands[$position] = $onCommand;
        $this->offCommands[$position] = $offCommand;
    }
    
    public function printCommands(): void {
        echo "[slot #] ON Commands : OFF Commands\n";
        echo "-----------------------------------\n";
        for ($i = 0; $i <= self::MAX_SLOTS; $i++) {
            echo "[slot ". $i ."] " . 
                    get_class($this->onCommands[$i]) . " : " .
                    get_class($this->offCommands[$i]) . "\n";
        }
    }
    
    protected function performCommand(Command $command) {
        $command->execute();
        $this->undoStack->push($command);
    }


    public function performOn(int $position): void {
        $this->performCommand($this->onCommands[$position]);
    }
    
    public function performOff(int $position): void {
        $this->performCommand($this->offCommands[$position]);
    }
    
    public function undo(): void {
        if (!$this->undoStack->isEmpty()) {
            echo 'Undo stack count is ' . $this->undoStack->count() . "\n";
            echo "Undoing: ";
            $this->undoStack->pop()->undo();
        } else {
            echo "Undo stack is empty\n";
        }
    }

}
