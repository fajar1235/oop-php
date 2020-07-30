<?php

require_once 'animal.php';

    class Ape extends animal{

        public $teriak = 'Auuoooo'; 

        public function set_legs($legs){
            $this->legs = $legs;
        }

        public function yell() {
            echo "<br>".'ketika kera berteriak berbunyi = '. $this->teriak;
        }

    }

?>