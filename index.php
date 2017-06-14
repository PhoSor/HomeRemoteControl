<?php

use HomeRemoteControl\RemoteControl;

spl_autoload_register(function($classname) {
    $ds = DIRECTORY_SEPARATOR;
    $dir = __DIR__;

    $className = str_replace('\\', $ds, $classname);

    $file = "{$dir}{$ds}{$className}.php";

    if (is_readable($file)) { require_once $file; }
});


$vendorDeviceNames = [
    'BathroomLight',
    'Jacuzzi',
    'Heating',
    'Garage',
    'Door',
    'Jalousie',
    'Kettle',
];

$vendorDeviceFullNames = array_map(function($name) {
    return 'RemoteDevices\\' . $name;
}, $vendorDeviceNames);

$devices = array_map('RemoteDevices\RemoteDeviceFactory::create', $vendorDeviceFullNames);

$control = RemoteControl::getInstance();

$cli = new \CLI\CLI();

$printHandler = new \CLI\CLIHandler('print', '', 'print:',
        new \CLI\PrintCLICommand($control, $devices));
$setHandler = new \CLI\CLIHandler('set', 'p:d:', 'set',
        new \CLI\SetCLICommand($control, $devices));

$onHandler = new \CLI\CLIHandler('on', 'p:', 'on', new \CLI\OnCLICommand($control));
$offHandler = new \CLI\CLIHandler('off', 'p:', 'off', new \CLI\OffCLICommand($control));
$undoHandler = new \CLI\CLIHandler('undo', '', 'undo', new \CLI\UndoCLICommand($control));

$cli->command($printHandler);
$cli->command($setHandler);
$cli->command($onHandler);
$cli->command($offHandler);
$cli->command($undoHandler);

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