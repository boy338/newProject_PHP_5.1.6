<?php

class Autoload {

    public function __construct() {
	spl_autoload_register(array($this, 'load'));
    }

    private function load($class) {
	echo 'Trying to load '.$class.' via '. __METHOD__. "()\n";
	include $class.".php";
    }

}
