<?php

$data = [
    "action" => "create"
];

// tanpa menggunakan null coalescing operator
if (isset($data["action"])) {
    $action = $data["action"];
} else {
    $action = "Nothing";
}

echo $action . PHP_EOL;

// menggunakan null coalescing operator
$action = $data["action"] ?? "NOthing";

echo $action . PHP_EOL;