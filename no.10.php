<?php

$data = array(
    "id" => "Test105",
    "nama" => "RIKY PURNOMO",
    "alamat" => "JL. Bungur besar, Kec,Senen JAKARTA PUSAT",
    "tgllhr" => "04 NOVEMBER 1999",
    "foto" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQp2dOokcIMtUgIyf5Vlo4e1stxtH_WyGDhPODK17z0RA&s"
);

$dataJSON = json_encode($data);

$url = 'https://belajar.homemadeindonesia.com/adddata';

$options = array(
    'http' => array(
        'header' => "Content-Type: application/json\r\n",
        'method' => 'POST',
        'content' => $dataJSON
    )
);

$context = stream_context_create($options);

$result = file_get_contents($url, false, $context);

if ($result === false) {
    echo "Error in connecting to API";
} else {
    echo "Data added successfully", $result;
}
?>
