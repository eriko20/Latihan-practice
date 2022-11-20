<?php 
//array dimensi


    $nama = array ("joni","tejo","budi","siti",100,2.5);

    var_dump($nama);

    echo "<br>";

    echo $nama[5];

    echo "<br>";

    // for ($i=0; $i < 6; $i++) { 
    //     //echo $i;
    //     echo $nama[$i]."<br>";
    // }

        // foreach ($nama as $key) {
        //     echo $key."<br>";
        // }

    // $nama=array(
    //     "joni" => 'surabaya',
    //     "budi" => 'sidoarjo raya',
    //     "tejo" => 'barat',
    //     'siti' => 'jakarta'
    // );
    // var_dump($nama);
    // echo "<br>";
    // echo "<br>";
    $nama ["siti"]="surabaya";
    $nama ["joko anwar"]="surabaya";
    $nama ["ngab munchen"]="surabaya";
    $nama ["ok joy"]="surabaya";

    // echo $nama["joni"];

    echo "<br>";


    foreach ($nama as $key => $value) {
        echo $key.' => '.$value;

        echo "<br>";

    }
    

?>