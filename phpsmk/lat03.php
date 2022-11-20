<?php 
    
    function belajar(){
        echo "saya belajar php";
    }
    //belajar();

    function luas($p=5, $l=3){    
    $luas=$p*$l;
    return $luas;
    }

    //luaspersegi(1000,300);

    function output (){
        return "belajar function";
    }
    //echo '<h1>'.output().'</h1>';

    echo luas(100,3)*5;
?>