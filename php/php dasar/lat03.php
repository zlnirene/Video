<?php 

    function belajar(){
        echo 'saya belajar PHP';
    }

    function luasPersegi($p = 5, $l = 2){
        $luas = $p * $l;
        echo $luas;
    }

    function luas($p = 5, $l = 3){
        $luas = $p * $l;
        return $luas;
    }

    function output(){
        return 'belajar function';
    }

    echo luas(5,5) * 4;
?>