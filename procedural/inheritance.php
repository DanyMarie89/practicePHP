<?php
    class Cars {
        public $make;
        public $model;

        public function __construct($make, $model) {
            $this->make = $make;
            $this->model = $model;
        }

        public function intro() {
            echo "Make: {$this->make} <br>Model: {$this->model}";
        }
    }

    class Honda extends Cars {
        public function message() {
            echo "Am I foreign or not?";
        }
    }

    $honda = new Honda("Honda", "Civic");
    $honda->intro();
    $honda->message();
?>