<?php
    class Practice
    {
        public $a = "hello";
        protected $b = "kawal";
        private $c = "how are you ?";
        public function public() {
            $d = $this->a." ";
            echo $d;
        }
        private function private() {
            $e = $this->b;
            return $e;
        }
        protected function protected() {
            $f = $this->private();
            return $f;
        }
        public function public1() {
            echo $this->protected()." ";
        }
        protected function protected1() {
            return $this->c;
        }
    }
    class Result extends Practice
    {
        public function public2() {
            echo $this->protected1();
        }
    }
    $obj = new Practice();
    $obj->public();
    $obj->public1();
    $ob = new Result();
    $ob->public2();


    /*   output: hello kawal how are you ?*/
?>