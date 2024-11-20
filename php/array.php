<?php 

    // array dimensi

    // $nama = array("karina", "winter", "ningning", "giselle", 100, 2.5);
    // var_dump($nama);
    // echo "<br>";
    // echo $nama[4];

    // echo "<br>";

    // for ($i=0; $i < 6; $i++) { 
    //     // echo $i;
    //     echo $nama[$i]."<br>";
    // }

    // foreach ($nama as $key) {
    //     echo $key. '<br>';
    // }

    // array asosiatif

    // $nama = array(
    //     "karina" => "jakarta",
    //     "winter" => "bandung",
    //     "ningning" => "surabaya",
    //     "giselle" => "tangerang"
    // );

    $nama["karina"]="jakarta";
    $nama["winter"]="bandung";
    $nama["ningning"]="surabaya";
    $nama["giselle"]="tangerang";
    $nama["andypark"]="medan";



    var_dump($nama);

    echo "<br>";

    // echo $nama['giselle'];

    foreach ($nama as $k => $v) {
        echo $k. " => ". $v;

        echo "<br>";
    }





?>