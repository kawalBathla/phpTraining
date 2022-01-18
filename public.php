<?php
    class Myclass
    {
        public $a = 10;
        private $b = 20;
        protected $c = 30;
        function test() {
             $d = $this->a + $this->b + $this->c;
             return $d;
        }

    }
        class add extends Myclass
        {
            public function test() {
                 parent::test();
            }
        }
    $obj = new Myclass();
    $result = $obj ->test();
    echo $result;
    /**     in public function all access modifiers can be accessed  */


?>