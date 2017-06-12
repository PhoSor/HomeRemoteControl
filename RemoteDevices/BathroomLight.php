<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace RemoteDevices;

/**
 * Description of BathroomLight
 *
 * @author User
 */
class BathroomLight {
    public function on(): void {
        echo "Bathroom Light On\n";
    }
    
    public function off(): void {
        echo "Bathroom Light Off\n";
    }
}
