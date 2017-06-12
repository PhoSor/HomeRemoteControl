<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace RemoteDevices;

/**
 * Description of Garage
 *
 * @author User
 */
class Garage {
    public function open(): void {
        echo "Garage Open\n";
    }
    
    public function close(): void {
        echo "Garege Close\n";
    }
}
