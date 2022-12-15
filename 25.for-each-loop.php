<?php

$nama = ["Fadhil", "Muhammad", "Mitsurugi", "Kyouya"];

// tanpa menggunakan foreach
for($i = 0; $i < count($nama); $i++) {
    echo "Data ke $i adalah $nama[$i]" . PHP_EOL;
}

// menggunakan foreach
foreach($nama as $ngaran) {
    echo "ouput dari variable nama : $ngaran" . PHP_EOL;
}

// menggunakan foreach namun dengan key-value string
$alamat = [
    "Negara" => "Indonesia",
    "Provinsi" => "Jawa Barat",
    "Kota/Kabupaten" => "Kabupaten Bandung",
    "Kelurahan" => "Ciparay"
];
foreach($alamat as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}

// menggunakan foreach namun dengan key-value (index)
foreach($nama as $no => $nami) {
    echo "data $no => $nami" . PHP_EOL;
}
