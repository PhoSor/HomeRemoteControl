<?php

use CLI\CLI;
use HomeRemoteControl\RemoteControl;
use RemoteDevices\RemoteDeviceFactory;

spl_autoload_register(function($classname) {
    $ds = DIRECTORY_SEPARATOR;
    $dir = __DIR__;

    $className = str_replace('\\', $ds, $classname);

    $file = "{$dir}{$ds}{$className}.php";

    if (is_readable($file)) { require_once $file; }
});

/*
$control->undo();
$control->performOff(0);
$control->performOn(0);
$control->performOn(0);
$control->undo();
$control->undo();
$control->undo(); */
/* 
$devices = [
    RemoteDevicesFactory::create('BathroomLight'),
    RemoteDevicesFactory::create('Garage'),
]; */

$devices = [];
$devices['BathroomLight'] = RemoteDeviceFactory::create('BathroomLight');
$devices['Garage'] = RemoteDeviceFactory::create('Garage');

$control = RemoteControl::getInstance();

$cli = new CLI();

$cli->cmd(new \CLI\PrintCLIHandler($control, $devices));
$cli->cmd(new \CLI\SetCLIHandler($control, $devices));
//$cli->cmd('on', new CLI\OnCLIHandler());
//$cli->cmd('off', new CLI\OffCLIHandler());
//$cli->cmd('undo', new CLI\UndoCLIHandler());

$usage = "usage: php homecontrol.php --print (buttons | devices)
       php homecontrol.php --set (-p <num> -d <name>)
       php homecontrol.php --on (-p <num>)
       php homecontrol.php --off (-p <num>)
       php homecontrol.php --undo
       
--print       Вывести список устройств или текущее состояние кнопок пульта.
--set         Установить для позиции пульта с номером <num> устройство с именем <name>.
--on          Отправить команду on для позиции пульта с номером <num>.
--off         Отправить команду off для позиции пульта с номером <num>.
--undo        Отменить последнюю выполненную команду.

-p <num>      Определяет номер позиции пульта.
-d <name>     Определяет имя устройства.
";

$cli->usage($usage);

$cli->parse();

$cli->perform();