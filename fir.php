<?php

$students = [
    [
        "ism" => "Ali",
        "baholar" => [5, 4, 3, 5]
    ],
    [
        "ism" => "Vali",
        "baholar" => [3, 3, 4, 2]
    ],
    [
        "ism" => "Sami",
        "baholar" => [5, 5, 5, 4]
    ],
];

$maxAvg = 0;
$topStudent = "";

$minAvg = 100;
$worstStudent = "";

foreach ($students as $student) {

    $baholar = $student["baholar"];

    $i = 0;
    $sum = 0;
    $count = count($baholar);

    while ($i < $count) {
        $sum += $baholar[$i];
        $i++;
    }

    $avg = $sum / $count;

    if ($avg >= 4.5) {
        $status = "A'lo";
    } elseif ($avg >= 3.5) {
        $status = "Yaxshi";
    } elseif ($avg >= 2.5) {
        $status = "Qoniqarli";
    } else {
        $status = "Yomon";
    }

    $grade = match($status) {
        "A'lo" => "A",
        "Yaxshi" => "B",
        "Qoniqarli" => "C",
        "Yomon" => "D",
    };

    echo $student["ism"] . " - " . round($avg, 2) . " - " . $status . " - " . $grade . "<br>";

    for ($j = 0; $j < 1; $j++) {
        if ($avg > $maxAvg) {
            $maxAvg = $avg;
            $topStudent = $student["ism"];
        }
    }

    if ($avg < $minAvg) {
        $minAvg = $avg;
        $worstStudent = $student["ism"];
    }
}

echo "<br>🏆 Eng kuchli student: $topStudent ($maxAvg)";
echo "<br>💀 Eng past student: $worstStudent ($minAvg)";

?>
