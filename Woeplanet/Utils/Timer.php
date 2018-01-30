<?php

namespace Woeplanet\Utils;

class Timer {
    private $last = NULL;

    public function __construct() {
        date_default_timezone_set('UTC');
    }

    public function elapsed() {
        $now = time();
        $elapsed = $now;
        if ($this->last != NULL) {
            $elapsed = ($now - $this->last);
        }

        $this->last = $now;
        return $elapsed;
    }

    public function seconds_to_time($seconds) {
        $dtf = new \DateTime("@0");
        $dtt = new \DateTime("@$seconds");
        return $dtf->diff($dtt)->format('%h hours, %i mins, %s secs');
    }
}

?>
