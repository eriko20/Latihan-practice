<?php 

    // $nama = array('celeg', 'hesti', 'siti',100);
    
    // var_dump($nama);

    // echo '<br>';

    // foreach ($nama as $key => $value) {
    //     echo $key."=>".$value;
    //     echo "<br>";
    // }

    $nama = array(
        "brody" => "surabaya",
        "rafi" => "sidoarjo",
        "hesti" => "jaktim",
        "toni" => "jakarta selatan"
    );
    
    var_dump($nama);
    echo "<br>";

    foreach ($nama as $key => $value) {
        echo $key." => ". $value;
        echo "<br>";
    }


?>