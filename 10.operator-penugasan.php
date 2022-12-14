<?php

$keperluan = 0;
$budget = 2_000_000;

$jasHujan = 250_000;
$bracketMonitor = 500_000;
$sepatu = 250_000;

$keperluan += $jasHujan;
$keperluan += $bracketMonitor;
$keperluan += $sepatu;

$hasil = $budget - $keperluan;

echo "Keperluan untuk membeli barang adalah : ";
var_dump($keperluan);

echo "Budget yang dimiliki adalah : ";
var_dump($budget);

echo "jika dikurangi maka akan mendapatkan hasil : ";
var_dump($hasil);



