<?php
    class Test
    {
        private function private() {
            return"hello";
        }
        public function abc() {
             return $this->private();
        }
    }
    class Test1 extends Test
    {
        public function abc() {
           echo parent::abc();
        }

    }
    $obj = new Test1();
    $obj->abc();
    // $obj->abc();
    /*  private function always access in public function  */
    /*  In inheritance firstly access in public function with in class then in child class  */
?>