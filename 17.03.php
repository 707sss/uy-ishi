<?php

$massiv = [
    ["mers" => "Mers", "nechta"=>13 , "narxi"=>1500],
    ["BMW" => "bmw", "nechta"=>12, "narxi"=>1600],
    ["Maclarin" => "Maclasrin", "nechta"=>11, "narxi" => 1200],
    ["Pursh911"=> "pursh911", "nechta"=>14, "narxi"=>1000],
    ["Malibu"=> "MAlibu", "nechta"=>11, "narxi"=>500],
];

$cart2 =[
    ["mers" => "Mers", "nechta"=>3, ],
    ["BNW" => "bmw", "nechta"=>2],
    ["Maclarin" => "maclarin", "nechta"=>1],
    ["Pursh911" => "pursh911", "nechta"=>2],
    ["Malibu" => "malibuy", "nechta"=>3],
];



echo "Salonda" . $cart2[0]["nechta"] ."ta Mers <br>";
echo "Salonda" . $cart2[1]["nechta"] ."ta BMW <br>";
echo "Salonda" . $cart2[2]["nechta"] ."ta Maclarin <br>";
echo "Salonda" . $cart2[3]["nechta"] ."ta purish911 <br>";
echo "Salonda" . $cart2[4]["nechta"] ."ta MAlibu <br>";

echo "Olindi" . $cart2[0]["nechta"] ."ta Mers <br>";
echo "Olindi" . $cart2[1]["nechta"] ."ta BMW <br>";
echo "Olindi" . $cart2[2]["nechta"] ."ta Maclarin <br>";
echo "Olindi" . $cart2[3]["nechta"] ."ta purish911 <br>";
echo "Olindi" . $cart2[4]["nechta"] ."ta MAlibu <br>";

echo "Narxi : <br>";

echo 
($cart[0]["narxi"] * $cart2[0]["qancha"])+
($cart[1]["narxi"] * $cart2[1]["qancha"])+
($cart[2]["narxi"] * $cart2[2]["qancha"])+
($cart[3]["narxi"] * $cart2[3]["qancha"])+
($cart[4]["narxi"] * $cart2[4]["qancha"]) . "USB";       //ikki ta mashina qo'shami va ularni sonini 0 ta qilamiz va onbor xonadagi mashinalarni nechta bor yo'qligini hisoplaydigan bo'lsin qo'shilgan masshinalarni bor yo'qligini anqlash 



?>
