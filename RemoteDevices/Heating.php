<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace RemoteDevices;

/**
 * Description of Heating
 *
 * @author User
 */
class Heating {
    public function warmUp(): void {
        echo "Heating Up\n";
    }
    
    public function warmDown(): void {
        echo "Heating Down\n";
    }
    
    public function warmMax(): void {
        echo "Heating Max\n";
    }
    
    public function off(): void {
        echo "Heating Off\n";
    }
}
