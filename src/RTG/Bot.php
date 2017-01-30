<?php

namespace RTG;

use Discord\Discord;

/**
 * Description of Bot
 *
 * @author RTG
 */

abstract class Bot {
    
    protected $config;
    
    public function getConfig() {
        return $this->config;
    }
    
    public abstract function setup(Discord $discord);
    
    public abstract function getServices();
       
}