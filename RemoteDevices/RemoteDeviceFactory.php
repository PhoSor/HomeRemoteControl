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
    public static function create($vendorDeviceName) {
        $onCommandClassName = $vendorDeviceName . 'OnCommand';
        $offCommandClassName = $vendorDeviceName . 'OffCommand';
        
        $vendorDevice = new $vendorDeviceName();
        $onCommand = new $onCommandClassName($vendorDevice);
        $offCommand = new $offCommandClassName($vendorDevice);
        
        $device = new Device($vendorDevice, $onCommand, $offCommand);
        
        return $device;
    }
}
