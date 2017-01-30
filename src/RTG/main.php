<?php

namespace RTG;

use Discord\Discord;

/* file which makes your bot alive */

class main {
    
private $discord;

private $bot;

    public function __construct(Bot $bot) {
        $this->bot = $bot;
        
        $this->discord = new Discord($this->bot->getConfig());
        
        $this->discord->on("ready", function ($discord) {
            
            $this->bot->ready($discord);
            $this->setServices($this->bot->getServices());
            
        }); 
    }
    
    /* Boot Runner */
    
    public function run() {
        $this->discord->run();
    }
    
    private function setServices($services) {
        
        foreach($services as $service) {
            
            $this->bot->on($service->getEvent(), $service->getListener());
            
        }
         
    }

}