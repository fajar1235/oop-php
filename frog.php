<?php

require_once 'animal.php';



    class frog extends animal{

        public $lompat = 'hop hop'; 

        public function set_legs($legs){
            $this->legs = $legs;
        }

        public function set_cold($cold_blooded){
            $this->cold = $cold_blooded;
        }

        public function jump() {
            echo "<br>".'bunyi kodok melompat '. $this->lompat;
        }

    }

?>