<?php

namespace HomeRemoteControl;

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$bathroomLight = new BathroomLight();

$bathroomLightOnCommand = new BathroomLightOnCommand($bathroomLight);
$bathroomLightOffCommand = new BathroomLightOffCommand($bathroomLight);

$control = RemoteControl::getInstance();

$control->set(0, $bathroomLightOnCommand, $bathroomLightOffCommand);

$control->printCommands();

$control->undo();
$control->performOff(0);
$control->performOn(0);
$control->performOn(0);
$control->undo();
$control->undo();
$control->undo();

