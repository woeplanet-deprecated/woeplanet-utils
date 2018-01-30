<?php

namespace Woeplanet\Utils;

abstract class TaskRunner {
    protected $timer;

    abstract public function run();

    protected function init_timer() {
        $this->timer = new Timer();
        $this->timer->elapsed();
    }

    protected function log($message) {
        echo "$message\n";
    }    
}

?>
