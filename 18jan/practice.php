<?php

// class Myclass 
//     {
//         function __construct($c)
//         {
//           echo $c;  
//         }
//         private function private($a) {
//             return $a;
//         }
//         public function protected($b) {
//             return $b;
//         }
//         function test() {
//             echo $this->private("kawal");
//         }
//         function test1()
//         {
//             echo $this->protected("how");
//         }
//         function __destruct()
//         {
//             echo "are you ?";
//         }
        
//     }
//     class Demo extends Myclass 
//     {
//         function __construct()
//         {
//             echo "have";        
//         }
//     }
//     $obj = new Demo("hello");
//     // $ob = new Myclass("hello");
//     $obj->test();
//     $obj->test1();

    /*    in class one destruct and construct function is work  */
    
    /* 
    -------------------------class Maths---------------------
    */
    // class Maths
    // {
    //     public $a = 100;
    //     function odd() {
    //         if($this->a%2==0) {
    //             echo "even no.";
    //         }else {
    //             echo "odd no.";
    //         }
    //     }
    //     public function root() {
    //         $b = $this->a;
    //         $not = 0;
    //         for($i = 0; $i<$b/2; $i++) {
    //             if($i*$i==$b) {
    //                 echo $i;die;
    //             }
    //              else {
    //                 ++$not;
    //                 // echo "Root not found!";
    //             }
    //         }
    //         if($not > 0) {
    //             echo "root not found";
    //         }
            
    //     }
    // }
    // $ob = new Maths;
    // $ob->root();

    /* 
    -------------------------class Maths---------------------
    */
    // class Test
    // {
    //     function Test() {
            
    //         echo "hello";
    //     }
    
    // }
    // $obj = new Test;

    /* -------  if the name of function is same as class then it became construct--------  */



// class Test
//         {
//             function a() {
//                 echo "hello";
//             }
//         }
//         class Test1 extends Test
//         {
//             function b() {
//                 echo "kawal";
//             }
//         }
//         class Test2 extends Test1
//         {
//             function c() {
//                 echo "by";
//             }
//         }
//         $obj = new Test2;
//         $obj->a();
//         $obj->b();
//         $obj->c();


        /*---------we also extends the child class-------//*/





    // class Test
    // {
    //     public function ab() {
    //         echo "hello";
    //     }
    // }
    // class Test1 extends Test
    // {
    //     function ab(){
    //         echo "kawal";
    //     }
    // }
    // $obj = new Test1;
    // $obj->ab();


    /*-------overriding---------*/


    // function table($a) {
    //     if($a <= 10) {
    //         $b = 2;
    //         $table = $a*$b;
    //         echo $table;
    //         $a++;
    //         table($a);
    //     }
    // }
    // table(1);


    /*---------recursive function------------*/



    // class Test
    // {
    //     function abc(&$a) {
    //         $a .= "hello";
    //     }
    // }
    // $b = "hiii";
    // $obj = new Test;
    // $obj->abc($b);

    /* -------call by refernce-----*/
    // class abc
    // {
    //     const NAME = "kawal ";
    //     function constant() {
    //         echo "hello";
    //     }
    // }
    // echo abc::NAME;  
    // $obj = new abc();
    // $obj->constant();
   
    /*-------constant-------*/
?>