<?php

// terdapat 2 cara untuk membuat array

$values = array(1, 2, true, false, "Hello", "World!");
var_dump($values);

$nama = ["Fadhil", "Muhammad", "Mitsurugi", "Kyouya"];
var_dump($nama);

// Operasi array

// $array[index]
// $array[index] = value
// $array[] = value
// unset($array[index])
// count($array)

var_dump($nama[0]); // mengakses data

$nama[0] = "Heinz"; // mengubah data
var_dump($nama);

unset($nama[2]); // menghapus data
var_dump($nama);

$nama[] = "Rudi"; // menambahkan data
var_dump($nama);

var_dump(count($nama)); // menampilkan jumlah data


// array juga bisa digunakan untuk map
// map yaitu asosiasi antara key dan value
// kita juga dapat menambahkan array didalam array

$user1 = array(
    "id" => "Fadhil",
    "nama" => "Fadhil Muhammad",
    "umur" => 20, 
    "alamat" => array(
        "kota" => "Bandung",
        "negara" => "Indonesia"
    )
);

var_dump($user1);
var_dump($user1["nama"]); // cara untuk mengakses datanya
var_dump($user1["alamat"]["kota"]); // cara untuk mengakses data array didalam array

$user2 = [
    "id" => "Kyouya",
    "nama" => "Mitsurugi Kyouya",
    "umur" => 20,
    "alamat" => [
        "kota" => "Bandung",
        "negara" => "Indonesia"
    ]
];

var_dump($user2);
