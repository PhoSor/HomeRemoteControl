<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace RemoteDevices;

/**
 * Description of RemoteDeviceFactory
 *
 * @author User
 */
class RemoteDeviceFactory {
    public static function create($name) {
        $device = null;
        $remoteDevice = null;
        $onCmd = null;
        $offCmd = null;
        
        switch ($name) {
            case 'BathroomLight':
                $remoteDevice = new BathroomLight();
                $onCmd = new BathroomLightOnCommand($remoteDevice);
                $offCmd = new BathroomLightOffCommand($remoteDevice);
                $device = 
                    new BathroomLightDevice($name, $onCmd, $offCmd);
                break;
            case 'Garage':
                $remoteDevice = new Garage();
                $onCmd = new GarageOnCommand($remoteDevice);
                $offCmd = new GarageOffCommand($remoteDevice);
                $device = 
                    new GarageDevice($name, $onCmd, $offCmd);
                break;
            default:
                break;
        }
        
        return $device;
    }
}
