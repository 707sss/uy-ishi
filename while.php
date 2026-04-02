<?php

$users = [
    ["login" => "admin", "parol" => "1234", "status" => "active"],
    ["login" => "user1", "parol" => "1111", "status" => "blocked"],
    ["login" => "user2", "parol" => "2222", "status" => "active"],
];

$inputLogin = "admin";
$inputParol = "1234";

$topildi = false;
$xabar = "rrrr";

foreach ($users as $user) {

    if ($user["login"] == $inputLogin && $user["parol"] == $inputParol) {
        $topildi = true;

        if ($user["status"] == "active") {
            $xabar = "Xush kelibsiz";
        } else {
            $xabar = "Siz bloklangansiz";
        }

        break;
    }
}

if ($topildi == false) {
    $xabar = "Login yoki parol xato";
}

echo $xabar;

switch ($xabar) {
    case "Xush kelibsiz":
        echo " ✅";
        break;

    case "Siz bloklangansiz":
        echo " ⛔️";
        break;

    case "Login yoki parol xato":
        echo " ❌";
        break;
}


$i = 0;
$countActive = 0;

while ($i < count($users)) {
    if ($users[$i]["status"] == "active") {
        $countActive++;
    }
    $i++;
}

echo "<br>Active userlar soni: " . $countActive;

?>
