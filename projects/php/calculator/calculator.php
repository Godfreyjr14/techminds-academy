<?php
    class Calculator {
        private $sum;
        public function __construct() {
        }
        public function add($num1, $num2) {
            $this->sum = $num1 + $num2;
            return $this ->sum;
        }
        public function subtract($num1, $num2) {
            $this->sum = $num1 - $num2;
            return $this ->sum;
        }
        public function multiply($num1, $num2) {
            $this->sum = $num1 * $num2;
            return $this ->sum;
        }
        public function divide($num1, $num2) {
            $this->sum = $num1 / $num2;
            return $this ->sum;
        }
        public function percentage($num1, $num2) {
            $this->sum = ($num1 / 100) * $num2;
            return $this ->sum;
        }
    }

?>