<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace RemoteDevices;

/**
 * Description of Jacuzzi
 *
 * @author User
 */
class Jacuzzi {
    public function turnOn(): void {
        echo "Jacuzzi On\n";
    }
    
    public function turnOff(): void {
        echo "Jacuzzi Off\n";
    }
    
    public function playMusic(): void {
        echo "Jacuzzi Music Plays\n";
    }
}
