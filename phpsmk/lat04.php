<?php 

    // operator matematika

    $a=5;
    $b=2;

    $c=$a+$b;

    echo $c.'<br>';

    $c= $a - $b;
    echo $c.'<br>';

    $c= $a * $b;
    echo $c.'<br>';

    $c=$a / $b;
    echo floor($c).'<br>';

    $c = $a % $b;
    echo $c.'<br>';

    //operator logika

    $c=$a < $b;
    echo $c.'<br>';

    $c= $a > $b;
    echo $c;

    $c= $a == $b;
    echo $c;

    $c = $a != $b;
    echo $c.'<br>';

    //inkrement(++) and dekrement (--)
    $a--;
    echo $a.'<br>';

    //operator string

    $kata=' sura ';
    $kota=' baya ';

    $hasil= $kata.$kota;

    $hasil .=" kota pahlawan " ;
    echo $hasil;







?>