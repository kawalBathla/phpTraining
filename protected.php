<?php
    class Abc
    {
        protected function protected() {
            return"hello";
        }
        public function test() {
            echo $this->protected();
        }
    }
        class A extends Abc
        {
           protected function test1() {
               return parent::test();
           } 
           public function result() {
               echo $this->test1();
           }
        }
    $obj = new A();
    $obj->result();
?>