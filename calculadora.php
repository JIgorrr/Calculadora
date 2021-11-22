<?php
class calculadora {
    private $total;
    private $numero01;
    private $numero02;

        function __construct() {
            $this->total=0;
            $this->numero01=0;
            $this->numero02=0;

        }
        public function setNumero01($numero01) {
            $this -> numero01 = $numero01;
        }

        public function setNumero02($numero02) {
            $this -> numero02 = $numero02;
        }

        public function setTotal($total) {
            $this -> total = $total;
        }

        public function somar() {
            $this -> total = $this -> numero01+$this->numero02;
        }

        public function subtrair() {
            $this -> total = $this -> numero01-$this->numero02;
        }

        public function multiplicar() {
            $this -> total = $this -> numero01*$this->numero02;
        }

        public function divisao() {
            $this -> total = $this -> numero01/$this->numero02;
        }

        public function getTotal() {
            return $this->total;
        }
}


?>
