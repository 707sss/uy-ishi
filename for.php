<?php
$mahsulotlar = [
    "Non" => ["narxi" => 3000, "soni" => 2],
    "Sut" => ["narxi" => 15000, "soni" => 2],
    "Olma" => ["narxi" => 20000, "soni" => 1],
    "Guruch" => ["narxi" => 8000, "soni" => 3],
    "Shakar" => ["narxi" => 12000, "soni" => 1]
];

foreach ($mahsulotlar as $nomi => $malumot) {
    if ($nomi == "Olma") {
        echo $nomi . " ning narxi " . $malumot['narxi'] . " soʻm va " . $malumot['soni'] . " dona mavjud.";
    }
}
?>
