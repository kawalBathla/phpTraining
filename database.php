<?php
    include"config.php";
    // echo $sereverName;die;
    class Mysql
    {
        function connectMyLove() {
            global $sereverName;
            global $userName;
        $GLOBALS['conn']= mysqli_connect($sereverName,$userName,"");
        }
        function database($dbName) {
            global $conn;
            
            $database = "create database $dbName";
            $query = mysqli_query($conn,$database);
            if($query) {
                echo "ok";
            }
        }
    }
    $ob = new Mysql;
    $ob->connectMyLove();
    $ob->database("MyLove");
   