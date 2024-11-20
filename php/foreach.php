<?php 

    // $nama = array('karina', 'giselle', 'winter', 75);

    // var_dump($nama);

    // echo '<br>';

    // foreach ($nama as $key) {
    //     echo $key. '<br>';
    // }

    $nama = array(
        "karina" => "surabaya",
        "giselle" => "jakarta",
        "winter" => "bandung"
    );

    var_dump($nama);
    echo '<br>';
    foreach ($nama as $a => $b) {
        echo $a. '-' .$b;
        echo '<br>';
    }

?>