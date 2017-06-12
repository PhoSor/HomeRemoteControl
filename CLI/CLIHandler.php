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
interface CLIHandler {
    public function perform($options);
    public function getName();
    public function getShortOpt();
    public function getLongOpt();
}
