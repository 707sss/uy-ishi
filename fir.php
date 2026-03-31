<?php

$students = [
    ["ism" => "Ali", "baholar" => [5, 4, 3, 5]],
    ["ism" => "Vali", "baholar" => [3, 3, 4, 2]],
    ["ism" => "Sami", "baholar" => [5, 5, 5, 4]],
];

$max = 0;
$top = "";

$min = 100;
$worst = "";

foreach ($students as $student) {

    $baholar = $student["baholar"];

    $i = 0;
    $sum = 0;

    while ($i < count($baholar)) {
        $sum = $sum + $baholar[$i];
        $i++;
    }

    $avg = $sum / count($baholar);

    if ($avg >= 4.5) {
        $status = "A'lo";
    } else if ($avg >= 3.5) {
        $status = "Yaxshi";
    } else if ($avg >= 2.5) {
        $status = "Qoniqarli";
    } else {
        $status = "Yomon";
    }

    if ($status == "A'lo") {
        $grade = "A";
    } else if ($status == "Yaxshi") {
        $grade = "B";
    } else if ($status == "Qoniqarli") {
        $grade = "C";
    } else {
        $grade = "D";
    }

    echo $student["ism"] . " - " . $avg . " - " . $status . " - " . $grade . "<br>";

    for ($j = 0; $j < 1; $j++) {
        if ($avg > $max) {
            $max = $avg;
            $top = $student["ism"];
        }
    }

    if ($avg < $min) {
        $min = $avg;
        $worst = $student["ism"];
    }
}
echo "<br>Eng kuchli: $top ($max)";
echo "<br>Eng past: $worst ($min)";
?>
