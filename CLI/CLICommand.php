<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CLI;

/**
 *
 * @author User
 */
interface CLICommand {
    public function perform($options);
}
